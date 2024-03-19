#!/bin/sh
count=1
while test $count -gt 0
do
	php /var/www/html/water/sum.php
	php /var/www/html/water/h.php
	sleep 15
	php /var/www/html/water/l.php
	sleep 900
done