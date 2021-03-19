<?php
if ($_SERVER['REQUEST_METHOD']== 'POST' ) {  
    require('mysqli_connect.php');
     $username = mysqli_real_escape_string($dbc, trim($_POST['uname']));
     $password = mysqli_real_escape_string($dbc, trim($_POST['upassword']));
    
    $q = "select * from login where username = '$username' and password = '$password'";
    
    $r = mysqli_query($dbc,$q); 
    
    if (mysqli_affected_rows($dbc) == 1) {
    $r1 = mysqli_fetch_array($r);
        session_start();
        $_SESSION['adminlogin'] ='true';
        header('Location:adminaccount.php');
        exit;
     }
else{
    echo '<script>alert("Invalid credentials")</script>'; 
}
    
 }
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Beacon Institue - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="login_page">
    <div class="divpage row ">
        <div class="col-12 col-md-5 col-lg-5 loginbox">
            <img src="avatar.jpg" class="profile">
            <h1>Login </h1>

            <form action="login.php" method="post">
                <p>Username</p>
                <input type="text" name="uname" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="upassword" placeholder="Enter Password">
                <input type="submit" name="login" value="Login">
                <input type="submit" name="signup" value="SignUp">
            </form>
        </div>
    </div>
</body>


</html>