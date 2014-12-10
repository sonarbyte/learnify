
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
				 <?php session_start(); 
			 if(isset($_SESSION['dat_r']) and !empty($_SESSION['dat_r']))
			 {
                header('Location: index.html'); 
			 }
			 else
			 {
			echo '<li class=""><a href="./login.html">Sign In</a></li>' ;
            echo '<li class=""><a href="./register.html">Sign Up</a></li>			</ul>' ;
			}
			
			?>
			<li class=""><a href="./login.html">Sign In</a></li>
                <li class="active"><a href="./register.html">Sign Up</a></li>			</ul>

			
			
			
			
			
			
			
			
			
			
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
	<div class="form">
      <form accept-charset="UTF-8" action="" class="form-horizontal" method="post">
	 
<?php
error_reporting(0);



 include_once './securimage/securimage.php';
  $securimage = new Securimage();
  
  
if(!isset($_POST['pass']) or !isset($_POST['email']) or empty($_POST['pass']) or empty($_POST['email']))

{
 
 header('Location: index.html');  

}
else
{  
  
  if ($securimage->check($_POST['captcha_code']) == false)
   {
   
     echo "The Captcha code entered was incorrect.<br /><br />";
     echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
    }
  else
   {
  
  
    if ($_POST['pass'] == $_POST['pass2'] )
	{
  
      $wallet = $_POST['wallet'] ;
      $name = strtolower($_POST['name']);
      $pass=$_POST['pass'];
      $email=$_POST['email'];
  
       if (preg_match('/[\'^£\"$&()}{?><>,|=¬]/', $name) or preg_match('/[\'^£\"$&()}{?><>,;|=¬]/', $email) or preg_match('/[\'^£\"$;&()}{?><>,|=¬]/', $wallet) or preg_match('/[\'^£\"$&(;)}{?><>,|=¬]/', $pass))
          {

 
            echo "sorry you can't use any specialchars like : /\\[]\'^£;\"$&()}{?><>,|=¬ "."</br>" ;
            echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";


          }
          else
          {
  
  
           /////////////////////////////////////////////////////////////////////////////////////////////////////////
           $con=mysqli_connect("mysql5.000webhost.com","a9035013_client","a9035013","a9035013_client");
           // Check connection
           if (mysqli_connect_errno())
            {
           echo "ERROR please try again"."</br>"  ;
           echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
             }
  
  
 //** email exist .?
 
 


   
            $wallet= str_replace(array('\t','\n','\r','\f','\b','\a','\e','\\\\','\\','into','%00','select','union','from' ,'"',"'") ,'', $wallet ) ;
            $name =  str_replace(array('\t','\n','\r','\f','\b','\a','\e','\\\\','\\','into','%00','select' ,'union','from','"',"'") ,'', $name ) ;
            $pass =  str_replace(array('\t','\n','\r','\f','\b','\a','\e','\\\\','\\','into','%00','select','union','from' ,'"',"'") ,'', $pass) ;
            $email= str_replace(array('\t','\n','\r','\f','\b','\a','\e','\\\\','\\','into','%00','select' ,'union','from','"',"'") ,'', $email) ;
   
             
             $pass= htmlentities ( trim ( $pass ) , ENT_NOQUOTES );
             $email= htmlentities ( trim ( $email ) , ENT_NOQUOTES );
			 $wallet= htmlentities ( trim ( $wallet ) , ENT_NOQUOTES );
			 
			 $pass=htmlspecialchars($pass, ENT_QUOTES);
			 $email=htmlspecialchars($email, ENT_QUOTES);
			 $wallet=htmlspecialchars($wallet, ENT_QUOTES);
	
            
 
             $result = mysqli_query($con,"SELECT email FROM clients where email='$email' ;");
             $i = 0 ;
			
             while($row = mysqli_fetch_array($result))
            {

             $i = $i +1 ;
            }
            if($i != 0 )
             {
             echo "Email already exists ! . "."</br>"  ;
             echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
             }
             else
             {
  
            if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
               { 
                echo "Invalid email !.";
				echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
               }
        else
      {

         mysqli_query($con,"INSERT INTO `a9035013_client`.`clients` (`Name`, `email`, `pass`, `hrs`, `ltc`, `wallet`) VALUES ( '$name','$email','$pass','0', '0', '$wallet');");
         // redirection regval
         echo "Thank you for registering. Your registration process is complete. You should be receiving a confirmation email shortly " ;
          $to = $email ;
          $subject = "Hi!";
          $body = "Hi,\n\nHow are you?";
          mail($to, $subject, $body);
		  mysqli_close($con);
    
	
   }
  }
  

  
  mysqli_close($con);
}
  ////////////////////////////////////////////////////////////////////////////////////////////////////////
  
  }
    

else{

echo "You have entered two different passwords. "."</br>"  ;
echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
}
}
 
}


?>
        
       </form>
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
	  	  <!-- ///////////////////////////////////////-->

  <div class='share-button share-button-top'></div>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js'></script>
	  <script src='./jquery/share.js'></script>
       <script>
    $(function(){
      $('.share-button').share({
        title: 'Share Button Test',
        image: 'http://carrot.is/img/fb-share.jpg',
        app_id: '602752456409826',
        background: 'rgba(255,255,255,.5)',
        color: '#3B2B45',
        flyout: 'top center',
        text_font: true
      });
    });     
	  </script>
   <h2>Keep supporting us</h2><br>
  <!-- ///////////////////////////////////////-->
	 
      </footer>
    </div>



</body>
</html>

