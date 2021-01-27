
FROM alpine:latest

RUN	apk update && apk upgrade
RUN	apk add vim wget
RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/community/" >> /etc/apk/repositories
RUN apk add telegraf

COPY /srcs/telegraf.conf /etc/telegraf/telegraf.conf

ENTRYPOINT ["/usr/bin/telegraf"]
