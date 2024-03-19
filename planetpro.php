<?php
    header("Content-Type:text/html; charset=utf-8");
    //建立資料庫的連結
    $servername = "localhost";
	$username = "root";
	$password ="123456"; 
	$dbname="planet";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);
	mysqli_set_charset($conn,"utf8");

	// Check connection
	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}
	//----------------------------------------------------------------
	//(1) 查詢
	//$sql = sprintf("SELECT * FROM `place` ORDER by `likes` DESC LIMIT 0,30;");
	$sql = sprintf("SELECT * 
					FROM  `planet`  
					ORDER by `model` ASC");
	$S = $conn->query($sql);  //$S:查詢到的結果 
	
	// (2) 將查詢到的結果置於 $R, $R[$i]: 第$i筆資料 \" \"
	
	$count=0;  $R="";
	if ($S->num_rows > 0){   //$S->num_rows: 查詢到幾筆資料
		while($row = $S->fetch_assoc()){ // $S->fetch_assoc() 
			$R[$count]= $row; $count++;
			//print_r($row); echo "<br>";  //
		}
	}
	
	$tr="";  
	for($r=0;$r<count($R);$r++)  //$R.length
	{
	   $tr= $tr.sprintf("
	   <tr>
        <td><h3><span style='color: white;'>%s</span></h3></td>
		<td><img src= '%s' class='img-rounded' alt='Cinque Terre' width='304' height='236'> </td>
         <td><h3><span style='color: white;'>%s</span></h3></td>
         <td><h3><span style='color: white;'>%s</span></h3></td>
      </tr>
	   ", $R[$r]['model'],$R[$r]['photo'],$R[$r]['name'],$R[$r]['text']);	
	}
	
?>	