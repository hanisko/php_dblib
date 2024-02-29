FROM php:apache

RUN apt-get update && apt-get install -y \
    freetds-dev \
    freetds-bin && \
    rm -rf /var/lib/apt/lists/*;

RUN docker-php-ext-install pdo && \
    docker-php-ext-configure pdo_dblib --with-libdir=/lib/x86_64-linux-gnu && \
    docker-php-ext-install pdo_dblib && \
    docker-php-ext-enable pdo_dblib


