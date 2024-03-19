
<?php   // 先建一個 DB cs，　cs中建一table `course` (`id`, `name`, `must`, `year`) 

header("Content-Type:text/html; charset=utf-8");
// Open a Connection to MySQL

$servername = "localhost";
$username = "root";
$password = "123456";
$num = 0;
$re = 0;
// Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_set_charset($conn,"utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//echo "Connected successfully";

$sql=sprintf("
INSERT INTO `iot`.`num` (`num`,`re`) VALUES
('%s','%s');
",$num,$re);

echo $sql;
//mysql_query("SET NAMES utf8");

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>




