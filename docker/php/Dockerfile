FROM php:7.0.27-fpm

MAINTAINER hiroki_shimada <hsnonsense5@gmail.com>

RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    apt-utils \
    libxml2-dev \
    libmcrypt-dev \
    libicu-dev \
    libzip-dev \
    libmemcached-dev \
  && apt-get clean -y

RUN apt-get update \
  && docker-php-ext-install \
    mysqli \
    pdo_mysql \
    mbstring \
    opcache \
    pdo \
    mcrypt \
    xml \
    xmlrpc \
    bcmath \
    intl

RUN apt-get update \
  && pecl install apcu \
  && pecl install memcached \
  && pecl install redis \
  && pecl install msgpack \
  && pecl install zip \
  && pecl install timecop-beta \
  && docker-php-ext-enable apcu memcached redis msgpack zip timecop opcache
