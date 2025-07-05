<?php
session_start(); // Start the session
$username=$_SESSION['username'];
?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

 
 
  <style>
    .usa-icon {
      margin-right: 5px; /* Adjust the margin as needed */
    }
  </style>
  
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function () {
        const usersArray = [
            "Ava Thompson", "Liam Rodriguez", "Olivia Parker", "Noah Campbell", "Sophia Griffin",
            "Jackson Sullivan", "Emma Carter", "Aiden Foster", "Isabella Martinez", "Lucas Reed",
            "Mia Phillips", "Caleb Turner", "Harper Cooper", "Elijah Sanchez", "Abigail Price",
            "Oliver Coleman", "Amelia Wright", "Grayson Bennett", "Evelyn Wood", "Carter Russell",
            "Scarlett Watson", "Benjamin Perry", "Chloe Hayes", "Henry Brooks", "Penelope Simmons",
            "Wyatt Rivera", "Lily Stewart", "Sebastian Hughes", "Addison Ramirez", "Daniel Parker",
            "Zoey Foster", "Matthew Sanders", "Aria Bennett", "Jayden Gray", "Grace Taylor",
            "Leo Harris", "Aubrey Diaz", "Jack Turner", "Riley Foster", "Layla Powell",
            "Samuel Murphy", "Victoria Price", "Julian Perez", "Brooklyn Ward", "Connor Reed",
            "Nora Ross", "Lincoln Wood", "Ellie Clark", "Gabriel Long", "Savannah King",
            "Christopher Baker", "Madison Thomas", "Julian Simmons", "Stella Mitchell", "Owen Adams",
            "Leah Howard", "Anthony Brooks", "Hazel Coleman", "Isaac Flores", "Claire Anderson",
            "Max White", "Lillian Allen", "Andrew Nelson", "Addison Roberts", "Caleb Bell",
            "Alexis Evans", "Daniel White", "Aurora Cox", "Evan Lee", "Hannah Butler",
            "Eli Morgan", "Violet Wright", "Isaiah Garcia", "Natalie Martinez", "Dylan Watson",
            "Maya Patterson", "Jeremiah Reed", "Zoey Phillips", "Nolan Diaz", "Scarlett King",
            "Cooper Brooks", "Eva Hayes", "Gabriel Mitchell", "Grace Murphy", "William Turner",
            "Sofia Price", "Logan Howard", "Harper Ross", "Gabriel Ramirez", "Addison Coleman",
            "Samuel Peterson", "Amelia Ward", "Jackson Bennett", "Sophia Smith", "Aiden Foster",
            "Isabella Hayes", "Lucas Carter", "Olivia Reed", "Elijah Foster", "Ava Thompson",
        ];

        function getRandomUserName() {
            const randomIndex = Math.floor(Math.random() * usersArray.length);
            return usersArray[randomIndex];
        }

        function getRandomUserData(callback) {
            // Simulate fetching data from the server
            const userData = [{
                usernamee: getRandomUserName()
            }];
            callback(userData);
        }

        function getRandomBank() {
            const banks = ["HUNTINGON", "WOODFOREST", "WELLSFARGO", "PAYPAL", "M&T", "DCU"]; // Add your banks here
            const randomIndex = Math.floor(Math.random() * banks.length);
            return banks[randomIndex];
        }

        function showNotification() {
            getRandomUserData(function (userData) {
                if (userData && userData.length > 0) {
                    const usernamee = userData[0].usernamee;
                    const bank = getRandomBank(); // Get a random bank
                    Toastify({
                        text: `User ${usernamee} just purchased logs in ${bank}`,
                        duration: 5000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                        onclick: function () {
                            console.log("Toast clicked");
                        }
                    }).showToast();
                } else {
                    console.error('Invalid or missing data from the server');
                }
            });
        }

        setTimeout(showNotification, 2000);
        setInterval(showNotification, 15000);
    });
  </script>

  
 

  <title></title>
</head>
<body>

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
                    
                            <a class="dropdown-item" href="history2.php?username=<?=$username ?>">History</a>
                          
                            <a href="index.php?username=<?=$username ?>" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-between" id="navbar-collapse">
                <ul  class="navbar-nav" style="font-size: 15px !important; display: flex; flex-wrap: wrap;">
                     <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3">
                    
                    	<a class="nav-link" href="leo.php?username=<?=$username ?>"  aria-expanded="true" aria-haspopup="true" id="nav-dropdown-2">Linkable credit cards Logs </a>
                    	  </li>
                    	  
                    	  <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3">
                    
                    	<a class="nav-link" href="kcrp.php?username=<?=$username ?>"  aria-expanded="true" aria-haspopup="true" id="nav-dropdown-2">Plaid Logs </a>
                    	  </li>
                  
                   <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3">
                         
                            <a class="nav-link  " href="leos.php?username=<?=$username ?>"   aria-expanded="true" aria-haspopup="true" id="nav-dropdown-2">Cashplus log</a>  
                    </li>
                  
                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3" >
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
                                <a class="dropdown-item" href="eeat.php?username=<?=$username ?>">TD Bank(full info) </a>
                                <a class="dropdown-item" href="mpg.php?username=<?=$username ?>">JP Morgan(full info) </a>
                                <a class="dropdown-item" href="cufat.php?username=<?=$username ?>">AFCU Bank(full info) </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3"  >
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">CANADA BANK(full info)</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="themob.php?username=<?=$username ?>">BMO Bank(full info) </a>
                                <a class="dropdown-item" href="obcy.php?username=<?=$username ?>">Scotia Bank Log(full info) </a>
                                <a class="dropdown-item" href="cats.php?username=<?=$username ?>">RBC Log(full info) </a>
                                <a class="dropdown-item" href="atew.php?username=<?=$username ?>">TD Bank Canada(full info) </a>
                                <a class="dropdown-item" href="chris.php?username=<?=$username ?>">CIBC Bank(full info) </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3"  >
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
                    
                     
                    
                    
                    

                  






                              <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3"   >
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">Prepaid Logs</a>
                            <div class="dropdown-menu">
								 
                                <a class="dropdown-item" href="ly.php?username=<?=$username ?>">Paypal Logs(log+pass) </a>
                                <a class="dropdown-item" href="grass.php?username=<?=$username ?>">Greendot Log(log+pass) </a>
                                <a class="dropdown-item" href="gotta.php?username=<?=$username ?>">Go2Bank Log(log+pass) </a>
                            </div>
                        </div>
                    </li>



                    <li class="nav-item col-12 col-sm-6 col-md-4 col-lg-3"   >
                        <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">
  <i class="fas fa-flag-usa usa-icon"></i> USA OPEN UPS
</a>
                            <div class="dropdown-menu">
								 
                                <a class="dropdown-item" href="veg.php?username=<?=$username ?>"> Fresh Account </a>
                                <a class="dropdown-item" href="dlo.php?username=<?=$username ?>">Aged Account </a>
                               
                            </div>
                        </div>
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
                            <a href="pot.php?username=<?=$username ?>" style="text-decoration: none; color: #fff;">TopUp</a>
                              
                                            </button>
                     
                    </div>
                    </li>
                    
                    
                     
                   
                    <li class="nav-item col-9 col-sm-4 col-md-4 col-lg-3">

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
                                
                                <a href="index.php?username=<?=$username ?>" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        
       
		<script>
var time = new Date();
var date = time.getFullYear()+'-'+(time.getMonth()+1)+'-'+time.getDate();
var today= time.getHours() + ":" + time.getMinutes() + ":" + time.getSeconds();
var dateTime = date+' '+time;
document.getElementById('date-time').innerHTML=date;
document.getElementById('date').innerHTML=date;
document.getElementById('dates').innerHTML=date;
document.getElementById('time').innerHTML=date;
document.getElementById('datetime').innerHTML=date;
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
            
      
}

        </style>
 
 <script>
  let currentCount = 1500;
  let intervalTime = 5000; // Initial interval time in milliseconds
  const activeMembers = document.getElementById('activeMembers');

  setInterval(() => {
    const newCount = Math.floor(Math.random() * (2000 - currentCount + 1) + currentCount);
    activeMembers.innerText = newCount + ' Active';
    

    // Increase interval time after every change
    if (intervalTime < 120000) {
      intervalTime += 60000; // Increase interval by 55 seconds
    }
  }, intervalTime);
</script>


 




</body></html>