##########################
##       SETUP          ##
##########################
FROM php:8.2.1-cli-alpine as builder

COPY --from=composer:2.5.1 /usr/bin/composer /usr/bin/composer

RUN mkdir -p /usr/src/app

COPY . /usr/src/app

WORKDIR /usr/src/app

RUN composer install --no-dev

##########################
##       TEST           ##
##########################
FROM php:8.2.1-cli-alpine as test

RUN mkdir -p /usr/src/app

COPY --from=builder /usr/bin/composer /usr/bin/composer
COPY --from=builder /usr/src/app /usr/src/app

WORKDIR /usr/src/app

RUN composer install

RUN vendor/bin/phpunit

##########################
##       DEPLOY         ##
##########################
FROM php:8.2.1-apache as deploy

RUN apt-get update -y && apt-get upgrade -y

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN docker-php-ext-install mysqli pdo pdo_mysql opcache && docker-php-ext-enable mysqli pdo pdo_mysql

COPY dockerfiles/production/apache/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY dockerfiles/production/apache/start-apache /usr/local/bin
COPY dockerfiles/production/app/opcache.ini $PHP_INI_DIR/conf.d/
RUN chmod +x /usr/local/bin/start-apache && a2enmod rewrite

# Copy application source
COPY --from=builder /usr/src/app /var/www
RUN chown -R www-data:www-data /var/www

CMD ["start-apache"]
