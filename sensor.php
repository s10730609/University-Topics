
<?php
$sql="SELECT * FROM `sensor` where `pin`=1 ORDER BY `sensor`.`time` DESC limit 0,1";
$print=0;
$R=SQL_SEARCH($sql,$print);
$time1 = date("Y-m-d H:i:s",time()-1000);
 





// 控制訊號 int 是只取整數的部分

?>
<?php
	
	function SQL_SEARCH($sql,$print){ 
	$servername = "localhost";
	$username = "root";
	$password ="123456"; 
	$dbname="iot";
    

	if($print==1) echo $sql;
	
	$conn = new mysqli($servername, $username, $password,$dbname);
	//$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
	mysqli_set_charset($conn,"utf8");
	
	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}
	//----------------------------------------------------------------
	//(1) ?亥岷
	//$sql = sprintf("SELECT * FROM  `place` ORDER BY  `place`.`cover#source` ASC LIMIT 0, 20;");
	$S = $conn->query($sql);  //$S:?亥岷?啁?蝯? 
	
	// (2) 撠閰Ｗ???蔭??$R, $R[$i]: 蝚?i蝑???
	
	$count=0;  $R="";
	if ($S->num_rows > 0){   //$S->num_rows: ?亥岷?啣嗾蝑???
		while($row = $S->fetch_assoc()){ // $S->fetch_assoc() 
			$R[$count]= $row; $count++;
			
		}
	}
	unset($S); $conn->close();
	if($R !="")
	for($i=0;$i<count($R);$i++)
		foreach ($R[$i] as $k => $v)  {
		$v=html_entity_decode($v); 
		$R[$i][$k]=html_entity_decode($v); 
	} 	
	return($R);
}

 function SQL_NoResult($sql,$print){ 
	 $servername = "localhost";
	$username = "root";
	$password ="123456"; 
	$dbname="iot";
    
	if($print==1) echo $sql;
	
	$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
	mysqli_set_charset($conn,"utf8");
	
	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}
	
	$S = $conn->query($sql);  //$S:?亥岷?啁?蝯? 
		
}

	
?>
<?php
	if((int)$R[0]["value"] <=20 ) {
		system('/var/www/html/water/h.bat');
		
	}
		
?>

