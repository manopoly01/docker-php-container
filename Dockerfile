# Verwende das offizielle PHP-Image als Basis
FROM php:apache

# Setze das Arbeitsverzeichnis auf das Web-Root
WORKDIR /var/www/html

# Kopiere den lokalen Code in das Image
COPY ./src/ /var/www/html/

# Exponiere Port 80
EXPOSE 80
