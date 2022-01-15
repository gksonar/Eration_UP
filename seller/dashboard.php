<?php include'header.php' ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <br>
                    <center><h2>Online Ration Booking System</h2></center>    
            <div class="container-fluid mt-3">
                <div class="row">

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                             <div class="card-body">
                                 <?php 
                                 $count = 1;
                                 $asd = mysqli_query($con,"select u.*,s.* from user_ration_form_details u,seller_details s where s.seller_area=u.user_area and s.seller_id='".$_SESSION['seller_id']."' ") or die (mysqli_error($con));
                                 $Total = mysqli_num_rows($asd);
                                 ?>
                                <h3 class="card-title text-white">My User</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $Total; ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                   
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
       <?php include'footer.php' ?> 
        
       