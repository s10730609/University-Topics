#!/bin/sh
count=1
while test $count -gt 0
do
	php /var/www/html/water/sensor.php
	sleep 2
done