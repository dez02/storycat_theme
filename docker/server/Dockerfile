FROM wordpress:latest

RUN useradd -s /bin/bash -u 1000 -m user

ENV WORDPRESS_DB_HOST=database
ENV WORDPRESS_DB_USER=user
ENV WORDPRESS_DB_PASSWORD=password
ENV WORDPRESS_DB_NAME=wordpress
ENV APACHE_RUN_USER=user
ENV APACHE_RUN_GROUP=user

RUN echo "define('FS_METHOD', 'direct');" >> wp-config.php