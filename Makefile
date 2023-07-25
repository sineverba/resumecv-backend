include .env
IMAGE_NAME=registry.gitlab.com/cicdprojects/resumecv-backend
CONTAINER_NAME=resumecv-backend
APP_VERSION=1.2.0-dev
SONARSCANNER_VERSION=4.8.0
BUILDX_VERSION=0.11.2
BINFMT_VERSION=qemu-v7.0.0-28
PHP8XC_VERSION=1.15.0
PHP_VERSION=8.2.8
PWD:=$(shell dirname $(realpath $(firstword $(MAKEFILE_LIST))))
SONARSCANNER_VERSION=4.8.0

preparemulti:
	mkdir -vp ~/.docker/cli-plugins
	curl \
		-L \
		"https://github.com/docker/buildx/releases/download/v$(BUILDX_VERSION)/buildx-v$(BUILDX_VERSION).linux-amd64" \
		> \
		~/.docker/cli-plugins/docker-buildx
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
	docker compose up -d
	docker compose exec app php artisan l5-swagger:generate
	docker compose stop

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
	docker compose down
	docker image rm nginx:1.25.1-alpine3.17-slim
	docker image rm mysql:8.0.34
	docker image rm adminer:4.8.1-standalone
	docker image rm php:8.2.8-fpm
	docker image rm $(IMAGE_NAME):$(APP_VERSION)

sonar:
	docker run --rm -it \
		--name sonarscanner \
		-v $(PWD):/usr/src \
		-e SONAR_HOST_URL=$(SONAR_HOST_URL) \
		-e SONAR_TOKEN=$(SONAR_TOKEN) \
		sonarsource/sonar-scanner-cli:$(SONARSCANNER_VERSION)

