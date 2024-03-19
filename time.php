<?php

$time = date("Y-md_Hi");
$timehh = date("Y-md_Hi",time()-1800);
$timeah = date("Y-md_Hi",time()-3600);
$timeo = (string)$time;
$timet = (string)$timehh;
$timeth = (string)$timeah;


?>
<?php   // 先建一個 DB cs，　cs中建一table `course` (`id`, `name`, `must`, `year`) 

header("Content-Type:text/html; charset=utf-8");
// Open a Connection to MySQL

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_set_charset($conn,"utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "Connected successfully";

$sql=sprintf("
INSERT INTO `iot`.`time` (`time`,`timehh`,`timeah`) VALUES
('%s','%s','%s');
",$timeo,$timet,$timeth);

echo $sql;
//mysql_query("SET NAMES utf8");

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


