FROM php:8.1.10-apache
COPY index.php /var/www/html/
EXPOSE 80/tcp
