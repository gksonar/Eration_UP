<?php include'header.php'?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Reg_user</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title" align="center">Registered User Details</h2>
                                <div>
                            <div class="input-group input-group-sm" style="width: 20%;margin-left: 73%">
                                  <input type="text" id="myInput" name="table_search" class="form-control pull-right" placeholder="Search">
                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" style="line-height: 1.8;"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                            </div><br>

                                <!-- <h4 class="card-title" align="center">Area:</h4> -->
                                <div class="table-responsive">
                                    <table class="table  table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th> Name</th>
                                                <th> Adhar No</th>
                                                <th>EmailID</th>
                                                <th>Mobile No</th>
                                                <th>DateBirth</th>
                                                <th>Area</th>
                                                <th>Gender</th>
                                                <th>Status</th>
                                                <!-- <th>Details</th> -->
                                            </tr>
                                        </thead>
                                        <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"select u.*,s.* from user_ration_form_details u,seller_details s where s.seller_area=u.user_area and s.seller_id='".$_SESSION['seller_id']."'");
                                          
                                          while($res=mysqli_fetch_array($sql))
                                          {
                                            $user_id=$res['user_id'];
                                          ?>
                                        <tbody id="myTable">
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $res['user_local_name']; ?></td>
                                                <td><?php echo $res['user_adhar_no']; ?></td>
                                                <td><?php echo $res['user_email']; ?></td>
                                                <td><?php echo $res['user_mobile_no']; ?></td>
                                                <td><?php echo $res['user_dob']; ?></td>
                                                <td><?php echo $res['user_dob']; ?></td>
                                                <td><?php echo $res['user_area']; ?></td>
                                                <td><?php echo $res['user_status']; ?></td>
                                                <td><!-- <a href="userapproved.php?User_id=<?php echo "$user_id";?>"> <i class="fa fa-thumbs-up" aria-hidden="true"></a></i>&nbsp;&nbsp;&nbsp;
                                                <a href="userdisapproved.php?User_id=<?php echo "$user_id";?>"><i class="fa fa-thumbs-down" aria-hidden="true"></a></i>&nbsp;&nbsp;&nbsp; -->
                                                <!-- <a href="view_user.php?User_id=<?php echo "$user_id";?>"><i class="fa fa-eye" aria-hidden="true"style="color: blue"></a></i> -->&nbsp;&nbsp;&nbsp;<!-- 
                                                <a href="delete_user.php?User_id=<?php echo"$user_id";?>"><i class="fa fa-trash-o" aria-hidden="true"></a></i> -->
                                                </td>
                                                
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
        
        
   <?php include'footer.php'?>