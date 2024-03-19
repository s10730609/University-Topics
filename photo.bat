#!/bin/sh
count=1
while test $count -gt 0
do
	DATE="$(date +'%Y-%m%d_%h%M')"
	sudo raspistill -f -vf -hf -o /var/www/html/water/$DATE.jpg
	php /var/www/html/water/time.php
	sleep 1800
done