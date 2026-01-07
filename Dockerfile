FROM wordpress:latest

RUN mkdir -p /var/www/html/wp-content/themes/fraueule
RUN chown -R 1000:1000 /var/www/html


