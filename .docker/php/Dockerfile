FROM php:7.3-fpm

ENV APP_DIR /var/opt/app

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql

WORKDIR ${APP_DIR}