<!DOCTYPE html>

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home - Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="../style/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/evo-calendar.js"></script>
    <link rel="stylesheet" type="text/css" href="css/evo-calendar.css"/>
    </head>

<body>
    <div class="box-area">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img class="w-25" src="../img/logo-beacon.png" alt="beacon logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Students-info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Attendance</a>
                        </li>
                    </ul>

                </div>
            </nav>

        </header>
        <section class="banner-area">
            <div class="row">
                <div>
                    <h2>Welcome to eBeacon, Admin</h2>
                    <h3>Welcome to eBeacon, the Student Information Management System used at Beacon College. Visit the Student Support page to learn more.</h3>
                </div>
            </div>
        </section>
        <section class="content-area">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-capitalize">content area</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, esse est iste magni reprehenderit saepe sint! Assumenda consectetur fugit sit tempore. Architecto blanditiis deleniti, est fuga iusto perspiciatis suscipit voluptatibus!
                        Ad alias assumenda autem deleniti esse est excepturi hic itaque, magnam magni nam officia provident quae recusandae reiciendis rem sed. Adipisci animi aut autem deserunt dolore, ea eius error ex facilis inventore ipsum minus modi
                        nihil nostrum nulla, obcaecati porro reprehenderit repudiandae sed sint sunt tempore vero. At dolores doloribus, dolorum ea eaque hic ipsa iusto libero minus natus neque nisi nobis nostrum odio optio pariatur perspiciatis praesentium
                        rerum sapiente.
                    </p>

                </div>
            </div>
        </section>
        <div id="calendar"></div>

        // evo-calendar.js, right after jQuery (required)


        <script>
        // initialize your calendar, once the page's DOM is ready
        $(document).ready(function() {
            $('#calendar').evoCalendar({
                settingName: settingValue
            })
        })
        </script>
        
        <footer class="bg-light">

            <p class="text-center mb-0 py-3">Copyright © 2020</p>
        </footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>