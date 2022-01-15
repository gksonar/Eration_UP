<?php include'header.php'?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Ration Request</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Ration Booking List</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="card">
                            <div class="card-body">
                                <div>
                            <div class="input-group input-group-sm" style="width: 23%;margin-left: 75%">
                                  <input type="text" id="myInput" name="table_search" class="form-control pull-right" placeholder="Search">
                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" style="line-height: 1.8;"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                            </div><br>

                                <h4 align="center" class="card-title">Request for Buy Ration</h4><br>
                                <div class="table-responsive">
                                    <table class="table  table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Ration Number</th>
                                                <th>Ration Holder Name</th>
                                                <th>Requested Ration</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"select ur.*,ub.*,s.* from user_ration_form_details ur,user_ration_booking ub,seller_details s where ub.user_id=ur.user_id and s.seller_area=ur.user_area group by ub.user_id");
                                          while($res=mysqli_fetch_array($sql))
                                          {
                                            $user_id=$res['user_id'];
                                          ?>
                                        <tbody id="myTable">    
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $res['ration_number']; ?></td>
                                                <td><?php echo $res['head_of_family_adhar_name']; ?></td>
                                                <td><center><a href="view_user_requested_ration.php?Request_booking_id=<?php echo "$user_id";?>"><i class="fa fa-eye" aria-hidden="true"
                                                    style="color: blue"></a></i></center></td>


                                                <?php if($res['booking_status']=='Accepted'){ ?>
                                                <td><a style="color: green">Booking Confirm</a> </td><?PHP  } else { ?>
                                                <td><a "color: yellow" href="bookapproved.php?Request_booking_id=<?php echo "$user_id";?>">Confirm</a><a "color: red" href="bookdisapproved.php?Request_booking_id=<?php echo "$user_id";?>">Cancel</a></td> <?php } ?>
                                               <!--  <td><center><a href="bookapproved.php?Request_booking_id=<?php// echo "$user_id";?>">Confirm</a><a href="bookdisapproved.php?Request_booking_id=<?php echo "$user_id";?>">Cancel</a>
                                                </center></td> -->
                                                
                                            </tr>

                                            <?php }?>
                                        </tbody>
                                    
                                    </table>
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
        
        
   <?php include'footer1.php'?>