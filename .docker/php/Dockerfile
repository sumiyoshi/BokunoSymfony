FROM php:7.3

RUN apt-get update
RUN apt-get install -y git zip unzip libzip-dev

RUN docker-php-ext-install -j$(nproc) zip

# composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN composer config -g repos.packagist composer https://packagist.jp

WORKDIR /var/opt/app

EXPOSE 80

# CMD tail -f /dev/null
CMD ["php", "-S", "0.0.0.0:80", "-t", "./public", "./public/index.php"]