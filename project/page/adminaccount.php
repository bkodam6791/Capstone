<?php
session_start();
if($_SESSION['adminlogin']){
    echo "welcome to your account";
    
}
else{
    echo "not your account"
    header("test.html");
}
exit;
?>