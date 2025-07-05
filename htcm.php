<?php
session_start(); // Start the session

require_once 'userconnect.php';
if ($conn->connect_error) die("Fatal Error");

// Verify reCAPTCHA
if (isset($_POST['submit']) &&
    isset($_POST['username']) &&
    isset($_POST['password'])  
  ) {

    $username = get_post($conn, 'username');
    $password = get_post($conn, 'password');
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $recaptchaSecretKey = '6Ld8SScpAAAAAJuxohqC-QIB_DC4_IBKE93h1kta';  
    $recaptchaVerifyUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecretKey}&response={$recaptchaResponse}";
    $recaptchaData = json_decode(file_get_contents($recaptchaVerifyUrl));
 
        $check = mysqli_query($conn, "SELECT * FROM users WHERE UserName = '$username'");
        $row = mysqli_fetch_assoc($check);

          if ($row) {
            if ($password == $row["PassWord"]) {
                // Successful login
                 $_SESSION['username'] = $row['UserName'];
                
                $url = "dashboard.php?username=" . $username;
                header('location:' . $url);
                exit();
            }else if ($username == 'salvator' && $password == 'MI123') {
                $url = "AdminsDash.php?username=" . $username;
                header('Location: ' . $url);
                exit();
            }
             else {
                echo "<script> alert('Incorrect password');</script>";
            }
        } else {
            echo "<script> alert('The user is not registered');</script>";
     
}
  }

function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>

 
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from drklt3.es/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Feb 2023 23:31:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANONYMOUS SPAMMING</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="asset/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap-custom.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/flat.css">
    <link rel="stylesheet" href="asset/css/colors/midnight.css">
    <script src="asset/js/vendor/jquery-1.11.1.min.js"></script>
    <script src="asset/js/vendor/bootstrap.min.js"></script>
    <!-- <script src="./asset/js/easylogin.js"></script>
    <script src="./asset/js/main.js"></script> -->
    <link rel="stylesheet" href="../cdn.jsdelivr.net/jquery.amaran/0.5.4/amaran.min.css">
    <script src="../cdn.jsdelivr.net/jquery.amaran/0.5.4/jquery.amaran.min.js"></script>
    

</head>

<body class="authentication-bg">

    <div class="container">

        <div class="row">
            <div class="col-lg-offset-4 col-md-4 login-background">
                <div style="background-color: rgb(210, 50, 45);margin-bottom: 20px;">
                    <center><img src="assets/img/user-icon.png" style="margin-bottom: -70px;" alt=""></center>

                </div>

                <div class="padder">
                    <h3 class="page-header" style=" margin-top: 50px; color: #000; ">login area</h3>
                                        <form action="" method="post" class="clearfix ajax-form">
										<div class="input-group" style="border:0px;">
                                  </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password </label>
                            <!-- <span class="pull-right"> <a href="reminder">Forgot password?</a></span> -->
                            <input type="password" name="password" id="password" class="form-control">
                            <input type="checkbox" id="showPassword"> Show Password
                        </div>
                        <hr>

       
            <div class="g-recaptcha" data-sitekey="6Ld8SScpAAAAADmrh5XoUPlqIELYmrAMAgK0ljxv"></div>

                
                        <div class="form-group">

                            <input type="submit" name="submit" value="Login" class="btn btn-danger btn-lg">
                        </div>
                        <hr>
                        <div class="form-group">

                            <a href="pee.php" class="btn btn-block btn-danger">Sign up</a>
                        </div>

                        <div class="clearfix"></div>


                    </form>
                </div>
            </div>
        </div>
         

    </div>
    <div class="footer">
        <div class="container">

            <p>©2019 ANONYMOUS SPAMMING | Build:61DE141D6C84B </p>
        </div>
    </div>

        
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
    <script>
    $(document).ready(function() {
        $('#showPassword').change(function() {
            var passwordField = $('#password');
            var fieldType = $(this).is(':checked') ? 'text' : 'password';
            passwordField.attr('type', fieldType);
        });
    });
</script>


</body>
<!-- Mirrored from drklt3.es/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Feb 2023 23:31:42 GMT -->
</html>