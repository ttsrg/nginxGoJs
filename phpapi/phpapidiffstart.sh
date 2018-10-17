#!/bin/bash
PHP_SCRIPT="/srv/phpapi/phpapidiff -a 127.0.0.1 -p 9011 -u www-data -g www-data -f /usr/bin/php-fastcgi"
RETVAL=0
case "$1" in
start)
$PHP_SCRIPT
RETVAL=$?
;;
stop)
killall -9 phpapidiff
RETVAL=$?
;;
restart)
killall -9 phpapidiff
$PHP_SCRIPT
RETVAL=$?
;;
*)
echo "Usage: sudo /etc/init.d/init-fastcgi {start|stop|restart}"
exit 1
;;
esac
exit $RETVAL
