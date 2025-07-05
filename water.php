<?php

if (!isset($_GET['username']))
{
      header('Location: logIn.php');
}
else{
    $username = $_GET['username'];
    $url = "balance.php?username=".$username;  
}
$price = 6000;
?>




<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANONYMOUS SPAMMING</title>

    <link rel="shortcut icon " href="logo.png" type="image/x-icon " />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link rel="stylesheet" href="./asset/theme/css/theme.css">
    <link rel="stylesheet" href="./asset/css/custom.css">
    <link rel="stylesheet" href="uslog.css">
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
 
        
#onlineStatus {
            font-size: 18px;
        }
        .logo{
            background-color: #fff;
            border-radius: 50px;
        }
       

    </style>

</head>

<body class="authentication-bg">
 
<div class="layout layout-nav-top">
        <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
            <a class="navbar-brand" href="dashboard.php?username=<?=$username ?>">
                <img alt="Pipeline" src="assets/img/logo.png" style="width: 60px; height: 60px; background-color: white" class="logo">
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

            <div class="gallery">
                <div class="content">
                    <img src="glass.jpg">
                    <a href="noic.php?username=<?=$username?>&price=<?=$price?>">buy</a>
                    <a href="#">$<?=$price?></a>
                   
                  
                    
                     
                     
                </div>
            
                      
             
            
             
           
                
    
             
    
            </div>
        </section>

        
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
       
  
 
        <script type="text/javascript">
            (function () {
            var button = document.getElementById('toggle-menu');
            button.addEventListener('click', function(event) {
            event.preventDefault();
            var menu = document.getElementById('main-menu');
            menu.classList.toggle('is-open');
            });
            })();
            </script>
            <script>
  setInterval(() => {
    const activeMembers = document.getElementById('activeMembers');
    const newCount = Math.floor(Math.random() * 2000); // Change 1000 to your desired maximum active members count
    activeMembers.innerText = newCount + ' Active Users';
  }, 5000); // Change 5000 to your desired interval in milliseconds
</script>

    
    
<script src="//code.tidio.co/39xk3q6isc7m7zte5cbp5kcxeb37ltjy.js" async></script>
    </body>
</html>