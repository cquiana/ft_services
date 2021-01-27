FROM alpine:latest

RUN apk upgrade
RUN apk add openssl vsftpd vim

RUN adduser -D user
RUN echo "user:user" | chpasswd

RUN mkdir -p /home/user/ftps/upload
RUN chmod 755 /home/user/ftps && chmod 755 /home/user/ftps/upload
RUN chown -R user: /home/user/ftps/

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-subj "/C=RU/ST=Moscow/L=Moscow/O=SCHOOL21/CN=cquiana" \
	-keyout /etc/ssl/private/vsftpd_self.key \
	-out /etc/ssl/certs/vsftpd_self.crt

COPY /srcs/vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY /srcs/ftps_start.sh .
RUN chmod +x ftps_start.sh


EXPOSE 20 21 21000

ENTRYPOINT [ "./ftps_start.sh" ]
