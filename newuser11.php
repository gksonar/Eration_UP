<?php

session_start();
include'confi.php';
if(!(isset($_SESSION['user_email'])))
{
echo "<script>";
echo 'window.location.href="index.php";';
echo "</script>";
}
 ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>E-Ration Card|User Profile</title>
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
    <link rel="stylesheet" type="text/css" href="profile.css" rel="stylesheet">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                    <span class="sub-title text-white">Online Ration Card System</span>
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

                                <li class="nav-item   mr-lg-3">
                                    <a class="nav-link" href="verify.php">Verify</a>
                                </li> 

                                <li class="nav-item dropdown mr-lg-3">

                                     
                                <?php
                                         $i=1;
                                          $sql=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_SESSION['user_id']."'");
                                           $count = mysqli_num_rows($sql);
                                          while($res=mysqli_fetch_assoc($sql))
                                            {
                                            $user_id=$res['user_id'];
                                          ?>
                                          <?php if($res['user_status']=='register'){ ?>

                                       <li class="nav-item">

                                </li>
                                   
                                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ration Card
                                    </a>
                                    <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown" style="width: 310px">
                                       <?php if($res['apply_rc_id']=='apply'){ ?>
                                        
                                        <a class="dropdown-item nav-link" href="schedulelist.php?User_id=<?php echo"$user_id";?>">Schedule</a>

                                        <a class="dropdown-item nav-link" href="change_password.php?User_id=<?php echo"$user_id";?>">Change Password</a>
                                        
                                        <?PHP  } elseif($res['user_status']=='Verified') { ?>
                                            
                                        <a class="dropdown-item nav-link" href="book_ration_form.php?User_id=<?php echo"$user_id";?>">Book Ration</a> 
                                        <a class="dropdown-item nav-link" href="add_delete_member.php?User_id=<?php echo"$user_id";?>">Add or Delete Member</a> 
 
                                        <a class="dropdown-item nav-link" href="schedulelist.php?User_id=<?php echo"$user_id";?>">Schedule</a>
 
                                        <a class="dropdown-item nav-link" href="change_password.php?User_id=<?php echo"$user_id";?>">Change Password</a> <?php } 
                                        else {?>

                                        <a class="dropdown-item nav-link" href="apply_rc_form.php">Apply For New Ration Card</a>

                                        <a class="dropdown-item nav-link" href="schedulelist.php?User_id=<?php echo"$user_id";?>">Schedule</a>

                                        <a class="dropdown-item nav-link" href="change_password.php?User_id=<?php echo"$user_id";?>">Change Password</a> <?php } ?>  
                                        
                                        <?php }?>
                                        
                                    </div> 
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user_logout.php">Logout</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- navigation -->
    </div>


<br><br>
 <?php
// $i=1;
$sql=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_SESSION['user_id']."'");
// $count = mysqli_num_rows($sql);
while($res=mysqli_fetch_assoc($sql))
{
    ?>
<h4 align="center" class="w3pvt-title"> My Profile
</h4>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                           <img src="images/<?php echo $res['profile_photo']?>" style="height:200px; width:200px" />
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                   <!--  <h5>
                                       <?php //echo $res['user_local_name']?>
                                    </h5> -->
                                    <h6>
                                        
                                    </h6><br><br>
                                    <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                               <!--  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                         <button type="button" class="btn btn-primary" style="color: #3b67b3;" data-toggle="modal" aria-pressed="false" data-target="#exampleModal"><b style="color: white">Edit Profile</b></button>
                        <!-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                       <!--  <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div> -->
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Adhar Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['user_adhar_no']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['user_email']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['user_mobile_no']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['user_gender']?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Birth Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $res['user_dob']?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
<?php include'footer.php'?>
<!-- Register modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
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
                    <form  method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Name</label>
                            <input type="text" class="form-control border" value="<?php echo $res['user_local_name']?>" name="user_local_name" id="recipient-rname" required="" pattern="[a-zA-Z][a-zA-Z ]+">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label text-white">Email</label>
                            <input type="email" class="form-control border" value="<?php echo $res['user_email']?>" name="user_email" id="recipient-email" readonly="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Adhar Number</label>
                            <input type="text" class="form-control border" maxlength="12" value="<?php echo $res['user_adhar_no']?>" name="user_adhar_no" id="recipient-rname" required="" pattern="[0-9]+">
                        </div>
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Mobile Number</label>
                            <input type="text" class="form-control border" maxlength="10" value="<?php echo $res['user_mobile_no']?>" name="user_mobile_no" id="recipient-rname" required="" pattern="[789][0-9]{9}">
                        </div>
                         <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Date Of Birth</label>
                            <input type="date" value="<?php echo $res['user_dob']?>" class="form-control border" name="user_dob" id="recipient-rname"
                                required="">
                        </div>
                        
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Gender</label>
                            <select style="height: 38px" required="required" class="form-control border" name="user_gender">
                            <option value=" ">--Select--</option>
                            <option value="Male" <?php if ($res['user_gender']=="Male"){echo "selected";} ?>>Male</option>
                            <option value="Female" <?php if ($res['user_gender']=="Female"){echo "selected";} ?>>Female</option>
                            <option value="Transgender" <?php if ($res['user_gender']=="Transgender"){echo "selected";} ?>>Transgender</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Profile Photo</label>
                            <div class="preview_box">
                            <?php 
                            if($res['profile_photo']=="")
                            {
                            ?>
                            <img id="preview_img" src="images/No-image-full.jpg" height="100" width="100"/>
                            <?php }
                            else
                            {
                            ?>
                            <img id="preview_img" src="images/<?php echo $res['profile_photo']?>" height="100" width="100" />
                            <?php } ?>
                            <input type="file" id="image" name="profile_photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
                            </div> 
                        </div>
                         <script type="text/javascript"> //for image1
                $(document).ready(function(){
                    //Image file input change event
                    $("#image").change(function(){
                        readImageData(this);//Call image read and render function
                    });
                });
                 
                function readImageData(imgData){
                    if (imgData.files && imgData.files[0]) {
                        var readerObj = new FileReader();
                        
                        readerObj.onload = function (element) {
                            $('#preview_img').attr('src', element.target.result);
                        }
                        
                        readerObj.readAsDataURL(imgData.files[0]);
                    }
                }
            </script> 

                        <div class="right-w3l">
                            <input type="submit" name="update" class="form-control bg-theme1 text-white" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <?php } ?>
    <?php 
 
 include'confi.php';
if (isset($_POST['update'])) 
{
extract($_POST);
$name=$_FILES['profile_photo']['name'];
  $type=$_FILES['profile_photo']['type'];
  $size=$_FILES['profile_photo']['size'];
  $temp=$_FILES['profile_photo']['tmp_name'];
  if($name){
  
            $upload= "images/";
            $imgExt=strtolower(pathinfo($name, PATHINFO_EXTENSION));
            $valid_ext= array('jpg','png','jpeg' );
            $profile_photo= rand(1000,1000000).".".$imgExt;
            move_uploaded_file($temp,$upload.$profile_photo);
  }
  else
    {
      $profile_photo=$fetch['profile_photo'];
    }

$asd="update user_ration_form_details set
 user_local_name='".$user_local_name."',
  user_adhar_no='".$user_adhar_no."',
  user_mobile_no='".$user_mobile_no."',
 user_dob='".$user_dob."',
 user_gender='".$user_gender."',
 profile_photo='".$profile_photo."' 
where user_id='".$_SESSION['user_id']."'";

$up= mysqli_query($con,$asd )or die(mysql_error());
if($up)
{
echo '<script type="text/javascript">';
echo " alert('update Successfully');";
echo 'window.location.href = "user_opp.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Fill Again The Registration Form.');";
// echo 'window.location.href = "user_registration.php";';
echo '</script>';
}

}
?>
    <!-- // Register modal -->
