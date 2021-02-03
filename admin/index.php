<?php  
 $connect = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");  
 session_start();  
 
 
 if( isset($_SESSION['username']) ) 
 { 
    echo 'session is set.'.'<br>' ; 
} 
else { 
    echo 'session is destroyed'.'<br>'; 
} 
  
echo $_SESSION['username'].'<br>'; 

  
$_SESSION = array(); 
  
// If it's desired to kill the session, also 
// delete the session cookie. 
// Note: This will destroy the session, and 
// not just the session data! 
if (ini_get("session.use_cookies")) 
{ 
    $params = session_get_cookie_params(); 
    setcookie(session_name(), '', time() - 60, 
        $params["path"], $params["domain"], 
        $params["secure"], $params["httponly"] 
    ); 
} 
  
// Finally, destroy the session. 
    session_destroy();
  header("location:index.php"); 
 
 
 if(isset($_SESSION["username"]))  
 {  
  
      header("location:dashboard.php");  
 }  

 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:dashboard.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Admin Panel</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Pe-icon-7-stroke -->
    <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css" />
    <!-- style css -->
    <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css" />
    <!-- Theme style rtl -->
    <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
</head>

<body>
    <!-- Content Wrapper -->
    <div class="login-wrapper">
        <div class="back-link">
            
        </div>
        <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                             <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div> <?php       
                }  
                else  
                {  
                ?> 
                    <div class="panel-body">
                        <form method="post" id="loginForm" >
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Your strong password</span>
                                <p><a href="forget_password.php">Forget Password?</a></p>
                            </div>
                            <div>
                                <button type="submit" name="login" class="btn btn-add">Login</button>
                              
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
             <?php  
                }  
                ?>  
    </div>
    <!-- /.content-wrapper -->
    <!-- jQuery -->
    <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>





