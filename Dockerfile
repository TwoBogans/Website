FROM php:7.2-apache
COPY ./ /var/www/html/
EXPOSE 80/tcp
EXPOSE 443/tcp
