<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>LearniFY</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div id="top-nav" class="navbar navbar-inverse navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-toggle"></span>
</button>
<a class="navbar-brand" href="#">Learnify</a>
</div>
<ul class="nav navbar-nav">
<li><a href="#">Home</a></li>
<li><a href="#">Courses</a></li>
<li><a href="#">Tutorials</a></li>
<li><a href="#">Exams</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cheatsheet<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="#">Programming</a></li>
<li><a href="#">Networking</a></li>
<li><a href="#">Security</a></li>
</ul>
</li>
<li><a href="#">Contact Us</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
   <?php if(isset($_SESSION['dat_r']) and !empty($_SESSION['dat_r']))
			 {

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

echo "<li><a href='./?body=login.php'>Sign in</a></li>" ;
echo "<li><a href='./?body=register.php'>Signe Up </a></li>" ;

}


       ?>

      </li>

</ul>
</div>
</div>
