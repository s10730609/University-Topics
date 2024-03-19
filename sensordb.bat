#!/bin/sh
count=1
while test $count -gt 0
do
	php /var/www/html/water/sensordb.php
	sleep 3600
done