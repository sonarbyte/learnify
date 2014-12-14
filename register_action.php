<?php
error_reporting(0);



 include_once './securimage/securimage.php';
  $securimage = new Securimage();
  
  
if(!isset($_POST['pass']) or !isset($_POST['email']) or empty($_POST['pass']) or empty($_POST['email']))

{
 
 header('Location: ./body=');  

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
