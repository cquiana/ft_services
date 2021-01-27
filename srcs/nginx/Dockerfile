FROM alpine:latest

RUN apk update
RUN apk add nginx openssh openssl supervisor vim

RUN chown -R nginx:nginx /var/lib/nginx
RUN mkdir -p /run/nginx
RUN adduser -D admin && echo "admin:admin" | chpasswd
RUN ssh-keygen -A

RUN openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes \
	-out /etc/ssl/certs/selfsign.crt \
	-keyout /etc/ssl/certs/selfsign.key -subj "/C=RU/ST=Moscow/L=Moscow/O=SCHOOL21/CN=cquiana"

COPY /srcs/nginx.conf /etc/nginx/nginx.conf
COPY /srcs/supervisord.conf /etc/supervisord.conf
COPY /srcs/nginx_start.sh .
RUN  chmod +rw /etc/supervisord.conf
RUN  chmod +x nginx_start.sh

EXPOSE 80 443 22

ENTRYPOINT ["./nginx_start.sh"]
