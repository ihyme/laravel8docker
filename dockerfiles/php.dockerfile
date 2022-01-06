FROM php:7.4-fpm
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y libpq-dev
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install pdo pdo_pgsql
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
CMD ["composer","install"]
CMD ["chmod","777","-R","storage"]
CMD ["chmod","777","-R","bootstrap"]
CMD ["php-fpm", "-F"]
