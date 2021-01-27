FROM alpine:latest
RUN apk update

RUN apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli \
        php7-zlib php7-curl php7-mbstring php7-json php7-session \
        nginx php-fpm openssl supervisor vim

RUN adduser -D -g 'www' www
RUN mkdir /www && mkdir -p /run/nginx
RUN chown -R www:www /var/lib/nginx && chown -R www:www /www

# chmod 744 /run/nginx

WORKDIR /www

ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz ./
RUN tar -xvf phpMyAdmin*tar* --strip-components 1
RUN rm -rf phpMyAdmin-5.0.4-all-languages.tar.gz

# RUN mkdir /phpmyadmin/tmp && chmod 777 /phpmyadmin/tmp

COPY /srcs/config.inc.php .
COPY /srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY /srcs/supervisord.conf /etc/supervisord.conf

COPY /srcs/pma_start.sh .
RUN chmod +x pma_start.sh

EXPOSE 5000

ENTRYPOINT ["./pma_start.sh"]
