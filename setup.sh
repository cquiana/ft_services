#!/bin/sh

minikube start --driver=hyperkit
minikube addons enable metallb
minikube addons enable metrics-server
minikube addons enable dashboard

kubectl apply -f srcs/metallb/metallb.yaml

eval $(minikube -p minikube docker-env)
docker build -t nginx-img ./srcs/nginx
docker build -t mariadb-img ./srcs/mariadb
docker build -t phpmyadmin-img ./srcs/phpmyadmin
docker build -t wordpress-img ./srcs/wordpress
docker build -t ftps-img ./srcs/ftps
docker build -t influxdb-img ./srcs/influxdb
docker build -t telegraf-img ./srcs/telegraf
docker build -t grafana-img ./srcs/grafana

kubectl apply -f ./srcs/nginx/nginx.yaml
kubectl apply -f ./srcs/mariadb/mysql.yaml
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f ./srcs/wordpress/wordpress.yaml
kubectl apply -f ./srcs/ftps/ftps.yaml
kubectl apply -f ./srcs/influxdb/influxdb.yaml
kubectl apply -f ./srcs/telegraf/telegraf.yaml
kubectl apply -f ./srcs/grafana/grafana.yaml
