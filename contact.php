 <?php 
    $connect = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");
   
    if(isset($_POST["contact"]))
    {
        if(empty($_POST["name"]) && empty($_POST["email"]))
        {
            echo '<script>alert("All Field are required to filled")</script>';
        }

        else
        {
            $name=mysqli_real_escape_string($connect,$_POST["name"]);
            $email=mysqli_real_escape_string($connect,$_POST["email"]);
            $subject=mysqli_real_escape_string($connect,$_POST["subject"]);
            $phone=mysqli_real_escape_string($connect,$_POST["phone"]);
            $msg=mysqli_real_escape_string($connect,$_POST["msg"]);
            

            $query="INSERT INTO contacts (name,email,subject,phone,message) VALUES('$name','$email','$subject','$phone','$msg')";
            
            if(mysqli_query($connect, $query))
            {
                echo '<script>alert("Message Successfully Sent")</script>';
                header('location:contact.php'); 
                exit;
                
            }
        }
    header('location:contact.php');           
                
    }
    
    else if(isset($_POST["subscriber"]))
    {
        if(empty($_POST["email"]))
        {
            echo '<script>alert("Email Field is required to be filled")</script>';
        }
        
        else
        {
            $email=mysqli_real_escape_string($connect,$_POST["email"]);
            $query="INSERT INTO subscriber (subscribe_email) VALUES('$email')";
            
            if(mysqli_query($connect,$query))
            {
                echo '<script>alert("Thanks For Subscribe")</script>';
                header('location:contact.php');
                exit;
                
            }
            
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dr. AK Pandey template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
    <link rel="icon" href="images/b.png" type="image" sizes="16x16">
</head>

<body>
     <div class="super_container">

        <header class="header trans_400">
            <div class="header_content d-flex flex-row align-items-center jusity-content-start trans_400">

                <div class="logo">
                    <a href="index.php">
                        <img src="images/large.png" alt="logo" width="150">

                    </a>
                </div>

                <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Treatment
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               
  <?php   $connect = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");   
                $query = "SELECT * FROM services ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);    
                if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?> 
                                <a class="dropdown-item" href="details.php?id=<?php echo $row["id"];?>"><?php echo $row["name"]; ?></a>
                               <?php  
                               }  
                          }  
                          ?>
    
        </div>
      </li>
                        <li class="active"><a href="contact.php">Contact</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                </nav>
                <div class="header_extra d-flex flex-row align-items-center justify-content-end ml-auto">

                    

                    <div class="button button_1 header_button"><a href="contact.php">Make an Appointment</a></div>

                    <div class="social header_social">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>

                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </header>

        <div class="menu_overlay trans_400"></div>
        <div class="menu trans_400">
            <div class="menu_close_container">
                <div class="menu_close">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <nav class="menu_nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Treatment
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               
  <?php   $connect = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");   
                $query = "SELECT * FROM services ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);    
                if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?> 
                                <a class="dropdown-item" href="details.php?id=<?php echo $row["id"];?>"><?php echo $row["name"]; ?></a>
                               <?php  
                               }  
                          }  
                          ?>
    
        </div>
      </li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                </ul>
            </nav>
            <div class="menu_extra">
                <div class="menu_link">Mo - Sat: 8:00am - 9:00pm</div>
                <div class="menu_link">+91 8354808215</div>
                <div class="menu_link"><a href="contact.php">Make an appointment</a></div>
            </div>
            <div class="social menu_social">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="home d-flex flex-column align-items-start justify-content-end">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
            <div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Contact</div>
                                <div class="home_text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="contact_form_container">
                            <div class="contact_form_title">Get In Touch</div>
                            <form action="contact.php"  class="contact_form" id="contact" name="contact" method="post">
                                <div class="d-flex flex-row align-items-start justify-content-between flex-wrap">
                                    <input type="text" name="name" id="name" class="contact_input" placeholder="Your Name" required>
                                    
                                    <input type="email" class="contact_input" id="email" name="email" placeholder="Your E-mail" required>
                                    
                                    <input type="text" class="contact_input" id="subject" name="subject" placeholder="Subject" required>
                                    
                                     <input id="phone" name="phone" type="number" placeholder="Phone"class="contact_input" required=""  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number"maxlength = "10"/>
                                    
                                    <textarea rows="4" cols="50" class="contact_input" id="msg" name="msg" placeholder="Your Message" required style="padding: 7px 8px 5px 7px;"></textarea>
              
                                    
                                </div>
                                <button type="submit" name="contact" id="contact" class="button button_1 contact_button trans_200">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1 contact_col">
                        <div class="contact_content">
                            <div class="contact_content_title">Get in touch with us</div>
                            <div class="contact_content_text">
                                <p></p>
                            </div>
                            <div class="direct_line d-flex flex-row align-items-center justify-content-start">
                                <div class="direct_line_title text-center">Direct Line</div>
                                <div class="direct_line_num text-center">+91 8354808215</div>
                            </div>
                            <div class="contact_info">
                                <ul>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Address</div>
                                        <div>1/160, Vibhav khand , Gomtinagar, Lucknow, 206010</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Phone</div>
                                        <div>+91 8354808215</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>E-mail</div>
                                        <div>akpandeyrkt@gmail.com
</div>
                                    </li>
                                </ul>
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="row google_map_row">
                    <div class="col">

                        <div class="contact_map">

                            <div class="map">
                                <div id="google_map" class="google_map">
                                    <div class="map_container">
                                        <div id="map">
                                            
                                            <iframe src="https://maps.google.com/maps?q=%201%2F160%2C%20Vibhav%20khand%20%2C%20Gomtinagar%2C%20Lucknow%2C%20206010&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="newsletter">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="newsletter_title">Subscribe to our newsletter</div>
                    </div>
                </div>
                <div class="row newsletter_row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="newsletter_form_container">
                            <form action="" method="post" name="subscriber" id="newsleter_form" class="newsletter_form">
                                <input type="email" name="email" class="newsletter_input" placeholder="Your E-mail" required>
                                <button type="submit" class="newsletter_button" name="subscriber">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 footer_col">
                            <div class="footer_about">
                                <div class="footer_logo">
                                    <a href="#">
                                        <div>
                                            <a href="index.php">
                                                <img src="images/large.png" alt="logo" width="150">

                                            </a>
                                        </div>
                                       <div class="footer_title">About Us</div>
                                    </a>
                                </div>
                                <div class="footer_about_text ">
                                    <span><a href="http://drakpandey.com/about.php">Dr. Ankit Kumar Pandey is expertise to treat patient using classic Homeopathic medicine. Our vision is to treat patient based on holistic treatment</a></span>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">Contact Info</div>
                                <ul class="contact_list">
                                    <li>+91 8354808215</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 footer_col">
                            <div class="footer_location">
                                <div class="footer_title">Our Locations</div>
                                <ul class="locations_list">
                                    <li>
                                        <div class="location_title">1/160 Vibhav khand</div>

                                        <div class="location_text">Gomtinagar</div>
                                    </li>
                                    <li>
                                        <div class="location_title">Lucknow</div>
                                        <div class="location_text">206010</div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 footer_col">
                            <div class="opening_hours">
                                <div class="footer_title">Opening Hours</div>
                                <ul class="opening_hours_list">
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Monday:</div>
                                        <div class="ml-auto">8:00am - 9:00pm</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Thuesday:</div>
                                        <div class="ml-auto">8:00am - 9:00pm</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Wednesday:</div>
                                        <div class="ml-auto">8:00am - 9:00pm</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Thursday:</div>
                                        <div class="ml-auto">8:00am - 9:00pm</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-start justify-content-start">
                                        <div>Friday:</div>
                                        <div class="ml-auto">8:00am - 7:00pm</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content  d-flex flex-md-row flex-column align-items-md-center justify-content-start">
                                <div class="copyright">
                                    Copyright &copy;
                                    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                    <script type="68ed49aa95a58c80cbae0012-text/javascript">
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#"> Dr. A.K. Pandey</a>
                                </div>
                                <nav class="footer_nav ml-md-auto">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/jquery-3.2.1.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="styles/bootstrap-4.1.2/popper.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="styles/bootstrap-4.1.2/bootstrap.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/greensock/TweenMax.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/greensock/TimelineMax.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/greensock/animation.gsap.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/easing/easing.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/parallax-js-master/parallax.min.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="plugins/jquery-datepicker/jquery-ui.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script src="js/contact.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="68ed49aa95a58c80cbae0012-text/javascript"></script>
    <script type="68ed49aa95a58c80cbae0012-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="68ed49aa95a58c80cbae0012-|49" defer=""></script>
</body>

</html>