FROM alpine:latest

RUN apk update && apk upgrade

RUN apk add --repository=http://dl-cdn.alpinelinux.org/alpine/edge/main libc6-compat

ADD https://dl.grafana.com/oss/release/grafana-7.3.7.linux-amd64.tar.gz .
RUN tar -xzvf grafana-7.3.7.linux-amd64.tar.gz --strip-components 1 > dev/null

RUN mkdir -p /conf/provisioning/dashboards/json
COPY /srcs/custom.ini /conf/
COPY /srcs/dashboard.yaml /conf/provisioning/dashboards/
COPY /srcs/datasources.yaml /conf/provisioning/datasources/
COPY /srcs/dashboards/*.json /conf/provisioning/dashboards/json/

EXPOSE 3000
ENTRYPOINT ["./bin/grafana-server"]
