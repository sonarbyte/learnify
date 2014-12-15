<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>LearniFY</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-social.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
  <nav class="navbar navbar-top navbar-inverse navbar-fixed-top navbar-default" role="navigation">
   <div class="container">
    <a class="navbar-brand" href="/"><i><b style="color:#FFF">Learnify</b></i></a>
    <ul class="nav navbar-nav">
	<li><a style='color:#ddd' href="#">Home</a></li>
	<li><a style='color:#ddd' href="#">Courses</a></li>
	<li><a style='color:#ddd' href="#">Tutorials</a></li>
	<li><a style='color:#ddd' href="#">Exams</a></li>
	<li class="dropdown">
	<a style='color:#ddd' href="#" class="dropdown-toggle" data-toggle="dropdown">Cheatsheet<b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li><a href="#">Programming</a></li>
	<li><a href="#">Networking</a></li>
	<li><a href="#">Security</a></li>
	</ul>
	</li>
	<li><a style='color:#ddd' href="#">Contact Us</a></li>
	</ul>
    <ul class="nav navbar-nav navbar-right">
<?php
   if(isset($_SESSION['dat_r']) and !empty($_SESSION['dat_r'])) {
      echo "<li class='dropdown'>" ; 
      echo " <a href='/' >" ;
      echo " <span class='glyphicon glyphicon-'home' style='color: #FFF' aria-label='Home'></span>";
      echo " </a>" ;
      echo "</li> " ;
      echo "<li class='dropdown'>" ;
      echo " <a href='#' class='dropdown-toggle' data-toggle='dropdown'>";
      echo " <span class='glyphicon glyphicon-cog' style='color: #FFF' aria-label='Edit'></span>";
      echo "  </a>" ;
      echo "<ul class='dropdown-menu'>" ;
      echo "<li><a href='./profile.php'><span class='glyphicon glyphicon-user'></span>&nbsp;&nbsp;&nbsp;Profile</a></li>" ;
      echo "<li><a href='./logout.php'><span class='glyphicon glyphicon-log-out'></span>&nbsp;&nbsp;&nbsp;Log out</a></li>";
      echo "<li class='divider'></li> ";
      echo "<li><a href='./setting.php'><span class='glyphicon glyphicon-cog'></span>&nbsp;&nbsp;&nbsp;Settings</a></li>";
      echo " <li class='divider'></li>";
      echo " <li><a href='/restart.php'><span class='glyphicon glyphicon-refresh'></span>&nbsp;&nbsp;&nbsp;Restart</a></li>";
      echo " <li><a href='/shutdown.php'><span class='glyphicon glyphicon-off'></span>&nbsp;&nbsp;&nbsp;Shutdown</a></li>";
      echo " </ul> ";
    }
	else {
      echo "<li><a style='color:#ddd' href='./?body=login.php'>Sign in</a></li>" ;
      echo "<li><a style='color:#ddd' href='./?body=register.php'>Sign up</a></li>" ;
    }
?>
    </ul>
   </div>
  </nav> 
