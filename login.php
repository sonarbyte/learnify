
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></script>
  <title>Tunisiacoin</title>
  <link rel="shortcut icon" href="favicon.html">   
  


  
  <link href="public/css/main.css" media="all" rel="stylesheet" type="text/css">
  <link href="public/css/form.css" media="all" rel="stylesheet" type="text/css">
  
</head>
<body class="static merchants ">
  <div class="page-container">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
	  
	  <!-- Container-->
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>          </a>
          <a href="index.html" class="brand">Tunisia-Coin</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class=""><a href="index.html">Home</a></li>
              <li class=""><a href="./about.html">About</a></li>
              <li class=""><a href="./contact.html">Contact Us</a></li>
			  <li class=""><a href="./software.html">Downloads</a></li>
            </ul>
            
			<ul class="nav pull-right">
			 <?php 
			 
			
			
			 
			 session_start();  ?>
			<li class="active"><a href="./login.html">Sign In</a></li>
                <li class=""><a href="./register.html">Sign Up</a></li>			</ul>

			
			
			
			
			
			
			
			
			
			
          </div>
        </div>
      </div>
    </div>
	<!-- Header End-->
    <div class="container">
      <div class="flash">
	  
	  
	  
	  
	  
		</div>
	
	
	<!-- Content Begin-->
	<div id="content">
	




<div class="row">
  <div class="span6 offset3 thumbnail">
    <div class="caption">
	
	<?php
	error_reporting(0);
	
	if(!isset($_SESSION['dat_r']) and isset($_POST['pass']) and !empty($_POST['pass']) and isset($_POST['email']) and !empty($_POST['email'])  )
	{
	
	      
	         session_regenerate_id(true);
   		     $pass= htmlentities ( trim ( $_POST[ 'pass' ] ) , ENT_NOQUOTES );
             $email= htmlentities ( trim ( $_POST[ 'email' ] ) , ENT_NOQUOTES );
			 
			 
		     
			 $pass=htmlspecialchars($pass, ENT_QUOTES);
			 $email=htmlspecialchars($email, ENT_QUOTES);
			
			 $pass =  str_replace(array('\t','\n','\r','\f','\b','\a','\e','\\\\','\\','into','%00','select','union','from' ,'"',"'") ,'', $pass) ;
             $email= str_replace(array('\t','\n','\r','\f','\b','\a','\e','\\\\','\\','into','%00','select' ,'union','from','"',"'") ,'', $email) ;
             
			 
			
	$con=mysqli_connect("mysql5.000webhost.com","a9035013_client","a9035013","a9035013_client");
	$result = mysqli_query($con,"SELECT * FROM clients where email='$email' and pass='$pass' ;");
	 $i= 0 ;
	 while($row = mysqli_fetch_array($result))
           {
             $i = $i +1 ;
			 $s=$row['id'] ;
            }
	if($i == 1 )
	{
	
	$session= md5(uniqid(rand(), true));
	$result = mysqli_query($con,"UPDATE clients SET session='$session' WHERE id='$s' ");
	$_SESSION['dat_r']= $session ;
    header('Location: index.html'); 
	
	
	
	}
	else
	{
	         echo "wrong password or email !. "."</br>"  ;
             echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
	}
	
	 mysqli_close($con);
	}
	else
	{
	 header('Location: index.html');   
	}
	
	
	
	
	?>
	
	
	</div>
  </div>
</div>
<br>
    </div>

</div><!-- content -->
	<!-- Content End-->

	<!-- Container-->
    <div class="container">
      <div class="flash">
	  	  
	 </div>
 
 	<!-- Container-->
    <div class="container">
      <footer>
	  
	 
      </footer>
    </div>



</body>
</html>