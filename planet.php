<?php include("planetpro.php"); ?>
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
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<BODY background="bg2.jpg" style="background-repeat:repeat-x;background-attachment:fixed;background-position:left top">

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


<div class="container text-center">    
  <div> 
  <h2></h2>
         
  <table class="table">
    <thead>
      <tr>
        <th><h3><span style="color:white;">模式</span></h3></th>
		<th><h3><span style="color:white;">圖片</span></h3></th>
        <th><h3><span style="color:white;">名稱</span></h3></th>
        <th><h3><span style="color:white;">菜類介紹</span></h3></th>
      </tr>
    </thead>
    <tbody>
	  <?php echo $tr;?>

    </tbody>
  </table>
  </div>
</div>
<br>
<br>
<br>
<br>
<footer class="container-fluid text-center">
  <p>組員
  廖宏哲 管維凱 黃懷逸 劉俊嘉 蔡宗珉
  </p>
</footer>

</body>
</html>
