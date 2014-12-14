<div align="center" >
<form accept-charset="UTF-8" action="./register_action.php" class="form-horizontal" method="post">
	 
	  
        <div class="controls">
          <h1>Sign Up </h1><br>
        </div>

		<div class="error">
		
					</div>
		
        <div class="control-group">
          <label class="control-label" for="email">Email</label>
          <div class="controls">
            <input class="focus" id="email" name="email" placeholder="Email" type="text" value="">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="password">Password</label>
          <div class="controls">
            <input autocomplete="off" id="password" name="pass" placeholder="Password" type="password">
          </div>
        </div>
		
		<div class="control-group">
          <label class="control-label" for="password">Password</label>
          <div class="controls">
            <input autocomplete="off" id="password" name="pass2" placeholder="Password" type="password">
          </div>
        </div>
		
        <div class="control-group">
          <label class="control-label" for="wallet">Wallet Addr</label>
          <div class="controls">
          <input class="focus" id="Wallet" name="wallet" placeholder="Wallet" type="text" value="">
          <br><br>I don't have wallet yet? </br><a target="_blank" ; href="https://instant-e.com/index.php?r=site/register">Get free online wallet (not trusted)</a></br>Or </br><a target="_blank" ; href="https://download.litecoin.org/litecoin-0.8.6.2/win32/litecoin-0.8.6.2-win32-setup.exe">Donload the local wallet software (trusted but not fast )</a>
          </div>
		</div>
		
		
		<div class="control-group">
         <label class="control-label" for="captcha">Captcha</label>
		 <div class="controls">
         <input type="text" autocomplete="off"  name="captcha_code" size="10" maxlength="8" />
         <img id="captcha" src="./securimage/securimage_show.php" alt="CAPTCHA Image" />
         <a href="#" onclick="document.getElementById('captcha').src = './securimage/securimage_show.php?' + Math.random(); return false">Different Image</a>
		 </div> 
		</div>
		
		 <div class="controls">
          <input class="btn btn-primary" data-disable-with="Signing in..." id="signin_button" name="commit" type="submit" value="Register">
        </div>
		
		
        </div>

        

       
        
</form>  
</div>	 
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
   

