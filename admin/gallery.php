
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
                <div class="header-title">
                    <h1>Photos</h1>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="btn-group" id="buttonexport">
                                    <a href="#">
                                        <h4>Photo Details</h4>
                                    </a>
                                </div>
                            </div>
                            
                            
                            <div align="left" style="margin-top: 25px; margin-left: 15px;">
    <button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i>Add New Photo</button>
   </div>
   <br />
                            
                            <div class="panel-body">
                                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                
                                <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                <div class="table-responsive" id="image_data">
                                    
                                </div>
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
    <!-- table-export js -->
    <script src="assets/plugins/table-export/tableExport.js" type="text/javascript"></script>
    <script src="assets/plugins/table-export/jquery.base64.js" type="text/javascript"></script>
    <script src="assets/plugins/table-export/html2canvas.js" type="text/javascript"></script>
    <script src="assets/plugins/table-export/sprintf.js" type="text/javascript"></script>
    <script src="assets/plugins/table-export/jspdf.js" type="text/javascript"></script>
    <script src="assets/plugins/table-export/base64.js" type="text/javascript"></script>
    <!-- dataTables js -->
    <script src="assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
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

<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   
   <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data">
     <p ><label style="margin:15px 0px;">Select Image</label><br>
     <input type="file" name="image" id="image"  /></p><b><p style="color:red;">*Image size Should be less than 60kb.</p></b><br />
     
        
     
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
      
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
   
  
   
<script>  
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"galleryaction.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
 $('#add').click(function(){
  $('#imageModal').modal('show');
  $('#image_form')[0].reset();
  $('.modal-title').text("Add Image");
  $('#image_id').val('');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });
 $('#image_form').submit(function(event){
  event.preventDefault();
  var image_name = $('#image').val();
  if(image_name == '')
  {
   alert("Please Select Image");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#image').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"galleryaction.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    
    });
   }
  }
 });
 $(document).on('click', '.update', function(){
  $('#image_id').val($(this).attr("id"));
  $('#action').val("update");
  $('.modal-title').text("Update Image");
  $('#insert').val("Update");
  $('#imageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Are you sure you want to remove this image from database?"))
  {
   $.ajax({
    url:"galleryaction.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  




</script>



  
  
 </div>
</div>
