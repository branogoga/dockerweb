docker run --rm -d -p 80:80 --name apache -v "%cd%\..\source":/var/www/html php:7.2-apache
#docker run --rm -d --name mysql mariadb:10.1
