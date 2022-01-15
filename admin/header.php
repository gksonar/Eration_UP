<?php
session_start();
include'confi.php';
if(!(isset($_SESSION['email'])))
{
echo "<script>";
echo 'window.location.href="index.php";';
echo "</script>";
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>E-Ration Card</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="dashboard.php">
                    <b class="logo-abbr" style="color: white">A</b>
                    <!-- <span class="logo-compact"><img src="./image/logo-compact.png" alt="Admin"></span> -->
                    <span class="brand-title">
                        <center style="color: white;font-size: 20px"><b>Admin</b></center>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                 
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                    
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user" >
                        <span><?php echo $_SESSION['email'];?></span>  
                            </a>
                            
                        </li> 
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/avatar/11.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                     
                                        <li><a href="admin_profile.php"><i class="icon-user"></i> <span>Profile</span></a></li>
                                        <li><a href="change_pass.php"><i class="icon-lock"></i> <span>Change Password</span></a></li>
                                        <li><a href="logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a  href="dashboard.php" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-label">Goverment Schemes</li>
                    <li>
                        <a  href="schemes.php" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Schemes</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">User</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="registered_user.php">Registered user</a></li>
                            <li><a href="app_user.php">Verifed User</a></li>
                            <li><a href="dis_user.php">Not Verifed User</a></li>
                        </ul>
                    </li>
                   
                   <li class="nav-label">Feedback</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Feedback </span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="feedback_list.php">Feedback</a></li>
                            <!-- <li><a href="dis_user.php">Disapproved User</a></li> -->
                        </ul>
                    </li>
                    <li>

                    <li class="nav-label">Ration</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Ration</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="add_ration.php">Add Ration</a></li>
                            <li><a href="ration_list.php">Ration List</a></li>
                            <!-- <li><a href="dis_user.php">Disapproved User</a></li> -->
                        </ul>
                    </li>
                    <li>
                             <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Area</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="add_area.php"> Add Area</a></li>
                            <li><a href="area_list.php">Area List</a></li>
                            <!-- <li><a href="dis_user.php">Disapproved User</a></li> -->
                        </ul>
                    </li>
                     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text"> Seller</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="add_seller.php">Add Seller</a></li>
                            <li><a href="seller_list.php">Seller List</a></li>
                            <!-- <li><a href="dis_user.php">Disapproved User</a></li> -->
                        </ul>
                    </li>
                    
                    <li class="nav-label">Setting</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Settings</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="change_pass.php">Change Password</a></li>
                            <li><a href="admin_profile.php">View Profile</a></li> 
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>