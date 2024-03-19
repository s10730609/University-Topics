#!/bin/bash
cd /var/www/html/water
sudo php -f l.php
sudo php -f zero.php
	sudo killall -9 bean.bat
	sudo killall -9 long.bat
	sudo killall -9 sensor.bat
	sudo killall -9 sensordb.bat
	sudo killall -9 photo.bat
	sudo killall -9 show.bat
sudo killall sleep

