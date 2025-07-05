<?php
if (!isset($_GET['username']))
{
      header('Location: logIn.php');
}
else{
    $username = $_GET['username'];
    $url = "balance.php?username=".$username;
        
     
}

?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{% static '" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>
        HISTORY
    </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="https://www.inlaks.com/wp-content/uploads/2019/08/Inlaks-Favicon.png" /> -->

     <!-- Icons. Uncomment required icon fonts -->
     <link rel="stylesheet" href="static\vendor\fonts\boxicons.css" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Core CSS -->
   <link rel="stylesheet" href="static\vendor\css\core.css" class="template-customizer-core-css" />
   <link rel="stylesheet" href="static\vendor\css\theme-default.css" class="template-customizer-theme-css" />
   <link rel="stylesheet" href="static\css\demo.css" />

   <!-- Vendors CSS -->
   <link rel="stylesheet" href="static\vendor\libs\perfect-scrollbar\perfect-scrollbar.css" />

   <link rel="stylesheet" href="static\vendor\libs\apex-charts\apex-charts.css" />

   <!-- Page CSS -->

   <!-- Helpers -->
   <script src="static\vendor\js\helpers.js"></script>

   <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
   <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
   <script src="static\js\config.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.css">

    
</head>

<body>


    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">

        <div class="layout-container">

           

            <!-- Layout container -->
            <div class="layout-page">






                <!-- Navbar -->


               


                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->

                    <div class="container-fluid text-white">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-6">
                                    <div class="h4 display-5">
                                        Transaction History
                                    </div>
                                    <p>
                                        Transaction History
                                    </p>
                                </div>
                                <div class="col-md-6 align-items-right ">
                                    <a href="dashboard.php?username=<?=$username?>" class="align-items-right">Home</a> / Transaction History
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="bg-dark2 text-white">
                                    <h5 class="card-header text-white"> </h5>
                                </div>

                                <div class="table-responsive text-noswrap pt-1">
                                    <table class="table table-responsive " id="boa">
                                        <thead>
                                            <tr>

                                                <th class="text-white">#</th>
                                                <th class="text-white">Date</th>
                                                <th class="text-white">amount</th>
                                                <th class="text-white">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">


                                            
                                         <?php
 require_once 'userconnect.php';

if ($conn->connect_error) {
    die("Fatal Error");
}

$username = mysqli_real_escape_string($conn, $_GET['username']);  // Sanitize user input

$query = "SELECT * FROM users WHERE UserName='$username'";
$query_run = mysqli_query($conn, $query);

if ($query_run) {
    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $amount) {
            $date = strtotime($amount['Date']);
            $currentDate = strtotime(date('Y-m-d'));
            $statusComplete = $amount['statusComplete'];

            ?>
            <tr>
                <td class='text-white'><?= $amount['ID']; ?></td>
                <td class='text-white'><?= $amount['Date']; ?></td>
                <td class='text-white'>$<?= $amount['price']; ?></td>
                <td>
                <?php
                    // Update the status based on conditions
                    if ($statusComplete == 1) {
                        echo 'Complete';
                    } elseif ($statusComplete == 0 && $date < strtotime('-2 days', $currentDate)) {
                        // Set status to Cancelled if the status is 0 and two days have passed
                        echo 'Cancelled';
                    } else {
                        echo 'Pending';
                    }
                ?>
                </td>
            </tr>
            <?php
        }
    } else {
        echo "<h5> No Record Found </h5>";
    }
} else {
    die('Error in SQL query: ' . mysqli_error($conn));
}
?>
                                </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!-- Footer -->

                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <div id="toast-container" class="toast-top-left">
            <div class="toast toast-success bg-success" aria-live="polite" style="background-color: black;">
                <div class="toast-title"> </div>
                <div class="toast-message"> </div>
            </div>
        </div>


    </div>

    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="static\vendor\libs\jquery\jquery.js"></script>
    <script src="static\vendor\libs\popper\popper.js"></script>
    <script src="static\vendor\js\bootstrap.js"></script>
    <script src="static\vendor\libs\perfect-scrollbar\perfect-scrollbar.js"></script>

    <script src="static\vendor\js\menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="static\vendor\libs\apex-charts\apexcharts.js"></script>

    <!-- Main JS -->
    <script src="static\js\main.js"></script>

    <!-- Page JS -->
    <script src="static\js\dashboards-analytics.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="static\js\toast.js"></script>

    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.js"></script>


</body>

</html>