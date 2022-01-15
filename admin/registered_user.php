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
                                <div>
                            <div class="input-group input-group-sm" style="width: 20%;margin-left: 73%">
                                  <input type="text" id="myInput" name="table_search" class="form-control pull-right" placeholder="Search">
                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" style="line-height: 1.8;"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                            </div><br>

                                <h4 class="card-title">Registered User Details</h4>
                                <div class="table-responsive">
                                    <table class="table  table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>User Name</th>
                                                <th>User Adhar Number</th>
                                                <th>User EmailID</th>
                                                <th>User DOB</th>
                                                <th>Verifiy The Ration Card</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"select * from user_ration_form_details");
                                          while($res=mysqli_fetch_assoc($sql))
                                          {
                                            $user_id=$res['user_id'];
                                          ?>
                                        <tbody id="myTable">
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $res['user_local_name']; ?></td>
                                                <td><?php echo $res['user_adhar_no']; ?></td>
                                                <td><?php echo $res['user_email']; ?></td>
                                                <td><?php echo $res['user_dob']; ?></td>
                                                <td><center><a href="userapproved.php?User_id=<?php echo "$user_id";?>"> <i class="fa fa-check" aria-hidden="true"style="color: green"></i></a>&nbsp;&nbsp;&nbsp;
                                                <a href="userdisapproved.php?User_id=<?php echo "$user_id";?>"><i class="fa fa-times" aria-hidden="true" style="color: black"></a></i>&nbsp;&nbsp;&nbsp;<a href="view_user.php?User_id=<?php echo "$user_id";?>"><i class="fa fa-eye" aria-hidden="true" style="color: blue"></a></i></center></td>
                                                <td><?php echo $res['user_status']; ?></td>
                                                <td>
                                                <center><a href="delete_user.php?User_id=<?php echo"$user_id";?>"><i class="fa fa-trash-o" aria-hidden="true" style="color: red"></a></i></center>
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
   <?php include'footer.php'?>