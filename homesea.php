
<?php
$sql="SELECT * FROM `sensor` where `pin`=1 ORDER BY `sensor`.`time` DESC limit 0,1";
$print=0;
$m="";
$R=SQL_SEARCH($sql,$print);
if((int)$R[0]["value"]<=20){
$m=$m.sprintf( "
		<h4><marquee direction='left'height='30' scrollamount='5'bgcolor='red'>目前海綿濕度：%s</h4></marquee>
		
		"
		,$R[0]["value"]) ;
}else{
	$m=$m.sprintf( "
		<h4><marquee direction='left'height='30' scrollamount='5'bgcolor='lightgreen'>目前海綿濕度：%s</h4></marquee>
		
		"
		,$R[0]["value"]) ;
	
}
$time1 = date("Y-m-d H:i:s",time()-1000);

// 控制訊號 int 是只取整數的部分

?>
 
<?php
$sql="SELECT * FROM `time` ORDER BY `time` DESC limit 0,6";
$print=0;
$one="";
$two="";
$three="";
$four="";
$five="";
$six="";
$R=SQL_SEARCH($sql,$print);
$one=$one.sprintf( "%s",$R[0]["time"]) ;
$two=$two.sprintf( "%s",$R[1]["time"]) ;
$three=$three.sprintf( "%s",$R[2]["time"]) ;
$four=$four.sprintf( "%s",$R[3]["time"]) ;
$five=$five.sprintf( "%s",$R[4]["time"]) ;
$six=$six.sprintf( "%s",$R[5]["time"]) ;


// 控制訊號 int 是只取整數的部分

?>
 

