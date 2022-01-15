<?php include'header.php'?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">User View</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
<?php 

$asd = mysqli_query($con,"select * from user_ration_form_details where user_id='".$_GET['User_id']."' ") or die (mysqli_error($con));
 $Total = mysqli_num_rows($asd);
?>
<?php while($fetch=mysqli_fetch_array($asd)){
            extract($fetch)
            ?>
            <div class="container-fluid">
                <div class="row">
                	<div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                               <!--  <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="images/avatar/11.png" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0"><?php echo $user_local_name; ?></h3>
                                        <p class="text-muted mb-0">Canada</p>
                                    </div>
                                </div> -->
                                
                                <!-- <div class="row mb-5">
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                            <h3 class="mb-0">263</h3>
                                            <p class="text-muted px-4">Following</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                                            <h3 class="mb-0">263</h3>
                                            <p class="text-muted">Followers</p>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-danger px-5">Follow Now</button>
                                    </div>
                                </div> -->

                                <h3 align="center" style="font-size: 2em">User Info Details</h3>
                                 <div class="media-body">
                                        <h4 class="mb-0"><?php echo $user_local_name; ?></h4><br>
                                        <!-- <p class="text-muted mb-0">Canada</p> -->
                                    </div>
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Adhar Name</strong> <span><?php echo $user_adhar_name;?></span></li>
                                    <li><strong class="text-dark mr-4">Adhar No</strong> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user_adhar_no;?></span></li>
                                    <li><strong class="text-dark mr-4">Email Id</strong> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user_email;?></span></li>
                                    <li><strong class="text-dark mr-4">Mobile No</strong> <span>&nbsp;&nbsp;&nbsp;<?php echo $user_mobile_no;?></span></li>
                                    <li><strong class="text-dark mr-4">Gender</strong> <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user_gender;?></span></li>
                                    <li><strong class="text-dark mr-4">BirthDate</strong> <span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user_dob;?></span></li>
                                </ul>
                                <div class="col-12 text-center">
                                        <a href="view_user_ration_details.php?User_id=<?php echo "$user_id";?>"><button class="btn btn-danger px-5">Ration Details</button></a>
                                </div>
                            </div>
                        </div>  
                    </div>
<?php } ?>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
 <?php include'footer.php'?>