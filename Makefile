include .env
IMAGE_NAME=registry.gitlab.com/cicdprojects/resumecv-backend
CONTAINER_NAME=resumecv-backend
APP_VERSION=0.4.1-dev
SONARSCANNER_VERSION=4.8.0
BUILDX_VERSION=0.10.0
BINFMT_VERSION=qemu-v7.0.0-28
PWD:=$(shell dirname $(realpath $(firstword $(MAKEFILE_LIST))))

preparemulti:
	mkdir -vp ~/.docker/cli-plugins
	curl -L "https://github.com/docker/buildx/releases/download/v$(BUILDX_VERSION)/buildx-v$(BUILDX_VERSION).linux-amd64" > ~/.docker/cli-plugins/docker-buildx
	chmod a+x ~/.docker/cli-plugins/docker-buildx
	docker buildx version
	docker run --rm --privileged tonistiigi/binfmt:$(BINFMT_VERSION) --install all
	docker buildx ls
	docker buildx rm multiarch
	docker buildx create --name multiarch --driver docker-container --use
	docker buildx inspect --bootstrap --builder multiarch

multi:
	docker buildx build \
		--platform linux/arm64/v8,linux/amd64,linux/arm/v6,linux/arm/v7 \
		--tag $(IMAGE_NAME):$(APP_VERSION) \
		--tag $(IMAGE_NAME):latest \
		--push \
		--file dockerfiles/production/build/docker/Dockerfile "."

build:
	docker build --tag $(IMAGE_NAME):$(APP_VERSION) --file dockerfiles/production/build/docker/Dockerfile "."

push:
	docker push $(IMAGE_NAME):$(APP_VERSION)

spin:
	docker run --rm --name $(CONTAINER_NAME) -p 8001:80 $(IMAGE_NAME):$(APP_VERSION)

stop:
	docker container stop $(CONTAINER_NAME)

destroy:
	docker image rm $(IMAGE_NAME):$(APP_VERSION)

sonar:
	sudo chown sineverba:sineverba coverage/
	sed -i -e 's,/data,/usr/src,g' sonar-project.properties
	sed -i -e 's,/data,/usr/src,g' coverage/clover.xml
	docker run --rm -e SONAR_HOST_URL=$(SONAR_HOST_URL) -e SONAR_LOGIN=$(SONAR_LOGIN) -v $(PWD):"/usr/src" sonarsource/sonar-scanner-cli:$(SONARSCANNER_VERSION)
	sed -i -e 's,/usr/src,/data,g' sonar-project.properties
	sed -i -e 's,/usr/src,/data,g' coverage/clover.xml
