include .env
IMAGE_NAME=registry.gitlab.com/cicdprojects/resumecv-backend
CONTAINER_NAME=resumecv-backend
VERSION=0.2.0-dev
PWD:=$(shell dirname $(realpath $(firstword $(MAKEFILE_LIST))))

aaa:
	echo $(PWD)

build:
	docker build --tag $(IMAGE_NAME):$(VERSION) --file dockerfiles/app/Dockerfile.production  "."

push:
	docker push $(IMAGE_NAME):$(VERSION)

spin:
	docker run -d --rm --name $(CONTAINER_NAME) -p 8001:80 $(IMAGE_NAME):$(VERSION)

stop:
	docker container stop $(CONTAINER_NAME)

destroy:
	docker image rm $(IMAGE_NAME):$(VERSION)

sonar:
	sudo chown sineverba:sineverba coverage/
	sed -i -e 's,/data,/usr/src,g' sonar-project.properties
	sed -i -e 's,/data,/usr/src,g' coverage/clover.xml
	docker run --rm -e SONAR_HOST_URL=$(SONAR_HOST_URL) -e SONAR_LOGIN=$(SONAR_LOGIN) -v $(PWD):"/usr/src" sonarsource/sonar-scanner-cli:4.7
	sed -i -e 's,/usr/src,/data,g' sonar-project.properties
	sed -i -e 's,/usr/src,/data,g' coverage/clover.xml
