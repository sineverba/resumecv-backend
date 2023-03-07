include .env
IMAGE_NAME=registry.gitlab.com/cicdprojects/resumecv-backend
CONTAINER_NAME=resumecv-backend
APP_VERSION=1.0.0-dev
SONARSCANNER_VERSION=4.8.0
BUILDX_VERSION=0.10.3
BINFMT_VERSION=qemu-v7.0.0-28
PHP8XC_VERSION=1.14.0
PHP_VERSION=8.2.3
PWD:=$(shell dirname $(realpath $(firstword $(MAKEFILE_LIST))))
QODANA_VERSION=2022.3-eap
SONARSCANNER_VERSION=4.8.0

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

multi: preparemulti
	docker buildx build \
		--platform linux/arm64/v8,linux/amd64,linux/arm/v6,linux/arm/v7 \
		--tag $(IMAGE_NAME):$(APP_VERSION) \
		--push \
		--file dockerfiles/production/build/docker/Dockerfile "."

test:
	docker run --rm --entrypoint php $(IMAGE_NAME):$(APP_VERSION) -v | grep $(PHP_VERSION)
	docker run --rm --entrypoint php $(IMAGE_NAME):$(APP_VERSION) /var/www/artisan key:generate --show

migrate:
	docker compose exec app php artisan migrate

swagger: fixswagger
	docker compose exec app php artisan l5-swagger:generate

fixswagger:
	sudo chown -R sineverba:sineverba resources/

build:
	docker build \
		--tag $(IMAGE_NAME):$(APP_VERSION) \
		--file dockerfiles/production/build/docker/Dockerfile \
		"."

push:
	docker push $(IMAGE_NAME):$(APP_VERSION)

spin:
	docker run --rm --name $(CONTAINER_NAME) -p 8001:80 $(IMAGE_NAME):$(APP_VERSION)

stop:
	docker container stop $(CONTAINER_NAME)

destroy:
	docker image rm $(IMAGE_NAME):$(APP_VERSION)

sonar:
	docker run --rm -it \
		--name sonarscanner \
		-v $(PWD):/usr/src \
		-e SONAR_HOST_URL=$(SONAR_HOST_URL) \
		-e SONAR_LOGIN=$(SONAR_TOKEN) \
		sonarsource/sonar-scanner-cli:$(SONARSCANNER_VERSION)

qodana:
	docker run --rm -it \
		-v $(PWD)/:/data/project/ \
		-p 8080:8080 jetbrains/qodana-php:$(QODANA_VERSION) \
		--show-report
