<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"])) 
 {  
      header("location:index.php");  
 }  
 ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
    <!-- Start Global Mandatory Style
         =====================================================================-->
    <!-- jquery-ui css -->
    <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Lobipanel css -->
    <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css" />
    <!-- Pace css -->
    <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Pe-icon -->
    <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />
    <!-- Themify icons -->
    <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css" />
    <!-- dataTables css -->
    <link href="assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- End Global Mandatory Style
         =====================================================================-->
    <!-- Start Theme Layout Style
         =====================================================================-->
    <!-- Theme style -->
    <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css" />
    <!-- Theme style rtl -->
    <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    <!-- End Theme Layout Style
         =====================================================================-->
</head>

<body class="hold-transition sidebar-mini">
    <!--preloader-->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <a href="dashboard.php" class="logo">
                <!-- Logo -->
                <span class="logo-mini">
               <img src="assets/dist/img/mini-logo.png" alt="">
               </span>
                <span class="logo-lg">
               <img src="assets/dist/img/logo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <!-- Sidebar toggle button-->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="pe-7s-angle-left-circle"></span>
                </a>
                <!-- searchbar-->
                <a href="#search"><span class="pe-7s-search"></span></a>
                <div id="search">
                    <button type="button" class="close">×</button>
                    <form>
                        <input type="search" value="" placeholder="type keyword(s) here" />
                        <button type="submit" class="btn btn-add">Search...</button>
                    </form>
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Orders -->
                        <li class="dropdown messages-menu">

                            <ul class="dropdown-menu">
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <!-- start Orders -->
                                            <a href="#" class="border-gray">
                                                <div class="pull-left">
                                                    <img src="assets/dist/img/basketball-jersey.png" class="img-thumbnail" alt="User Image">
                                                </div>
                                                <h4>polo shirt</h4>
                                                <p><strong>total item:</strong> 21
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="border-gray">
                                                <div class="pull-left">
                                                    <img src="assets/dist/img/shirt.png" class="img-thumbnail" alt="User Image">
                                                </div>
                                                <h4>Kits</h4>
                                                <p><strong>total item:</strong> 11
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="border-gray">
                                                <div class="pull-left">
                                                    <img src="assets/dist/img/football.png" class="img-thumbnail" alt="User Image">
                                                </div>
                                                <h4>Football</h4>
                                                <p><strong>total item:</strong> 16
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-list">
                                            <a href="#" class="border-gray">
                                                <div class="pull-left">
                                                    <img src="assets/dist/img/shoe.png" class="img-thumbnail" alt="User Image">
                                                </div>
                                                <h4>Sports sheos</h4>
                                                <p><strong>total item:</strong> 10
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- Messages -->
                        <li class="dropdown messages-menu">

                            <!-- Notifications -->

                            <!-- Tasks -->

                            <!-- Help -->

                            <!-- user -->
                            <li class="dropdown dropdown-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                                   <ul class="dropdown-menu">
                                    <li>
                                        <a href="profile.php">
                                            <i class="fa fa-user"></i> User Profile</a>
                                    </li>
                                    <li><a href="change_password.php"><i class="fa fa-inbox"></i>Change Password</a></li>
                                    <li>
                                        <a href="logout.php">
                                            <i class="fa fa-sign-out"></i> Signout</a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- =============================================== -->
        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
                <!-- sidebar menu -->
                <ul class="sidebar-menu">
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                    </li>

                    <li>
                        <a href="enquiry.php">
                            <i class="fa fa-question-circle"></i> <span>Enquiry</span>
                            <span class="pull-right-container">
                     </span>
                        </a>
                    </li>

                    <li>
                        <a href="appointment.php">
                            <i class="fa fa-plus"></i> <span>Appointment</span>
                            <span class="pull-right-container">
                     </span>
                        </a>
                    </li>

                    <li>
                        <a href="gallery.php">
                            <i class="fa fa-picture-o"></i> <span>Gallery</span>
                            <span class="pull-right-container">
                     </span>
                        </a>
                    </li>

                    <li>
                        <a href="services.php">
                            <i class="fa fa-info-circle"></i> <span>Services</span>
                            <span class="pull-right-container">
                     </span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="subscriber.php">
                            <i class="fa fa-info-circle"></i> <span>Subscribers</span>
                            <span class="pull-right-container">
                     </span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="symptoms.php">
                            <i class="fa fa-info-circle"></i> <span>Symptoms</span>
                            <span class="pull-right-container">
                     </span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        
        
        
       
        
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="header-icon">
                    <i class="fa fa-dashboard"></i>
                </div>
                <div class="header-title">
                    <h1>Admin Dashboard</h1>
                    <small>Very detailed & featured admin.</small>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div id="cardbox1">
                            <div class="statistic-box">
                                <i class="fa fa-user-plus fa-3x"></i>
                                <div class="counter-number pull-right">
                                     <?php
                                        
                                        $con = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");
                                        $query ="SELECT id FROM appointments";
                                        $query_run = mysqli_query($con,$query);
                                        $rows = mysqli_num_rows($query_run);
                                        
                                        echo '<h1>'.$rows.'</h1>';
                                        
                                    ?>  
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                                </div>
                                <h3>Total Appointments</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div id="cardbox2">
                            <div class="statistic-box">
                                <i class="fa fa-user-secret fa-3x"></i>
                                <div class="counter-number pull-right">
                                    <span class="count-number">
                                    <?php
                                        
                                        $con = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");
                                        $query ="SELECT id FROM subscriber";
                                        $query_run = mysqli_query($con,$query);
                                        $rows = mysqli_num_rows($query_run);
                                        
                                        echo '<h1>'.$rows.'</h1>';
                                        
                                    ?> 
                                    </span>
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                                </div>
                                <h3>Total Subscribers</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div id="cardbox3">
                            <div class="statistic-box">
                                <i class="fa fa-question-circle fa-3x"></i>
                                <div class="counter-number pull-right">
                                   <span class="count-number">
                                    <?php
                                        
                                        $con = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");
                                        $query ="SELECT id FROM contacts";
                                        $query_run = mysqli_query($con,$query);
                                        $rows = mysqli_num_rows($query_run);
                                        
                                        echo '<h1>'.$rows.'</h1>';
                                        
                                    ?>  </span>
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                                </div>
                                <h3>Total Queries</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div id="cardbox4">
                            <div class="statistic-box">
                                <i class="fa fa-files-o fa-3x"></i>
                                <div class="counter-number pull-right">
                                    <span class="count-number">
                                    <?php
                                        
                                        $con = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");
                                        $query ="SELECT id FROM services";
                                        $query_run = mysqli_query($con,$query);
                                        $rows = mysqli_num_rows($query_run);
                                        
                                        echo '<h1>'.$rows.'</h1>';
                                    ?>
                                    </span>
                                    <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                                </div>
                                <h3>Active Services</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                  <strong>Copyright &copy; 2020-2021 <a href="#">DR. A.K Pandey</a>.</strong> All rights reserved.
            </footer>
        </div>
        <!-- /.wrapper -->
        <!-- Start Core Plugins
         =====================================================================-->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- jquery-ui -->
        <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel -->
        <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- Pace js -->
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript">
        </script>
        <!-- FastClick -->
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- CRMadmin frame -->
        <script src="assets/dist/js/custom.js" type="text/javascript"></script>
        <!-- End Core Plugins
         =====================================================================-->
        <!-- Start Page Lavel Plugins
         =====================================================================-->
        <!-- ChartJs JavaScript -->
        <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
        <!-- End Page Lavel Plugins
         =====================================================================-->
        <!-- Start Theme label Script
         =====================================================================-->
        <!-- Dashboard js -->
        <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
        <!-- End Theme label Script
         =====================================================================-->
        <script>
            function dash() {
                // single bar chart
                var ctx = document.getElementById("singelBarChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
                        datasets: [{
                            label: "My First dataset",
                            data: [40, 55, 75, 81, 56, 55, 40],
                            borderColor: "rgba(0, 150, 136, 0.8)",
                            width: "1",
                            borderWidth: "0",
                            backgroundColor: "rgba(0, 150, 136, 0.8)"
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });

                //bar chart
                var ctx = document.getElementById("barChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september", "october", "Nobemver", "December"],
                        datasets: [{
                            label: "My First dataset",
                            data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
                            borderColor: "rgba(0, 150, 136, 0.8)",
                            width: "1",
                            borderWidth: "0",
                            backgroundColor: "rgba(0, 150, 136, 0.8)"
                        }, {
                            label: "My Second dataset",
                            data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
                            borderColor: "rgba(51, 51, 51, 0.55)",
                            width: "1",
                            borderWidth: "0",
                            backgroundColor: "rgba(51, 51, 51, 0.55)"
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });
            }
            dash();
        </script>
</body>


</html>