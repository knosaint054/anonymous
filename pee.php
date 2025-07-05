 
<?php
require_once 'userconnect.php';
if($conn->connect_error) die("Fatal Error");
if( 
    isset($_POST['submit'])) 
 
    {   
        $email = get_post($conn, 'email');
        $username = get_post($conn, 'username');
        $password1 = get_post($conn, 'password1');
        $password2 = get_post($conn, 'password2');
        
        $check= mysqli_query($conn, "SELECT * FROM users WHERE UserName = '$username' OR Email='$email'");
        if(mysqli_num_rows($check)>0){
       
        echo "<script> alert('Username or email already');</script>";
        }else{
            if($password1 == $password2){
                $query = "INSERT INTO users VALUES('','$email','$username','$password1',NOW(),'','','')";
                
        $result = $conn->query($query);
        if($result){
            header('location: login.php');
        }
            else{
                echo "<script> alert('The passwords don't match');</script>";
            }
        }
         
            }
        }
        function get_post($conn, $var){
            return $conn->real_escape_string($_POST[$var]);
        } 
        ?>	 
 
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from drklt3.es/signup by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Feb 2023 23:31:49 GMT -->
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
    <script src="./asset/js/main.js"></script>-->
    <link rel="stylesheet" href="../cdn.jsdelivr.net/jquery.amaran/0.5.4/amaran.min.css">
    <script src="../cdn.jsdelivr.net/jquery.amaran/0.5.4/jquery.amaran.min.js"></script>
    <script>
        // EasyLogin.options = {
        //     ajaxUrl: './auth/server',
        //     lang: {
        //         "error": "Oops! Something went wrong.",
        //         "connecting": "Connecting to ",
        //         "changes_saved": "Your settings have been saved.",
        //         "pass_changed": "Your password has been changed!",
        //         "no_messages": "You don't have any messages yet.",
        //         "loading": "<div class=\"loadersmall\"><\/div>",
        //         "loadding": "<div class=\"spinner-border\" role=\"status\">\r\n  <span class=\"sr-only\">Loading...<\/span>\r\n<\/div>",
        //         "message_sent": "Your message has been sent to the Webmaster.",
        //         "comment": " Comment",
        //         "comments": " Comments"
        //     },
        //     debug: 1,
        // };
    </script>

</head>

<body class="authentication-bg">

    <div class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-md-4 login-background">
                <div style="background-color: rgb(210, 50, 45);margin-bottom: 20px;">
                    <center><img src="asset/images/user-icon.png" style="margin-bottom: -70px;" alt=""></center>

                </div>
                <div class="padder">
                    <h3 class="page-header" style=" margin-top: 50px; color: #000; ">Sign up</h3>
                                        <form action="" name="addedituser" method="post" class="ajax-form clearfix">
										
										<input type="hidden" name="user_id" value="" />
						<input type="hidden" name="user_type" id="input" value="1">
						
                        <div class="form-group">
                            <label for="signup-username">Username</label>
                            <input type="text" name="username" id="signup-username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="signup-email">E-mail</label>
                            <input type="text" name="email" id="signup-email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="signup-password">Password</label>
                            <input type="password" name="password1" id="signup-password" class="form-control" autocomplete="off" value="">
 
                        </div>
                        <div class="form-group">
                            <label for="signup-password-confirm">Verify password</label>
                            <input type="password" name="password2" id="signup-password-confirm" class="form-control" autocomplete="off">
                            <input type="checkbox" id="showPassword"> Show Password
                        </div>
                        <!-- <div id="actionButton">
                            <div class="form-group recaptcha">
                                <img src="session.php">
                                <input type="text" name="phrase" autocomplete="off">
                            </div>

                            <script>
                                function ReloadCaptcha() {
                                    $("#actionButton").load('captcha.php');
                                }
                            </script>
                        </div> -->

                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-danger btn-lg">Sign up</button>
                        </div>
                        <hr>
                        <div class="form-group">
                            <a href="login.php" class="btn btn-block btn-danger">Sign in</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <script>
            // $(document).ready(function() {
            //     $("#actionButton").load("captcha.php");
            //     $.ajaxSetup({
            //         cache: false
            //     });
            // });
        </script>

    </div>
    <div class="footer">
        <div class="container">
			<p>© 2019 ANONYMOUS SPAMMING | Build:61DE141D6C84B </p>
        </div>
    </div>
    <!-- Add this script at the end of your HTML, before the </body> tag -->
<script>
    $(document).ready(function() {
        $('#showPassword').change(function() {
            var passwordField = $('#signup-password, #signup-password-confirm');
            var fieldType = $(this).is(':checked') ? 'text' : 'password';
            passwordField.attr('type', fieldType);
        });
    });
</script>

</body>
<!-- Mirrored from drklt3.es/signup by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Feb 2023 23:31:50 GMT -->
</html>