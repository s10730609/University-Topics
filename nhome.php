<?php include("homeseror.php"); ?>
<?php include("homesea.php"); ?>
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

<div class="jumbotron">
  <div class="container text-center">
    <h1>
	<?php echo $m;?>
	<?php echo $o;?>
	</h1>      
    <p></p>
  </div>
</div>

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
        <li><a href="nvideo">影片</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">最新照片</div>
        <div class="panel-body"><img src="picture/<?php echo $one;?>.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">參考日期：<?php echo $one;?></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">NO.2</div>
        <div class="panel-body"><img src="picture/<?php echo $two;?>.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">參考日期：<?php echo $two;?></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">NO.3</div>
        <div class="panel-body"><img src="picture/<?php echo $three;?>.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">參考日期：<?php echo $three;?></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">NO.4</div>
        <div class="panel-body"><img src="picture/<?php echo $four;?>.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">參考日期：11月3日</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">NO.5</div>
        <div class="panel-body"><img src="picture/<?php echo $five;?>.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">參考日期：11月3日</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">NO.6</div>
        <div class="panel-body"><img src="picture/<?php echo $six;?>.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">參考日期：11月3日</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>組員:
  
  </p>  
  
</footer>

</body>
</html>
