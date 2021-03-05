<?php
if ($_SERVER['REQUEST_METHOD']== 'POST' ) {  
    require('mysqli_connect.php');
     $username = mysqli_real_escape_string($dbc, trim($_POST['uname']));
     $password = mysqli_real_escape_string($dbc, trim($_POST['upassword']));
    
    $q = "select * from logininfo where username = '$username' and password = '$password'";
    
    $r = mysqli_query($dbc,$q); 
    
    if (mysqli_affected_rows($dbc) == 1) {
    $r1 = mysqli_fetch_array($r);
        session_start();
        $_SESSION['adminlogin'] ='true';
        header('Location:adminaccount.php');
        exit;
     }
else{
    echo "invalid creds please go back to login";
 }
}
?>