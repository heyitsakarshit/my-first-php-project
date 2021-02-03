<?php 
    $connect = mysqli_connect("localhost","drakpandey","Pandey@809","akpandey");
    if(isset($_POST["subscriber"]))
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
                header('location:about.php');
                exit;
            }
            
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dr. AK Pandey template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/about.css">
    <link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
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
                        <li class="active"><a href="about.php">About us</a></li>
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
        <a class="nav-link dropdown-toggle" href="services.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
            <div class="home_overlay"><img src="images/home_overlay.png" alt=""></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">About us</div>
                                <div class="home_text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="intro_content">
                            <div class="section_title_container">
                                <div class="section_subtitle">This is Dr. AK Pandey</div>
                                <div class="section_title">
                                    <h2>Welcome to our Clinic</h2>
                                </div>
                            </div>
                            <div class="intro_text">
                                <p>Dr. Ankit Kumar Pandey is expertise to treat patient using classic Homeopathic medicine. Our vision is to treat patient based on holistic treatment with totalistic support as instructed by Dr. Samuel Hahnemann, founder of homeopathy. Homeopaths generally begin with case taking which can be 15 – 30 minutes appointment or last for over an hour, where the patient describes their medical history. They also solicit information on mood, likes and dislikes, their physical, mental, and emotional states, life circumstances, any physical or emotional illnesses and their personality. The totality of the information obtained is matched to the drug picture in the Materia medica or repertory and is used to determine the appropriate homeopathic remedies.
We focus on case taking of individuals to find the best medicine for each of their disease so that they may become ever healthy, free from any kind of ailment and lead a happy life.
Skilled homeopathic prescribing requires that the characteristics of the chosen medicine should be as similar as possible to the characteristics of the illness in the patient. The more detailed the understanding of the symptom nuances of the patient, the more accurate the prescription.</p>

<bl>
<b><li class="intro_text" style="color: #676767;margin-top: 40px;">Treatment Using Original German Medicine.</li></b>
<b><li class="intro_text" style="color:#676767;">Chronic Case Cure.</li></b>
<b><li class="intro_text" style="color:#676767;">We provide Quick Response Medicine.</li></b>
<b><li class="intro_text" style="color:#676767;">No Side Effects.</li></b>
<b><li class="intro_text" style="color:#676767;">Individual Case Analysis.</li></b>
<b><li class="intro_text" style="color:#676767">Instant Support on What’s app.</li></b>
<b><li class="intro_text" style="color:#676767">Direct Access to Doctor.</li></b>
</bl>
                            </div>

                            <div class="milestones">
                                <div class="row milestones_row">

                                    <div class="col-md-3 milestone_col">
                                        <div class="milestone">
                                            <div class="milestone_counter" data-end-value="5000" data-sign-before="+">0</div>
                                            <div class="milestone_text">Satisfied Patients</div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 milestone_col">
                                        <div class="milestone">
                                            <div class="milestone_counter" data-end-value="352">0</div>
                                            <div class="milestone_text">Face Liftings</div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 milestone_col">
                                        <div class="milestone">
                                            <div class="milestone_counter" data-end-value="718">0</div>
                                            <div class="milestone_text">Injectibles</div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 milestone_col">
                                        <div class="milestone">
                                            <div class="milestone_counter" data-end-value="5">0</div>
                                            <div class="milestone_text">Awards Won</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 offset-lg-1">
                        <div class="intro_image"><img src="images/intro_1.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>


    


     <div class="newsletter sub-image">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="newsletter_title">Subscribe to our newsletter</div>
                    </div>
                </div>
                <div class="row newsletter_row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="newsletter_form_container">
                            <form  method="post" name="subscriber" id="newsleter_form" class="newsletter_form" action="">
                                <input type="email" name="email" class="newsletter_input" placeholder="Your E-mail" required>
                                <button type="submit" class="newsletter_button" name="subscriber">Subscribe</button>
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
    <script src="js/about.js" type="68ed49aa95a58c80cbae0012-text/javascript"></script>

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