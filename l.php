<?php
function openSerial($command) {
    $openSerialOK = false;
    try {
        exec("mode com3: BAUD=9600 PARITY=n DATA=8 STOP=1 to=off dtr=off rts=off");
        $fp =fopen("com3", "w");
        //$fp = fopen('/dev/ttyUSB0','r+'); //use this for Linux
        $openSerialOK = true;
    } catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
 
    if($openSerialOK) {
        fwrite($fp, $command); //write string to serial
        fclose($fp);
    }   
}
 
openSerial("Without this line, the first control will not work. I don't know way.");
 

openSerial("L");

 


?>
 



