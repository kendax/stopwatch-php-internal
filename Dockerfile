# Using php 7.2 as the base image
FROM php:7.2-apache

# copy all the project files into the image's var/www/html directory so that Apache can serve them
COPY . /var/www/html/

# Open up port 80 in the container which is the port Apache runs on to serve HTTP
EXPOSE 80
