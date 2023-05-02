<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>
<?php include "visitors_counter.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>About Us - <?php echo $setting['site_name']; ?></title>
<meta name="description" content="We Offer Import & Export assistance foreign businesses in transporting and selling their products in China, India and USA. We connect domestic companies to the international shipping services most suited for their business.">
   
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&amp;family=Yantramanav:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->


</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
  

  
    <!-- End Main Header -->
<?php include "header.php"; ?>
<div class="ticket">
    <span class="count">Visitors count: <?php echo $visitor_count; ?><img src="gear.gif" style="width: 40px;"></span>
</div>
    <!-- Hidden Sidebar -->

    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><span class="flaticon-remove"></span></div>
                <div class="text-widget sidebar-widget">
                    <div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
                    <div class="text">jezzer</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget sidebar-widget">
                    <div class="row">
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 column">
                            <div class="content">
                                <div class="icon"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                <h4>Sender <br> Instructions</h4>
                            </div>
                        </div>
                    </div>                            
                </div>
                <!-- Contact Widget -->
           
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="theme-btn btn-style-one style-two"><span><i class="flaticon-up-arrow"></i></span></a></div>
            </div>
        </div>
    </section>
    
    <!--Search Popup-->
 

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/edubg.jpg);">
        <!--<div class="background-text">
            <div data-parallax='{"x": 100}'>
                <div class="text-1">transida</div>
                <div class="text-2">transida</div>
            </div>                
        </div> -->
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Educare SchoolHouse</h1>
                    </div>
                   <!--<ul class="bread-crumb style-two">
                        <li class="active"><a href="about.php">About Company <i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="history.php">Our History <i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="team.php">Leadership Team<i class="flaticon-up-arrow"></i></a></li>
                        <li><a href="global-networks.php">Global Network <i class="flaticon-up-arrow"></i></a></li>
                    </ul> -->
                </div>                    
            </div>
        </div>
    </section>

    <!-- Who we are -->
    <section class="who-we-are-section">
        <div class="top-content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sec-title mb-30">
                            <div class="sub-title">Company</div>
                            <h2>Education provider<br> Since 2010.</h2>
                        </div>
                        <div class="experience-year">
                            <!-- <div class="icon"><i class="flaticon-package-1"></i></div> -->
                            <div class="content">
                                <h3>10 <span>+ Years</span></h3>
                                <h5>lorem ipsum</h5>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-8">
                        <div class="image mb-30"><img src="assets/images/resource/edu2.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overview">
            <div class="auto-container">
                <div class="wrapper-box">
                    <h2>“Sending my child to this school was the best decision I ever made. The educators genuinely care about their students and go above and beyond to support their success.” - Krisha Along, Parent</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text">
                    <p>At Educare, we believe that every child deserves an excellent education that will prepare them for future success. Our knowledgeable and committed teachers create a supportive environment where children can succeed academically and socially.</p>
                    <p>Our kindergarten curriculum aims to provide young students with a solid foundation in arithmetic, reading, and writing that will last them for years by providing hands-on activities, play-based learning, and exploration. Our well-trained teachers can provide each student individualized attention, enabling them to achieve their greatest potential.</p>
                    <p>Our curriculum keeps students engaged and challenged as they advance through our elementary school in fresh and engaging ways. We provide an academic curriculum that gets children ready for middle school and beyond. To help students in understanding and putting new ideas into practice, our teachers employ a range of teaching strategies and resources. </p>
                    <p>However, education is not just about academics. At Educare, we also place a high priority on social and emotional development. We instill in our children the value of being polite, considerate, and civically engaged members of society. We support children in developing crucial life skills like empathy, teamwork, and problem-solving through our character education program.</p>    
                    <p>Don't just take our word for it; listen to what some of our grateful parents have to say:</p>      
                    
                    <p><i>“Sending my child to this school was the best decision I ever made.
                         The educators genuinely care about their students and go above and beyond to support their success.”</i> - Krisha Along, Parent</p>

                    <p><i>“My daughter has attended this school since kindergarten. Now, she has grown 
                        into a confident and enthusiastic learner. I am grateful that my daughter is part of this school community.”</i> - Joanne Lopez, Parent</p>

                    </div>
                            <div class="author-info wow fadeInUp" data-wow-duration="1500ms">
                                <div class="video-btn">
                                    <a href="" class="overlay-link lightbox-image video-fancybox"><i class="flaticon-play-arrow"></i></a>
                                    <!-- https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s -->
                                </div>
                                <!-- <div class="signature"><img src="assets/images/sign.PNG" alt=""></div> -->
                                <div>
                                    <div class="author-title">John doe</div>
                                    <div class="designation">Educare Schoolhouse Founder</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row m-10">
                                <!--Column-->
                                <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="400">0</span><span></span>
                                            </div>
                                            <h4>lorem <br> ipsum</h4>
                                            <h5>Total</h5>
                                        </div>
                                    </div>
                                </div>

                                     <!--Column-->
                                     <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="400">0</span><span></span>
                                            </div>
                                            <h4>lorem <br> ipsum</h4>
                                            <h5>Total</h5>
                                        </div>
                                    </div>
                                </div>

                                     <!--Column-->
                                     <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="400">0</span><span></span>
                                            </div>
                                            <h4>lorem <br> ipsum</h4>
                                            <h5>Total</h5>
                                        </div>
                                    </div>
                                </div>

                                     <!--Column-->
                                     <div class="column counter-column col-md-3">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="400">0</span><span></span>
                                            </div>
                                            <h4>lorem <br> ipsum</h4>
                                            <h5>Total</h5>
                                        </div>
                                    </div>
                                </div>
                            
                          
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

       <!-- Team Section -->
       <section class="team-section style-three">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6 team-blcok">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/team-1.png" alt=""></div>
                        <div class="content">
                            <div class="designation">Founder</div>
                            <h4>Todd Macomber</h4>
                            <div class="hover-content">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="designation">Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 team-blcok">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/team-1.png" alt=""></div>
                        <div class="content">
                            <div class="designation">Director</div>
                            <h4>Noel Howard</h4>
                            <div class="hover-content">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="designation">Director</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 team-blcok">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/team-1.png" alt=""></div>
                        <div class="content">
                            <div class="designation">Staff</div>
                            <h4>William Villalon</h4>
                            <div class="hover-content">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="designation">Staff</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 team-blcok">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/team-1.png" alt=""></div>
                        <div class="content">
                            <div class="designation">teacher</div>
                            <h4>Jack Edwards</h4>
                            <div class="hover-content">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="designation">Teacher</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 team-blcok">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/team-1.png" alt=""></div>
                        <div class="content">
                            <div class="designation">Teacher</div>
                            <h4>Richard Palmieri</h4>
                            <div class="hover-content">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="designation">Teacher</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 team-blcok">
                    <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                        <div class="image"><img src="assets/images/resource/team-1.png" alt=""></div>
                        <div class="content">
                            <div class="designation">Teacher</div>
                            <h4>Randy Brigs</h4>
                            <div class="hover-content">
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                                <div class="designation">Teacher</div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </section>

     <!-- Whychooseus section four -->
   <!-- <section class="whychooseus-section-four" style="background-image: url(assets/images/background/bg-23.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <div class="sub-title">Why Choose Us</div>
                <h2> Reasons Why to Choose Our <br> Freight Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-shield"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Trasparent Pricing</h4>
                     
                        <div class="count">01</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-delivery"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>On - Time Delivery</h4>
                        
                        <div class="count">02</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-box"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>Real Time Tracking</h4>
                     
                        <div class="count">03</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 whychooseus-block-four">
                    <div class="inner-box wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="icon"><span class="flaticon-24-hours"></span><i class="fas fa-check"></i><a href="#"><i class="fas fa-check"></i>Read More</a></div>
                        <h4>24/7 Online Support</h4>
                       
                        <div class="count">04</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Statement -->
    <section class="statement-section pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image"><img src="assets/images/resource/edu4.jpg" alt=""></div>
                </div>
                <div class="col-lg-6">
                    <div class="content">  
                        <div class="badge"><img src="assets/images/resource/edu3.png" alt=""></div>
                        <!-- Tab panes -->
                        <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                <div class="text-block">
                                    <div class="sec-title mb-50">
                                        <div class="sub-title">Statements</div>
                                        <h2>Mission Statement</h2>
                                    </div>
                                    <div class="text"><ol>
                                        <li>To provide a developmentally appropriate curriculum</li>
                                        <br>
                                        <li>To provide a safe, caring enivironment that promotes healthy and gracious interpersonal experiences which are equally important to academic skill</li>
                                        <br>
                                        <li>To provide knowlegdeable, well-trained committed staff and educators; and</li>
                                        <br>
                                        <li>To involve parents and families as active partners.</li>
                                    </ul></div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Vision Statement</h2>
                                    </div>
                                    <div class="text">Educare Schoolhouse envisions to help build a just and humane society dedicated to the early development of the child’s positive self-concept, love for learning, respect and compassion.</div>
                                </div>
                            </div>
                            <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                                <div class="text-block">
                                    <div class="sec-title mb-30">
                                        <div class="sub-title">Statements</div>
                                        <h2>Company Value</h2>
                                    </div>
                                    <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                                    <h4><i class="flaticon-up-arrow"></i>Mission</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Vision</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                                    <h4><i class="flaticon-up-arrow"></i>Value</h4>
                                </a>
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

   
   


    <!--Main Footer-->
   <?php include "footer.php"; ?>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-right-arrow-6"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/lazyload.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.polyglot.language.switcher.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<script src="assets/js/script.js"></script>


</body>


</html>













