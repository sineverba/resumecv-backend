IMAGE_NAME=registry.gitlab.com/cicdprojects/resumecv-backend
CONTAINER_NAME=resumecv-backend
VERSION=0.1.0-dev

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
