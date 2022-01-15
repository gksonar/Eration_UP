<?php include'header.php'?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Ration Request</a></li>
                        <li class="breadcrumb-item"><a href="ration_request_list.php">Ration Booking List</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">User Requested Ration</a></li>

                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                	<div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                
                                <h3 align="center" style="font-size: 2em">Requested Ration</h3><br>
                                <div class="media-body">
                                <?php
            $sql=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_GET['Request_booking_id']."'");
            while($res=mysqli_fetch_assoc($sql))
            {

            ?>
                                        <h4 align="center" class="mb-0">Ration Number:<?php echo $res['ration_number']?></h4<?php } ?>><br>
                                        <!-- <p class="text-muted mb-0">Canada</p> -->
                                    </div>
                             <div class="col-12 text-center">

                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle">
                                        <thead>
                                            <tr>
                                                <th style="width: 13%" scope="col">Sr.No</th>
                                                <th scope="col">Ration Product Name</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                         $i=1;
                                        $asd = mysqli_query($con,"select b.*,r.* from user_ration_booking b,ration_details r where r.ration_id=b.ration_product_name and b.user_id='".$_GET['Request_booking_id']."'") or die (mysqli_error($con));
                                         // $Total = mysqli_num_rows($asd);
                                        ?>
                                        <?php while($fetch=mysqli_fetch_array($asd)){
                                                    extract($fetch)
                                                    ?>
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $fetch['ration_name']; ?></td>
                                                <td><?php echo $fetch['ration_product_quantity']; ?></td>
                                                <td><?php echo $fetch['ration_product_total']; ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
 <a href="sellration.php?User_id=<?php echo "$user_id";?>"><button class="btn btn-danger px-5">Schedule Allocate</button></a>
 <a href="sellrationinal.php?User_id=<?php echo "$user_id";?>"><button class="btn btn-danger px-5">Sell Ration</button></a>
                                </div>
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
        
 <?php include'footer.php'?>