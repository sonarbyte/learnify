<h2>This is home.<h2>

 
<?php 
if(isset($_SESSION['dat_r']) and !empty($_SESSION['dat_r']))
{
$ses = $_SESSION['dat_r'] ;
$con    = mysqli_connect("127.0.0.1", "root", "toor", "client_db");
    $result = mysqli_query($con, "SELECT * FROM clients where session='$ses' ;");
    $row = mysqli_fetch_array($result) ;
    echo 'Welcome'.$row['login'] ;
  mysqli_close($con);

}
else { echo "Please login " ;
}
?>
