##########################
##       SETUP          ##
##########################
FROM php:8.3.0-cli-alpine as builder

COPY --from=composer:2.6.6 /usr/bin/composer /usr/bin/composer

RUN mkdir -p /usr/src/docker

COPY ./ /usr/src/app

WORKDIR /usr/src/app

RUN composer install --no-dev

##########################
##       TEST           ##
##########################
FROM php:8.3.0-cli-alpine as test

RUN mkdir -p /usr/src/docker

COPY --from=builder /usr/bin/composer /usr/bin/composer
COPY --from=builder /usr/src/app /usr/src/app

WORKDIR /usr/src/app

RUN composer install

RUN vendor/bin/phpunit --no-coverage

##########################
##       DEPLOY         ##
##########################
FROM php:8.3.0-apache as deploy

RUN apt-get update -y && apt-get upgrade -y

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN docker-php-ext-install mysqli pdo pdo_mysql opcache && docker-php-ext-enable mysqli pdo pdo_mysql

COPY dockerfiles/production/build/apache/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY dockerfiles/production/build/apache/start-apache /usr/local/bin
COPY dockerfiles/production/build/php/opcache.ini $PHP_INI_DIR/conf.d/
RUN chmod +x /usr/local/bin/start-apache && a2enmod rewrite

# Copy application source
COPY --from=builder /usr/src/app /var/www
RUN chown -R www-data:www-data /var/www

# Generate swagger
ARG APP_VERSION=1.3.0
ARG L5_SWAGGER_CONST_HOST=https://resumecvbackend.k2p.it
ARG L5_SWAGGER_USE_ABSOLUTE_PATH=false
RUN rm /var/www/storage/api-docs/api-docs.json && \
    php /var/www/artisan l5-swagger:generate


CMD ["start-apache"]
