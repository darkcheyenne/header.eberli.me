FROM php:8.4.7-apache
COPY index.php /var/www/html/
EXPOSE 80/tcp
