FROM alpine:latest

RUN apk update
RUN apk add influxdb

EXPOSE 8086

ENTRYPOINT ["/usr/sbin/influxd"]
