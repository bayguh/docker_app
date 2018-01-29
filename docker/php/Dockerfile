FROM php:7.0.27-fpm

MAINTAINER hiroki_shimada <hsnonsense5@gmail.com>

RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    apt-utils \
    libicu-dev \
    libmcrypt-dev \
    libxml2-dev \
    libzip-dev \
    libmemcached-dev \
  && apt-get clean -y \
  && rm -rf /var/lib/apt/lists/*

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
    intl \
  && apt-get clean -y \
  && rm -rf /var/lib/apt/lists/*

RUN apt-get update \
  && pecl install apcu \
  && pecl install redis \
  && pecl install memcached \
  && pecl install msgpack \
  && pecl install timecop-beta \
  && pecl install zip \
  && docker-php-ext-enable apcu memcached redis msgpack zip timecop opcache \
  && apt-get clean -y \
  && rm -rf /var/lib/apt/lists/*
