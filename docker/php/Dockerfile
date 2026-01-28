FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite

# Installation de Xdebug
RUN pecl install xdebug \
&& docker-php-ext-enable xdebug
# Copie de la config locale de xdebug.ini dans la config de xdebug sur le serveur créé dans le conteneur
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini