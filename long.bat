#!/bin/sh
count=1
while test $count -gt 0
do
	php /var/www/html/water/sumt.php
	php /var/www/html/water/h.php
	sleep 30
	php /var/www/html/water/l.php
	sleep 7200
done