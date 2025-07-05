<?php
if (!isset($_GET['username'])) {
    header('Location: logIn.php');
} else {
    $username = $_GET['username'];
   }
?>
	 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymouslogs</title>

    <link rel="shortcut icon " href="logo.png" type="image/x-icon " />
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
        .logo{
            border-radius: 50px;
            
        }
    </style>

</head>

<body class="authentication-bg">
<?php include 'dassh.php'; ?>
        
        
        
        <div class="main-container">

            <div class="container mt-5">




 



            <div class="container-fluid text-white pt-3 pb-5">
                        <div class="row">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-8">
                                 
                                <div class="">
                                    <div class="card   p-2 m-2" style="background-color: #292D35;">
                                        <h3 class="text-warning p-3">Attention!</h3>
                                        <hr>
                                        <p class="content p-2">
                                            <!-- You can Deposit a minimum amount of $30.00 and these funds
                                            will immediatley go to your personal account.
                                            <br> -->
                                            The conversion rate is in USD, it is updated from <span><a href="https://www.blockchain.com/explorer/assets/btc" target="_blank">blockchain.info</a></span> at the time of receipt of funds to the account.
                                        </p>
                                    </div>

                                    <div class="card   p-2 m-2 bg-main" style="background-color: #292D35;">
                                        <form action="" method="post" class="forms-control">
                                            <input type="hidden" name="csrfmiddlewaretoken" value="tRBmvqBH6geHEFEcgBgaVoNHx7a9m7SiASel32nyhzOhCVMcGZu4SpJtxfG0hAcP">


                                            <div id="div_id_amount" class="mb-3"> <label for="id_amount" class="form-label requiredField">
                                            Amount<span class="asteriskField">*</span> </label> <input type="number" name="amount" step="0.01" class="numberinput form-control" required id="id_amount"> </div>

                                            <br>

                                            <input type="submit" class="btn btn-md btn-primary text-white" name="submit" value="Send">
                                        </form>
                                        <br>
                                    </div>


                                </div>

                            </div>
                            <div class="col-md-2"></div>

                        </div>
                    </div>

          
        </div>
        












                 
              
                                        
                      

										 										
						 
 
                
                <div style="min-height: 100px"></div>
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
                opajobs: .95;
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
                opajobs: 0;
                padding-top: .75rem;
                transform: translateY(24px);
                text-align: center;
            }

            .layout-switcher:focus {
                opajobs: 1;
                outline: none;
                transform: translateX(-50%) translateY(0);
            }

            .layout-switcher:focus .layout-switcher-head i {
                transform: rotateZ(180deg);
                opajobs: 0;
            }

            .layout-switcher:focus .layout-switcher-body {
                opajobs: 1;
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
                opajobs: .5;
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

        


        <div id="draggable-live-region" aria-relevant="additions" aria-atomic="true" aria-live="assertive" role="log" style="position: fixed; width: 1px; height: 1px; top: -1px; overflow: hidden;"></div>
    
 

    
    
<script src="//code.tidio.co/39xk3q6isc7m7zte5cbp5kcxeb37ltjy.js" async></script>
    
    </body></html>