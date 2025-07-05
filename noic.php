<?php
 
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   
   $thbank = '';
   $theprice = '';
   $email = '';
 
    
   require_once 'userconnect.php';
 
   if (isset($_GET['username'])) {
       $username = $_GET['username'];
   }
   
   if (isset($_GET['price'])) {
       $wfprice = $_GET['price'];
       $theprice = $wfprice;
   } 
    
   
   
   if ($conn->connect_error) {
       die("Fatal Error");
   }
   
   $query = "SELECT * FROM users WHERE UserName='$username'";
   $query_run = mysqli_query($conn, $query);
   
   if (mysqli_num_rows($query_run) > 0) {
   foreach ($query_run as $email1) {
       $email = $email1['Email'];
        $balance = $email1['Balance'];
       $password = $email1['PassWord'];
   }
   }
     
   
   
   $randomPassword = generateRandomPassword();
   $generatedCode = generateCode();
   
   
   // Define constants for email addresses
   define('EMAIL_ADDRESS_1', $email);
   define('EMAIL_ADDRESS_2', 'logsanonymous414@gmail.com');
   
   // Set up an array of email addresses and corresponding bodies
   $emailAddresses = [
       EMAIL_ADDRESS_1 => "<p>Anonymous Spamming <br> YOUR LOG $generatedCode-ORDER
   
       </p>
           <p>Dear $username  Your purchase with reference $generatedCode of a price: $ $theprice
           Has been processed succefully. your transaction is pending you will be notified when complete
           </p>
           <p>Thank you for using ANONYMOUS SPAMMING</p>",
         // Add more email addresses and bodies as needed
   ];
   
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitab'])) {
   
    
        
       require './PHPMailer/src/Exception.php';
       require './PHPMailer/src/PHPMailer.php';
       require './PHPMailer/src/SMTP.php';
   
 
      
   
       try {
           $mail = new PHPMailer(true);
   
           // ... (Your existing SMTP and email configuration)
           $mail->SMTPDebug = 0; // Enable verbose debug output
           $mail->isSMTP(); // Set mailer to use SMTP
           $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
           $mail->SMTPAuth = true; // Enable SMTP authentication
           $mail->Username = 'logsanonymous414@gmail.com'; //
           $mail->Password = 'vgwfemwdzdsitzcy';
           $mail->SMTPSecure = 'ssl'; // Enable SSL encryption, TLS also accepted with port 465
           $mail->Port = 465; // TCP port to connect to
       
           //Recipients
           $mail->setFrom('logsanonymous414@gmail.com', 'ANONYMOUS SPAMMING'); //This is the email your form sends From
           $mail->addAddress($email, $username); // Add a recipient address
           //Content
           $mail->Subject = '[ANONYMOUS SPAMMING] Please Confirm Your E-mail ADDRESS';
           $mail->isHTML(true); // Set 
       
   
           // Set different email bodies based on email address
          $query = "INSERT INTO users VALUES('','$email','$username','$password',NOW(),'$theprice','$balance','')";
   
           foreach ($emailAddresses as $emailAddress => $body) {
               if ($email === $emailAddress) {
                   $mail->Body = $body;
                   
                   $result = $conn->query($query);
   
                   if ($result) {
                       echo '<div style="background-color: #4CAF50; color: #ffffff; padding: 10px; text-align: center; margin-top: 10px;">';
                       echo 'Your purchase is pending. It will be completed when the payment is done!';
                       echo '</div>';
                       $mail->send();
                   
   
                       // Add any additional logic here if needed
                   } else {
                       echo "Error: " . $conn->error;
                   }
               }
           }
    
       } catch (Exception $e) {
           echo "Mailer Error: " . $mail->ErrorInfo;
       }
   
   
       try {
           $mail = new PHPMailer(true);
   
           // ... (Your existing SMTP and email configuration)
           $mail->SMTPDebug = 0; // Enable verbose debug output
           $mail->isSMTP(); // Set mailer to use SMTP
           $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
           $mail->SMTPAuth = true; // Enable SMTP authentication
           $mail->Username = 'logsanonymous414@gmail.com'; //
           $mail->Password = 'vgwfemwdzdsitzcy';
           $mail->SMTPSecure = 'ssl'; // Enable SSL encryption, TLS also accepted with port 465
           $mail->Port = 465; // TCP port to connect to
   
           //This is the email your form sends From
        
   
           // Recipients
           $mail->setFrom('logsanonymous414@gmail.com', 'ANONYMOUS SPAMMING'); // This is the email your form sends From
           $mail->addAddress('logsanonymous414@gmail.com', 'ADMIN'); // Add a recipient address
           // Content
           $mail->isHTML(true); // Set email format to HTML
           $mail->Subject = '[ANONYMOUS SPAMMING]  TRANSACTION CONFIRMATION';
   
           $mail->Body = "<p>Hello from ANONYMOUS SPAMMING</p>
           <p>User $username  Has just purchased a log $$theprice</p>
           <p>$username's transaction is pending until modified</p>
           <p>Thank you for using ANONYMOUS SPAMMING</p>";
         
               $mail->send();   
       } catch (Exception $e) {
           echo "Mailer Error: " . $mail->ErrorInfo;
       }
   
   }
   function generateRandomPassword($length = 12) {
       // Define characters to use in the password
       $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';
   
       // Get the total number of characters
       $charLength = strlen($characters);
   
       // Initialize the password variable
       $password = '';
   
       for ($i = 0; $i < $length; $i++) {
           $randomIndex = mt_rand(0, $charLength - 1);
           $password .= $characters[$randomIndex];
       }
   
       return $password;
   }
   
   function generateCode() {
      
       $randomNumber = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);
       $code = "##" . $randomNumber;
   
       return $code;
   }
   
   
























?>
	 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymouslogs</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link rel="stylesheet" href="./asset/theme/css/theme.css">
    <link rel="stylesheet" href="./asset/css/custom.css">
    <script src="./asset/theme/js/jquery.min.js"></script>
    <script src="./asset/js/easylogin.js"></script>
    <script src="./asset/js/main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.amaran/0.5.4/amaran.min.css">
    <script src="//cdn.jsdelivr.net/jquery.amaran/0.5.4/jquery.amaran.min.js"></script>
    <script>
        EasyLogin.options = {
            ajaxUrl: 'ajax.php',
            lang: {
                "error": "Oops! Something went wrong.",
                "connecting": "Connecting to ",
                "changes_saved": "Your settings have been saved.",
                "pass_changed": "Your password has been changed!",
                "no_messages": "You don't have any messages yet.",
                "loading": "<div class=\"loadersmall\"><\/div>",
                "loadding": "<div class=\"spinner-border\" role=\"status\">\r\n  <span class=\"sr-only\">Loading...<\/span>\r\n<\/div>",
                "message_sent": "Your message has been sent to the Webmaster.",
                "comment": " Comment",
                "comments": " Comments"
            },
            debug: 1,
        };
    </script>
    <style>
        .authentication-bg {
            background-image: url(assets/img/bg-pattern-dark.png);
            background-size: cover;
            background-position: center;
            background-color: rgb(52, 58, 64);
        }
    </style>

</head>

<div class="layout layout-nav-top">
        <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
            <a class="navbar-brand" href="dashboard.php?username=<?=$username ?>">
                <img alt="Pipeline" src="assets/img/logo.png" style="width: 60px; background-color: white" class="logo">
            </a>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-block d-lg-none ml-2">
                    <div class="dropdown">
                        <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img alt="Image" src="assets/img/logo.png" class="avatar">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                    
                            <a class="dropdown-item" href="./purchased.php?username=<?=$username ?>">History</a>
                          
                            <a href="login.php?username=<?=$username ?>" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-between" id="navbar-collapse">
                <ul  class="navbar-nav" style="font-size: 15px !important; display: flex; flex-wrap: wrap;">
                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3" style=" margin-top: 50px;" >
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">USA BANK(prepaid logins only)</a>
                            <div class="dropdown-menu">
								<a class="dropdown-item" href="leo.php?username=<?=$username ?>">Cash App Logs(log+pass) </a>
                                <a class="dropdown-item" href="ly.php?username=<?=$username ?>">Paypal Logs(log+pass) </a>
                                <a class="dropdown-item" href="grass.php?username=<?=$username ?>">Greendot Log(log+pass) </a>
                                <a class="dropdown-item" href="gotta.php?username=<?=$username ?>">Go2Bank Log(log+pass) </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3" style=" margin-top: 50px;">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">USA BANK(full info)</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="ieei.php?username=<?=$username ?>">Huntington Log(full info) </a>
                                <a class="dropdown-item" href="simi.php?username=<?=$username ?>">Chase Log(full info) </a>
                                <a class="dropdown-item" href="devil.php?username=<?=$username ?>">Citi Log(full info) </a>
                                <a class="dropdown-item" href="c13.php?username=<?=$username ?>">PNC Log(full info) </a>
                                <a class="dropdown-item" href="dw.php?username=<?=$username ?>">Woodforest Log(full info) </a>
                                <a class="dropdown-item" href="niche.php?username=<?=$username ?>">Chime Log(full info) </a>
                                <a class="dropdown-item" href="cufat2.php?username=<?=$username ?>">NFCU Log(full info) </a>
								<a class="dropdown-item" href="gw.php?username=<?=$username ?>">Wells Fargo Log(full info) </a>
                                <a class="dropdown-item" href="veaba.php?username=<?=$username ?>">BBVA Log(full info) </a>
                                <a class="dropdown-item" href="beat.php?username=<?=$username ?>">BB&amp;T Log(full info) </a>
                                <a class="dropdown-item" href="oab.php?username=<?=$username ?>">BOA Log(full info) </a>
                                <a class="dropdown-item" href="trsvtb.php?username=<?=$username ?>">Suntrust Log(full info) </a>
								<a class="dropdown-item" href="atme.php?username=<?=$username ?>">M&T Bank Log(full info) </a>
                                <a class="dropdown-item" href="aith.php?username=<?=$username ?>">Trust Bank Log(full info) </a>
                                <a class="dropdown-item" href="ybba.php?username=<?=$username ?>">Sun Corp Bank Log(full info) </a>
                                <a class="dropdown-item" href="eeat.php?username=<?=$username ?>?username=<?=$username ?>">TD Bank(full info) </a>
                                <a class="dropdown-item" href="mpg.php?username=<?=$username ?>">JP Morgan(full info) </a>
                                <a class="dropdown-item" href="cufat.php?username=<?=$username ?>">AFCU Bank(full info) </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3" style=" margin-top: 50px;">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">CANADA BANK(full info)</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="themob.php?username=<?=$username ?>">BMO Bank(full info) </a>
                                <a class="dropdown-item" href="obcy.php?username=<?=$username ?>?username=<?=$username ?>">Scotia Bank Log(full info) </a>
                                <a class="dropdown-item" href="cats.php?username=<?=$username ?>">RBC Log(full info) </a>
                                <a class="dropdown-item" href="atew.php?username=<?=$username ?>">TD Bank Canada(full info) </a>
                                <a class="dropdown-item" href="chris.php?username=<?=$username ?>">CIBC Bank(full info) </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3" style=" margin-top: 50px;">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">UK BANK(full info)</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="sloy.php?username=<?=$username ?>">Llyod Bank Log(full info) </a>
                                <a class="dropdown-item" href="riot.php?username=<?=$username ?>">Barclays Bank Log(full info) </a>
                                <a class="dropdown-item" href="bouchc.php?username=<?=$username ?>">HSBC Bank Log(full info) </a>
                                <a class="dropdown-item" href="tat.php?username=<?=$username ?>">NATWEST Bank Log(full info) </a>
                                <a class="dropdown-item" href="strandsa.php?username=<?=$username ?>">Satander(full info) </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">SHOPWITHSCRIP</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="hswoa.php?username=<?=$username ?>">Shopwithscrip Log (USA) </a>
                                <a class="dropdown-item" href="concrete.php?username=<?=$username ?>">Fundscrip Log(Canada) </a>
                                <a class="dropdown-item" href="thous.php?username=<?=$username ?>">Southwest Log </a>
                            </div>
                        </div>
                    </li>
                     
                    
                    
                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="true" aria-haspopup="true" id="nav-dropdown-2">SIM SWAP (USA ONLY)</a>
                            <div class="dropdown-menu">
                                
                            <a class="dropdown-item" href="tdm.php?username=<?=$username ?>">T-Mobile Log  </a>
                            <a class="dropdown-item" href="mbi.php?username=<?=$username ?>">Verizon  </a>
                            <a class="dropdown-item" href="at.php?username=<?=$username ?>">AT&T Log  </a>
                            <a class="dropdown-item" href="troo.php?username=<?=$username ?>">Metro Log  </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3 ">
                      
                            <a class="nav-link  " href="water.php?username=<?=$username ?>"   aria-expanded="true" aria-haspopup="true" id="nav-dropdown-2">GLASS CHECK</a>
                             
                                
                             
                            
                       
                    </li>

                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3 ">
 
                            <a class="nav-link  " href="missy.php?username=<?=$username ?>"   aria-expanded="true" aria-haspopup="true" id="nav-dropdown-2">STIMMY CHECK</a>
         
                                
                             
                          
                    </li>

                  

                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3">
                         
                            <a class="nav-link  " href="leos.php?username=<?=$username ?>"   aria-expanded="true" aria-haspopup="true" id="nav-dropdown-2">Cashplus log</a>  
                    </li>

                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="d-lg-flex align-items-center">
                                                            <div class="dropdown mx-lg-2">
                        <button class="btn btn-success btn-block dropdown-toggle" type="button" id="newContentButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SUPPORT                       </button>
                        <div class="dropdown-menu">
                            
                            <a class="dropdown-item" href="https://t.me/+3WaFTWdON95mM2Q0">Telegram: Click me!</a>
                            <a class="dropdown-item" href="#">Contact: +1(225)2568010</a>
                        </div>
                    </div>
                    </li>
             

                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="d-lg-flex align-items-center">
                                                            <div class=" mx-lg-2">
                        <button class="btn btn-success btn-block " type="button" id="newContentButton"   aria-haspopup="true" aria-expanded="false">
                            <a href="ovmitt.php?username=<?=$username ?>" style="text-decoration: none; color: #fff;">Vouches</a>
                              
                                            </button>
                     
                    </div>
                    </li>

                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3">

<div class="d-lg-flex align-items-center">
                                        <div class=" mx-lg-2">
    <button class="btn btn-success btn-block " type="button" id="newContentButton"   aria-haspopup="true" aria-expanded="false">
    <a href="#" style="text-decoration: none; color: #fff;">Users: 3000/ <span id="activeMembers"> </span></a>

          
                        </button>
 
</div>
</li>
                    
                </ul>
           
                   
                    
                    <div class="d-none d-lg-block">
                        <div class="dropdown">
                            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img alt="Image" src="log2.jpeg" class="avatar">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                 
                                <a class="dropdown-item" href="history2.php?username=<?=$username ?>">History</a>
                                
                                <a href="htcm.php?username=<?=$username ?>" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="main-container">

            <div class="container mt-5">




                <style>
                    .card {
                        position: relative;
                        display: flex;
                        flex-direction: column;
                        min-width: 0;
                        word-wrap: break-word;
                        background-color: #fff;
                        background-clip: border-box;
                        border: 1px solid #dee2e6;
                        border-radius: 0rem;
                    }
                </style>
                <script src="https://use.fontawesome.com/e59e8cfd90.js"></script>
                <script src="assets/js/clipboard.min.js"></script>
                <script src="assets/js/gateway.js"></script>

                <script language="javascript">
                    function LiveSession() {
                        checkAvailability();
                    }
                    setInterval('LiveSession()', 1000);

                    function checkAvailability() {
                        var UserInvoice = '61e96747c7d4d';
                        jQuery.ajax({
                            url: "api/init.php",
                            data: 'payment=' + UserInvoice,
                            type: "POST",
                            success: function(data) {
                                if (data == "success") {
                                    $.amaran({
                                        'theme': 'colorful',
                                        'content': {
                                            bgcolor: '#28a745',
                                            color: '#fff',
                                            message: 'Your payment received and pending pending confirmation'
                                        },
                                        'stickyButton': true,
                                        'closeOnClick': false,
                                        'inEffect': 'slideTop',
                                        'outEffect': 'slideTop',
                                    });

                                    window.location.href = "balance";

                                    function playAudio(url) {
                                        var a = new Audio(url);
                                        a.play();
                                    }

                                    playAudio('zapsplat_bell_med_chime_long_tail_11429.mp3');

                                }

                            },
                            error: function() {}
                        });
                    }
                </script>

                <div class="row">
                    <div class="col-md-11 col-auto">

                        <div class="card" id="InvoicePaymentBox_444">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 col-md-8 col-lg-8" style="padding:10px;font-size:25px;">
                                        <div class="row h4">
                                            <div class="col justify-content-start">                                        
                                            </div>
                                            <div class="col">
                                                <span class="float-right" style="cursor: copy;">
                                                    <b>
                                                        <a class="copyImg" id="copyImg" data-clipboard-target="#amount">
                                                      
                                                        </a>
                                                    </b>
                                                    <a class="copyImg" id="copyImg" data-clipboard-target="#amount">
                                                        
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                               
                                                              <form action="" name="addedituser" method="post" enctype="multipart/form-data">  
                                                              <p style="font-size: 15px;margin-bottom: 0px;margin-top: 16px;">To this bitcoin address</p>
                                                              <img style="width: 300px; margin-top: -5px;" src="btc2.jpg" alt="QRCODE">
                                                       
                                                       <input type="text" class="form-control copyWallet" id="myInput" readonly="" value="bc1q4kvg5chttcnt2y3td3x0d8yp3uml24htqt3u5y" onclick="myFunction()" data-original-title="Click to copy" data-clipboard-target="#wallet" data-placement="bottom" data-toggle="tooltip" style="cursor: copy; text-align:center;">


                                                       <p style="font-size: 15px;margin-bottom: 0px;margin-top: 16px;">To this Ethereum address</p>
                                                              <img style="width: 300px; margin-top: -5px;" src="eth.jpg" alt="QRCODE">
                                                       
                                                       <input type="text" class="form-control copyWallet" id="myInput" readonly="" value="0x57b76588762b48c42C273884957e5F77c31B1109" onclick="myFunction()" data-original-title="Click to copy" data-clipboard-target="#wallet" data-placement="bottom" data-toggle="tooltip" style="cursor: copy; text-align:center;">


                                                       <p style="font-size: 15px;margin-bottom: 0px;margin-top: 16px;">To this Usdt (trc20) address</p>
                                                       <img style="width: 300px; margin-top: -5px;" src="usdst.jpg" alt="QRCODE">
                                                       
                                                       <input type="text" class="form-control copyWallet" id="myInput" readonly="" value="TBvpU53w3Zk1edCeArbUnMpU783nCW9gT1" onclick="myFunction()" data-original-title="Click to copy" data-clipboard-target="#wallet" data-placement="bottom" data-toggle="tooltip" style="cursor: copy; text-align:center;">
                                                       <p>To this anonymous address you can find more</p>
                                                <a href="http://anonymousstore.cb.id">anonymousstore.cb.id</a>    
                                                       <br>
                                                              <input type="submit" name="submitab" class="form-control copyWallet" id="myInput" readonly="" value="Click to Confirm Payment">
                                                                                                        </form>
                                                                                                <p class="mt-4" style="font-size: 17px;">This page will automatically update the payment status as soon as the transaction is broadcasted. You have limited time to pay for the Balance replenishment, your Balance replenishment will be canceled if you fail to pay in time
                                                </p>
                     
                                                <div class="mt-3 d-flex justify-content-center">
                                                    <h5>Please send your payment within <span id="staticTime" style="display: none;">00:00</span><span class="h3" id="timer" style="width: 100px;text-align: center;" data-seconds-left="43200">

                                                        <div class="jst-hours" style="display: inline;text-align: center;"><p id="demo"></p></div></span> </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="mt-2">
                                            <h5>Attention!</h5>
                                            <p style="font-size: 17px;">When you get that success message that we have recieved your money, you can close this page, it will be automatically added when it gets 1 bitcoin confirmation even if the invoice is expired. The conversion rate in USD currency is updated from <a href="https://www.blockchain.com/prices" target="_BLANK">blockchain.com</a> at the time of receipt of funds to the account. </p>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <center> <img src="./asset/images/Your_Bitcoin_QR_Code.png" style="width: 500px;" class="figure-img img-fluid rounded" data-toggle="modal" data-target="#exampleModal"></center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('#staticTime').hide();
                                $('#timer').startTimer({
                                    onComplete: function(element) {
                                        alertify.alert('Alert', 'Invoice expired!', function() {
                                            window.location.href = 'balance';
                                        });
                                    }
                                });
                                $('#timer div').css('display', 'inline');
                            });
                        </script>

                    </div>

                </div>
            </div>

            <!-- Required vendor scripts (Do not remove) -->

            <script type="text/javascript" src="assets/theme//js/popper.min.js"></script>
            <script type="text/javascript" src="assets/theme//js/bootstrap.js"></script>

            <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

            <!-- Autosize - resizes textarea inputs as user types -->
            <script type="text/javascript" src="assets/theme//js/autosize.min.js"></script>
            <!-- Flatpickr (calendar/date/time picker UI) -->
            <script type="text/javascript" src="assets/theme//js/flatpickr.min.js"></script>

            <!-- Shopify Draggable - drag, drop and sort items on page -->
            <script type="text/javascript" src="assets/theme//js/draggable.bundle.legacy.js"></script>
            <script type="text/javascript" src="assets/theme//js/swap-animation.js"></script>
            <!-- Dropzone - drag and drop files onto the page for uploading -->

            <script type="text/javascript" src="assets/theme//js/list.min.js"></script>
			
			<script>
		// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2024 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = hours + ":"
  + minutes + ":" + seconds + "";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>


<script type="text/javascript">
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>

            <!-- This appears in the demo only - demonstrates different layouts -->
            <style type="text/css">
                .layout-switcher {
                    position: fixed;
                    bottom: 0;
                    left: 50%;
                    transform: translateX(-50%) translateY(73px);
                    color: #fff;
                    transition: all .35s ease;
                    background: #343a40;
                    border-radius: .25rem .25rem 0 0;
                    padding: .75rem;
                    z-index: 999;
                }

                .layout-switcher:not(:hover) {
                    opacity: .95;
                }

                .layout-switcher:not(:focus) {
                    cursor: pointer;
                }

                .layout-switcher-head {
                    font-size: .75rem;
                    font-weight: 600;
                    text-transform: uppercase;
                }

                .layout-switcher-head i {
                    font-size: 1.25rem;
                    transition: all .35s ease;
                }

                .layout-switcher-body {
                    transition: all .55s ease;
                    opacity: 0;
                    padding-top: .75rem;
                    transform: translateY(24px);
                    text-align: center;
                }

                .layout-switcher:focus {
                    opacity: 1;
                    outline: none;
                    transform: translateX(-50%) translateY(0);
                }

                .layout-switcher:focus .layout-switcher-head i {
                    transform: rotateZ(180deg);
                    opacity: 0;
                }

                .layout-switcher:focus .layout-switcher-body {
                    opacity: 1;
                    transform: translateY(0);
                }

                .layout-switcher-option {
                    width: 72px;
                    padding: .25rem;
                    border: 2px solid rgba(255, 255, 255, 0);
                    display: inline-block;
                    border-radius: 4px;
                    transition: all .35s ease;
                }

                .layout-switcher-option.active {
                    border-color: #007bff;
                }

                .layout-switcher-icon {
                    width: 100%;
                    border-radius: 4px;
                }

                .layout-switcher-body:hover .layout-switcher-option:not(:hover) {
                    opacity: .5;
                    transform: scale(0.9);
                }

                @media all and (max-width: 990px) {
                    .layout-switcher {
                        min-width: 250px;
                    }
                }

                @media all and (max-width: 767px) {
                    .layout-switcher {
                        display: none;
                    }
                }
            </style>
            <div class="layout-switcher" tabindex="1">
                <div class="layout-switcher-head d-flex justify-content-between">
                    <span>Select Layout</span>
                    <i class="material-icons">arrow_drop_up</i>
                </div>
                <div class="layout-switcher-body">

                </div>
            </div>




        </div>
        </div><link rel="stylesheet" href="https://use.fontawesome.com/e59e8cfd90.css" media="all">
        <link rel="stylesheet" href="https://use.fontawesome.com/e59e8cfd90.css" media="all">
        <div id="draggable-live-region" aria-relevant="additions" aria-atomic="true" aria-live="assertive" role="log" style="position: fixed; width: 1px; height: 1px; top: -1px; overflow: hidden;"></div>
        

        <div id="draggable-live-region" aria-relevant="additions" aria-atomic="true" aria-live="assertive" role="log" style="position: fixed; width: 1px; height: 1px; top: -1px; overflow: hidden;"></div>
    
    
    
    
        <script>
  setInterval(() => {
    const activeMembers = document.getElementById('activeMembers');
    const newCount = Math.floor(Math.random() * 2000); // Change 1000 to your desired maximum active members count
    activeMembers.innerText = newCount + ' Active Users';
  }, 5000); // Change 5000 to your desired interval in milliseconds
</script>

    
    
<script src="//code.tidio.co/39xk3q6isc7m7zte5cbp5kcxeb37ltjy.js" async></script>
    
    
    
    
    
    </body></html>