FROM php:7.3.4-fpm

ADD ./src /var/www

WORKDIR /var/www
