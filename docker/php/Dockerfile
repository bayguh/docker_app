FROM php:7.0.27-fpm

MAINTAINER hiroki_shimada <hsnonsense5@gmail.com>

RUN apt-get update \
  && docker-php-ext-install \
    cli \
    common \
    mbstring \
    opcache \
    pdo \
    xml \
    xmlrpc \
    mcrypt \
    process \
    mysqlnd \
    bcmath \
    intl \
    pear \
    timecop

RUN apt-get update \
  && pecl install apcu \
  && pecl install memcached-3.0.3 \
  && pecl install redis-3.2.11 \
  && pecl install msgpack \
  && pecl install zip \
  && docker-php-ext-enable apcu memcached redis msgpack zip opcache
