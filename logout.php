<?php 
session_start(); 


session_regenerate_id(true); 
$null= NULL ;
$session=$_SESSION['dat_r'] ;
$con=mysqli_connect("mysql5.000webhost.com","a9035013_client","a9035013","a9035013_client");
$result = mysqli_query($con,"UPDATE clients SET session='$null' WHERE session='$session' "); 
session_unset();
session_destroy(); 
 mysqli_close($con);
header('Location: index.html');   
?>
