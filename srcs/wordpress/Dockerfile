FROM alpine:latest

RUN apk add nginx php-fpm supervisor
RUN	apk add php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib\
			php7-curl php7-mbstring php7-json php7-session mysql-client


RUN adduser -D -g 'www' www
RUN mkdir /www && mkdir -p /run/nginx
RUN chown -R www:www /www && chown -R www:www /var/lib/nginx

ADD https://wordpress.org/latest.tar.gz .
RUN tar -zxvf latest.tar.gz && rm -f latest.tar.gz
RUN mv wordpress /www/

COPY /srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY /srcs/wp-config.php /www/wordpress/
COPY /srcs/supervisord.conf /etc/supervisord.conf
COPY /srcs/wp_start.sh .

RUN chmod +x wp_start.sh

EXPOSE 5050

ENTRYPOINT ["./wp_start.sh"]
