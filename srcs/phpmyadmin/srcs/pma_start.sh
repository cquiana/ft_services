#!/bin/sh

mkdir www/phpmyadmin/tmp
chmod 777 www/phpmyadmin/tmp

/usr/bin/supervisord -c /etc/supervisord.conf
