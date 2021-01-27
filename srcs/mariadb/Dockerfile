FROM alpine:latest

RUN apk update
RUN apk add openrc mysql mysql-client mariadb mariadb-client vim

RUN	mkdir "/run/mysqld" && chown -R mysql /run/mysqld

COPY /srcs/dump_wordpress.sql .
COPY /srcs/mrdb_start.sh .
COPY /srcs/mariadb-server.cnf /etc/my.cnf.d/

RUN chmod +x mrdb_start.sh

VOLUME ["/var/lib/mysql"]

EXPOSE 3306

ENTRYPOINT ["./mrdb_start.sh"]
