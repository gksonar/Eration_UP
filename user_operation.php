<?php

session_start();
include'confi.php';
 ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>E-ration|card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <!-- <meta name="keywords" content="Versatile Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" /> -->
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- header -->
    <div class="main-header">
        <!-- header top -->
       <!--  <div class="header-top text-md-left text-center">
            <div class="container">
                <div class="d-md-flex justify-content-between">
                    <p class="text-capitalize">if you have any question? Call Us +12 345 678 </p>
                    <ul class="social-icons">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- //header top -->
        <!-- header-middle -->
        <!-- <div class="middle-header">
            <div class="container">
                <div class="row">
                    <div class="mx-auto d-flex">
                        <ul class="timer-wthree">
                            <li>days<span id="days"></span></li>
                            <li>Hours<span id="hours"></span></li>
                            <li>Minutes<span id="minutes"></span></li>
                            <li>Seconds<span id="seconds"></span></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div> -->
        <!-- //header middle -->
        <!-- navigation -->
        <header class="main-header" style="line-height: 3.2;">
            <nav class="navbar second navbar-expand-lg navbar-light pagescrollfix">
                <div class="container">
                    <!-- <h1>
                        <a class="navbar-brand" href="index.html">
                            <span class="fa fa-vine" aria-hidden="true"></span>ersatile
                        </a>
                    </h1> -->
                    <span class="sub-title text-white" style="margin-left: -5%;font-size: 2.5em">Online Ration Card System</span>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle"
                        aria-controls="navbarNavAltMarkup1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-toggle" id="navbarNavAltMarkup1" style="margin-right: -16%;">
                        <div class="navbar-nav secondfix ml-lg-auto">
                            <ul class="navbar-nav text-center">
                                <!-- <li class="nav-item active  mr-lg-3">
                                    <a class="nav-link" href="index.html">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>-->
                                <li class="nav-item   mr-lg-3">
                                    <a class="nav-link" href="">Hello <?php echo $_SESSION['user_email'];?></a>
                                </li> 
                                <li class="nav-item dropdown mr-lg-3">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ration Card
                                    </a>

                                        

                                    <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-link" href="apply_rc_form.php">Apply For New Ration Card</a>
                                        <a class="dropdown-item nav-link" href="">Book Ration</a>
                                        <?php
                                         $i=1;
                                          $sql=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_SESSION['user_id']."'");
                                          while($res=mysqli_fetch_assoc($sql))
                                            {
                                            $user_id=$res['user_id'];
                                           
                                          ?>
                                        <a class="dropdown-item nav-link" href="up.php?User_id=<?php echo"$user_id";?>">Update Ration Card</a>
                                        <a class="dropdown-item nav-link" href="add_delete_member.php?User_id=<?php echo"$user_id";?>">Add or Delete Member</a><?php } ?>
                                    </div> 
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user_logout.php">Logout</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <button type="button" class="btn theme-btn" data-toggle="modal" aria-pressed="false"
                                        data-target="#exampleModal">
                                        Login
                                    </button>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- navigation -->
    </div>
    <br><br>
    <div class="container">
    <div class="col-lg-12 about-text-grid">
<!--                     <h4 class="w3pvt-title">about us
                    </h4> --><br><br>
                    <span class="sub-title">Benifites Of Online Ration Card System</span>

                    <p class="mt-3">This e-Ration Shop website is to give information related to card holders and to record all transactions. <br>FPS does not open every day, nor do they keep regular hours. Even on the days that the FPS is open, ration card holders have to stand in long queues.<br> Generally FPS neither opens every day nor do they keep regular hours. This website will provide information about the day and time to report at e – Ration Shop for the food items that they can get on their ration card and several other periodic, cumulative reports , saving a lot of time and avoiding manual errors.<br> This will also send them a notification e-mail providing information about the day and time when ration shop will open. This makes the card holders not to stand in queue for long duration of time.<br>No mechanism to identify inclusion errors such as duplicate, bogus and ineligible beneficiaries.As Aadhar card is unique human identity and hence this is used in the FPS to make it foolproof. Hence duplicate, bogus and ineligible beneficiaries can be avoided.<br>Aadhaar-enabled payment system (AEPS) for ensuring better transparency and accountability.<br>Easy payment People can pay easily online through paytm , card and COD as well . It will lead to digital payment/cash-less transactions.<br>Online Complaint forum The department can take necessary action against fair price shop dealers in case of any serious complaint regarding service surface against them. License of dealers can be cancelled if reports prove allegations against them.<br>On the whole,e-Ration Shop aims to ensure that only the entitled lot receives the subsidized food material and all other routine chores of inventory planning and reporting are done with least human intervention to ensure smooth operation of the PDS scheme , people can get all the benefits of the scheme easily and retailers can also some profit other than their salary.


                    </p>
                   <!--  <p class="my-4">
                        Vestibulum volutpat non eros ut vulputate. Nunc id risus accumsan Donec mi nulla, auctor
                        nec sem a, ornare auctor mi. Sed
                        mi tortor, commodo a felis in, fringilla tincidunt nulla.</p>

                    <a href="#offer" class="text-capitalize serv_link btn bg-theme scroll">view more</a> -->
                </div>
              </div>
    <!-- //header -->
    <!-- banner -->
    <!-- <div class="banner"> -->
        <!-- <div class="container">
            <div class="banner-text">
                <div class="banner-sign">
                    <span class="fa fa-vine" aria-hidden="true"></span>
                </div>
                <h3>changing the digital landscape</h3>
                <p>Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                    aliquyam erat, At vero eos et accusam et justo duo </p>
                <div class="d-flex justify-content-center mt-sm-5 mt-3">
                    <a href="#offer" class="text-capitalize serv_link btn bg-theme2 text-dark scroll">explore now</a>
                    <a href="#" role="button" data-toggle="modal" data-target="#exampleModal1" class="serv_link btn bg-theme ml-3 w3_pvt-link-bnr scroll text-white">
                        Register Now</a>
                </div>
            </div>
        </div> -->
   <!--  </div> -->
    <!-- //banner -->
    <!-- about-->
    <!-- <section class="wthree-row py-sm-5" id="about">
        <div class="container py-lg-5">
            <div class="row abbot-main py-lg-5 py-4">
                <div class="col-lg-6 about-text-grid">
                    <h4 class="w3pvt-title">about us
                    </h4>
                    <span class="sub-title">add your caption here</span>
                    <p class="mt-3">Donec mi nulla, auctor nec sem a, ornare auctor mi. Sed mi tortor,
                        commodo a felis in, fringilla tincidunt nulla. Vestibulum
                        volutpat non eros ut vulpuuctor nec sem a, ornare auctor mi. Sed mi tortor, commodo a felis
                        in, fringilla tincidunt
                        nulla. Vestibulum volutpat non eros uttate.</p>
                    <p class="my-4">
                        Vestibulum volutpat non eros ut vulputate. Nunc id risus accumsan Donec mi nulla, auctor
                        nec sem a, ornare auctor mi. Sed
                        mi tortor, commodo a felis in, fringilla tincidunt nulla.</p>

                    <a href="#offer" class="text-capitalize serv_link btn bg-theme scroll">view more</a>
                </div>
                <div class="col-lg-6 abbot-right mt-lg-0 mt-3">
                    <span></span>
                    <img src="images/a.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section> -->
    <!-- //about -->
    <!-- about bottom -->
   <!--  <div class="abt_bottom py-lg-5 bg-theme1">
        <div class="container py-sm-4 py-3">
            <div class="clearfix">
                <h4 class="abt-text text-capitalize text-white float-md-left">versatile is unique in the world</h4>
                <a href="about.html" class="text-capitalize serv_link btn bg-theme2 float-md-right">explore now</a>
            </div>
        </div>
    </div> -->
    <!-- //about bottom -->
    <!-- offer -->
   <!--  <section class="offer-wthree py-lg-5 py-3" id="offer">
        <div class="container  py-sm-5">
            <div class="row head-row-home text-center">
                <div class="col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 my-sm-4 mt-4">
                            <div class="home-grid">
                                <span class="fa fa-info-circle" aria-hidden="true"></span>
                                <h4 class="home-title my-3">why choose us</h4>
                                <p> Pellentesque in ipsum id orci porta dapibus roined magna orem ipsum dolor sit
                                    ame.</p>
                                <a href="about.html" class="btn wthree-bnr-btn">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 my-4">
                            <div class="home-grid">
                                <span class="fa fa-connectdevelop" aria-hidden="true"></span>
                                <h4 class="home-title my-3">what we do</h4>
                                <p> Pellentesque in ipsum id orci porta dapibus roined magna orem ipsum dolor sit
                                     ame.</p>
                                <a href="error.html" class="btn wthree-bnr-btn">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 my-lg-4 mb-4 mx-auto">
                            <div class="home-grid">
                                <span class="fa fa-users" aria-hidden="true"></span>
                                <h4 class="home-title my-3">explore versatile</h4>
                                <p> Pellentesque in ipsum id orci porta dapibus roined magna orem ipsum dolor sit
                                    ame.</p>
                                <a href="portfolio.html" class="btn wthree-bnr-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-lg-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="home-grid">
                                <span class="fa fa-check-circle-o" aria-hidden="true"></span>
                                <h4 class="home-title my-3">why we are unique</h4>
                                <p> Pellentesque in ipsum id orci porta dapibus roined magna orem ipsum dolor sit
                                    ame.</p>
                                <a href="about.html" class="btn wthree-bnr-btn">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                            <div class="home-grid">
                                <span class="fa fa-vine" aria-hidden="true"></span>
                                <h4 class="home-title my-3">how we do</h4>
                                <p> Pellentesque in ipsum id orci porta dapibus roined magna orem ipsum dolor sit
                                    ame.</p>
                                <a href="error.html" class="btn wthree-bnr-btn">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mx-auto mt-lg-0 mt-4">
                            <div class="home-grid">
                                <span class="fa fa-home" aria-hidden="true"></span>
                                <h4 class="home-title my-3">become a member</h4>
                                <p> Pellentesque in ipsum id orci porta dapibus roined magna orem ipsum dolor sit
                                    ame.</p>
                                <a href="about.html" class="btn wthree-bnr-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //offer -->
    <!-- about bottom -->
    <!-- <div class="abt_bottom py-lg-5 py-4 bg-theme2 text-center">
        <div class="container py-sm-3">
            <h5 class="w3pvt-title text-muted">why we are unique? have a look.
            </h5>
            <span class="sub-title text-white">add your caption here</span>
            <div class="d-flex justify-content-center mt-lg-5 mt-3">
                <a href="portfolio.html" class="text-capitalize serv_link btn bg-theme1">our work</a>
                <a href="#" role="button" data-toggle="modal" data-target="#exampleModal1" class="serv_link btn bg-theme2 ml-3 w3_pvt-link-bnr scroll text-dark">
                    Register Now</a>
            </div>
        </div>
    </div> -->
    <!-- //about bottom -->
    <!-- services-->
    <!-- <section class="wthree-row py-sm-5 text-center position-relative" id="services">
        <div class="container">
            <div class="service-main py-lg-5 py-4">
                <div class="service-text-grid">
                    <h4 class="w3pvt-title">we offer
                    </h4>
                    <span class="sub-title">add your caption here</span>
                    <p class="my-4">
                        Vestibulum volutpat non eros ut vulputate. Nunc id risus accumsan Donec mi nulla, auctor
                        nec sem a, ornare auctor mi. Sed
                        mi tortor, commodo a felis in, fringilla tincidunt nulla.</p>

                    <a href="about.html" class="text-capitalize serv_link btn bg-theme">view more</a>
                </div>
            </div>
        </div>
        <div class="about-btm mt-lg-4">
            <div class="row no-gutters">
                <div class="col-md-4 img-grid">
                    <img src="images/s1.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-md-4 img-grid">
                    <img src="images/s4.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-md-4 img-grid">
                    <img src="images/s3.jpg" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
        <div class="container">
            <div class="py-lg-5 py-4">
                <div class="img-grid-btm">
                    <h4 class="w3pvt-title">more info
                    </h4>
                    <span class="sub-title">add your caption here</span>
                    <div class="row">
                        <div class="col-lg-7 mx-auto">
                            <p class="my-4">
                                Vestibulum volutpat non eros ut vulputate. Nunc id risus accumsan Donec mi nulla,
                                auctor
                                nec sem a, ornare auctor.</p>

                            <ul class="img-grid-list row">
                                <li class="col-sm-3 col-6">
                                    <span class="fa fa-ravelry" aria-hidden="true"></span>
                                    <h5>some text</h5>
                                </li>
                                <li class="col-sm-3 col-6">
                                    <span class="fa fa-language" aria-hidden="true"></span>
                                    <h5>some text</h5>
                                </li>
                                <li class="col-sm-3 col-6">
                                    <span class="fa fa-wpexplorer" aria-hidden="true"></span>
                                    <h5>some text</h5>
                                </li>
                                <li class="col-sm-3 col-6">
                                    <span class="fa fa-houzz" aria-hidden="true"></span>
                                    <h5>some text</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- //services -->
    <!-- features-->
    <!-- <section class="wthree-row py-sm-5 bg-theme1">
        <div class="container py-lg-5">
            <div class="row abbot-main py-lg-5 py-4 f-main" id="features">
                <div class="col-lg-5 abbot-right mt-lg-0 mt-4">
                    <span></span>
                    <img src="images/testi.jpg" class="img-fluid rounded" alt="" />
                </div>
                <div class="offset-lg-1 col-lg-6 about-text-grid">
                    <h4 class="w3pvt-title text-white"> features
                    </h4>
                    <span class="sub-title text-white">add your caption here</span>
                    <p class="mt-3 text-white">Donec mi nulla, auctor nec sem a, ornare auctor mi. Sed mi tortor,
                        commodo a felis in, fringilla tincidunt nulla. Vestibulum
                        volutpat nona.</p>
                    <ul class="my-4 list-head">
                        <li>
                            <span class="fa fa-check-circle-o mr-3" aria-hidden="true"></span>Cras justo odio</li>
                        <li>
                            <span class="fa fa-check-circle-o mr-3"></span>Dapibus ac facilisis in</li>
                        <li>
                            <span class="fa fa-check-circle-o mr-3"></span>Morbi leo risus</li>
                        <li>
                            <span class="fa fa-check-circle-o mr-3"></span>Porta ac consectetur ac</li>
                        <li>
                            <i class="fa fa-check-circle-o  mr-3"></i>Vestibulum at eros</li>
                    </ul>

                    <a href="contact.html" class="text-capitalize serv_link btn bg-theme2">contact us</a>
                </div>

            </div>
        </div>
    </section> -->
    <!-- //features -->
    <!-- footer top --><br><br><br><br><br><br>
    <div class="footer-top py-lg-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-logo mb-lg-0 mb-4">
                    <h2>
                        <a href="index.html"> <span class="fa fa-vine" aria-hidden="true"></span>ersatile</a>
                    </h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum
                        has
                        been
                        the
                        industry's standard.</p>
                    <div class="social-icons">
                        <h5 class="footer-top-title">stay connected</h5>
                        <ul class="social-icons">
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="footer-top-title">latest posts</h5>
                    <ul class="post-links">
                        <li>
                            <a href="#">
                                Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                            </a>
                            <span class="fa fa-clock-o mr-3"></span> 3 hrs ago
                        </li>
                        <li>
                            <a href="#">
                                Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                            </a>
                            <span class="fa fa-clock-o mr-3"></span> 10 hrs ago
                        </li>
                        <li>
                            <a href="#">
                                Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.
                            </a>
                            <span class="fa fa-clock-o mr-3"></span> 22 hrs ago

                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="footer-top-title">contact information</h5>
                    <ul class="d-flex flex-column">
                        <li>
                            <span class="fa fa-home mr-3"></span>
                            <p class="d-inline">+4667 Woodland, California 916-983-6577.</p>
                        </li>
                        <li class="my-3">
                            <span class="fa fa-envelope-open mr-3"></span>
                            <a href="mailto:example@email.com" class="text-secondary">info@example.com</a>
                        </li>
                        <li>
                            <span class="fa fa-phone mr-3"></span>
                            <p class="d-inline">+456 123 7890</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //footer top -->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="cpy-right text-center">
                <p>© 2018 Versatile. All rights reserved | Design by
                    <a href="http://w3layouts.com"> W3layouts.</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->
    <!-- Login modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme2">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-theme1">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Username</label>
                            <input type="text" class="form-control border" placeholder="john mercy " name="Name" id="recipient-name"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label text-white">Password</label>
                            <input type="password" class="form-control border" placeholder="****" name="Password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control border text-white bg-theme1" value="Login">
                        </div>

                        <div class="row sub-w3l my-3">
                            <div class="col sub-w3layouts">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-white">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right text-dark">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center text-white">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-theme1 font-weight-bold">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //Login modal -->
    <!-- Register modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-theme2">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  bg-theme1">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Username</label>
                            <input type="text" class="form-control border" placeholder="john mercy " name="Name" id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label text-white">Email</label>
                            <input type="email" class="form-control border" placeholder="username@email.com" name="Email"
                                id="recipient-email" required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label text-white">Password</label>
                            <input type="password" class="form-control border" placeholder="****" name="Password" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label text-white">Confirm Password</label>
                            <input type="password" class="form-control border" placeholder="****" name="Confirm Password"
                                id="password2" required="">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-w3layouts">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3 text-white">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control bg-theme1 text-white" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- // Register modal -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- fixed-scroll-nav-js -->
    <script src="js/scrolling-nav.js"></script>
    <script>
        $(window).scroll(function () {
            if ($(document).scrollTop() > 70) {
                $('nav.pagescrollfix,nav.RWDpagescrollfix').addClass('shrink');
            } else {
                $('nav.pagescrollfix,nav.RWDpagescrollfix').removeClass('shrink');
            }
        });
    </script>
    <!-- //fixed-scroll-nav-js -->
    <!-- count down -->
    <script src="js/count-down.js"></script>
    <!-- //count down -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>



