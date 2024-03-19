
<?php
$a = "無";
if(isset($_POST['button1'])) {
   system('/var/www/html/water/bean.bat');
   
}
 
if(isset($_POST['button2'])) {
    system('/var/www/html/water/long.bat');
	
}
if(isset($_POST['button3'])) {
    system('/var/www/html/water/sensor.bat');
	
}
if(isset($_POST['button4'])) {
    system('/var/www/html/water/photo.bat');
	
}
if(isset($_POST['button5'])) {
    system('/var/www/html/water/kill.bat');
	
}
if(isset($_POST['button6'])) {
    system('/var/www/html/water/sensordb.bat');
	
}
if(isset($_POST['button7'])) {
    system('/var/www/html/water/show.bat');
	
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>室內灑水栽培箱</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>

<body background="bg2.jpg" style="background-repeat:repeat-x;background-attachment:fixed;background-position:left top">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">專題</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="nhome.php">首頁</a></li>
        <li><a href="produst.php">操作說明</a></li>
        <li><a href="main.php">選擇模式</a></li>
        <li><a href="planet.php">植物介紹</a></li>
        <li><a href="nvideo.php">影片</a></li>
      </ul>
    </div>
  </div>
</nav>

<form method="post"  action="<?php echo $_SERVER['PHP_SELF']?>" >
  <input type="submit" class="btn btn-warning btn-block" name="button1" value="模式一 定時澆水(短)">
  <input type="submit" class="btn btn-warning btn-block" name="button2" value="模式二 定時澆水(長)">
  <input type="submit" class="btn btn-warning btn-block" name="button3" value="模式三 土壤感測">
  <input type="submit" class="btn btn-warning btn-block" name="button6" value="模式四 溫溼度感測">
  <input type="submit" class="btn btn-success btn-block" name="button7" value="展示">
  <input type="submit" class="btn btn-success btn-block" name="button4" value="定時拍照啟動">
  <input type="submit" class="btn btn-dark btn-block" name="button5" value="關閉所有功能">
</form>



<br>
<h3><?echo "當前模式為：" $a?></h3>
<br>
<br>
<br>
<br>
<footer class="container-fluid text-center">
<p>組員:
廖宏哲 管維凱 黃懷逸 劉俊嘉 蔡宗珉
</p>  
 </footer>

</body>
</html>


