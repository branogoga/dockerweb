docker run -d -p 8080:80 --name web -v "%cd%\..\source":/var/www/html php:7.2-apache
