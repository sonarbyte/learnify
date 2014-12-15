<?php
error_reporting(0);

if (!isset($_SESSION['dat_r']) and isset($_POST['pass']) and !empty($_POST['pass']) and isset($_POST['login']) and !empty($_POST['login'])) {
    
    
    session_regenerate_id(true);
    $pass  = htmlentities(trim($_POST['pass']), ENT_NOQUOTES);
    $login = htmlentities(trim($_POST['login']), ENT_NOQUOTES);    
    $pass  = htmlspecialchars($pass, ENT_QUOTES);
    $login = htmlspecialchars($email, ENT_QUOTES);
    
    $pass  = str_replace(array(
        '\t',
        '\n',
        '\r',
        '\f',
        '\b',
        '\a',
        '\e',
        '\\\\',
        '\\',
        'into',
        '%00',
        'select',
        'union',
        'from',
        '"',
        "'"
    ), '', $pass);
    $login = str_replace(array(
        '\t',
        '\n',
        '\r',
        '\f',
        '\b',
        '\a',
        '\e',
        '\\\\',
        '\\',
        'into',
        '%00',
        'select',
        'union',
        'from',
        '"',
        "'"
    ), '', $login);
    
    
    
    $con    = mysqli_connect("mysql5.000webhost.com", "a9035013_client", "a9035013", "a9035013_client");
    $result = mysqli_query($con, "SELECT * FROM clients where email='$login' and pass='$pass' ;");
    $i      = 0;
    while ($row = mysqli_fetch_array($result)) {
        $i = $i + 1;
        $s = $row['id'];
    }
    if ($i == 1) {
        
        $session           = md5(uniqid(rand(), true));
        $result            = mysqli_query($con, "UPDATE clients SET session='$session' WHERE id='$s' ");
        $_SESSION['dat_r'] = $session;
        header('Location: index.php');
        
        
        
    } else {
        echo "wrong password or email !. " . "</br>";
        echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
    }
    
    mysqli_close($con);
} else {
    header('Location: index.php');
}




?>

