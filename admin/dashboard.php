<?php include'header.php' ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
                          <center><h2>Online Ration Card Generation And Booking System</h2></center>    
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                 <?php 
                                 $count = 1;
                                 $asd = mysqli_query($con,"select * from user_ration_form_details") or die (mysqli_error($con));
                                 $Total = mysqli_num_rows($asd);
                                 ?>
                                <h3 class="card-title text-white">Registered User</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $Total; ?></h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <?php 
                                 $count = 1;
                                 $asd = mysqli_query($con,"select * from ration_details") or die (mysqli_error($con));
                                 $Total1 = mysqli_num_rows($asd);
                                 ?>
                                <h3 class="card-title text-white">Ration Product</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $Total1; ?></h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-product"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                 <?php 
                                 $count = 1;
                                 $asd = mysqli_query($con,"select * from area") or die (mysqli_error($con));
                                 $Total2 = mysqli_num_rows($asd);
                                 ?>
                                <h3 class="card-title text-white">Area</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $Total2; ?></h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <?php 
                                 $count = 1;
                                 $asd = mysqli_query($con,"select * from seller_details") or die (mysqli_error($con));
                                 $Total3 = mysqli_num_rows($asd);
                                 ?>
                                <h3 class="card-title text-white">Seller</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $Total3; ?></h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-"></i></span>
                            </div>
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
        
       