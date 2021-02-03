<?php 
    $connect = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");
   
    if(isset($_POST["addsymptoms"]))
    {
        if(empty($_POST["symptoms_name"]))
        {
            echo '<script>alert("Field are required to filled")</script>';
        }

        else
        {
            
            $symptoms_name=mysqli_real_escape_string($connect,$_POST["symptoms_name"]);
            
    
            $query="INSERT INTO symptoms (symptoms_name) VALUES('$symptoms_name')";
            
            if(mysqli_query($connect, $query))
            {
                echo '<script>alert("Symtoms Added Successfully")</script>';
                header('location:addsymptom.php');
                exit;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image">
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
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
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
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Symptoms</h1>
                  <small>Add Symptoms</small>
               </div>
            </section>

             <!-- Main content -->
             <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="symptoms.php"> 
                              <i class="fa fa-list"></i> View Symptoms </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                          <form enctype="multipart/form-data" method="post" class="col-sm-6">

                <!--              <div class="form-group">-->
                <!--                  <label for="service_name">Select Disease</label>-->
                <!--                    <select class="form-control" id="service_name" name="service_name" requried>-->
                <!--                      <option disabled="" selected="" value="">Select Disease</option>-->
                <!--                      <php   $connect = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");   -->
                <!--$query = "SELECT * FROM services ORDER BY id ASC";  -->
                <!--$result = mysqli_query($connect, $query);    -->
                <!--if(mysqli_num_rows($result) > 0)  -->
                <!--          {  -->
                <!--               while($row = mysqli_fetch_array($result))  -->
                <!--               {  -->
                <!--          ?> -->
                <!--                                        <option><?php echo $row["name"]; ?></option>-->
                <!--                                       <php -->
                <!--                                       }  -->
                <!--                                  }  -->
                <!--                                  ?>-->
                                      
                <!--                    </select>-->
                <!--              </div>-->
                              
                                
                              <div class="form-group">
                                 <label>Symptoms Name</label>
                                 <input type="text" class="form-control" id="symptoms_name" name="symptoms_name" placeholder="Enter Symptoms" required>
                              </div>

                              
                                <button type="submit" name="addsymptoms"value="Add Symptom" class="btn btn-success">Add Symptoms</button>
                             
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
          
               <!-- /.modal -->
            </section>
         </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020-2021 <a href="#">DR. A.K Pandey</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
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
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- CRMadmin frame -->
    <script src="assets/dist/js/custom.js" type="text/javascript"></script>
    <!-- End Core Plugins
         =====================================================================-->
    <!-- Start Theme label Script
         =====================================================================-->
    <!-- Dashboard js -->
    <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
    <!-- End Theme label Script
         =====================================================================-->
</body>


</html>