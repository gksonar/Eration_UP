<?php include'header.php'?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Reg User</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Verified User</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
<?php
 $count = 1;
$asd=mysqli_query($con,"select * from user_ration_form_details where user_status='Verified'") or die(mysqli_error($con));
 $Total = mysqli_num_rows($asd);
 // echo "<br>";
 // echo "Total Records:- " .$Total;
 // echo "<br>";
?>
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
                                <h4 class="card-title">Verified User</h4>
                                <div class="table-responsive">
                                    <table class="table  table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>User Name</th>
                                                <th>User Adhar Number</th>
                                                <th>User EmailID</th>
                                                <th>User DOB</th>
                                                <th>View Ration Details</th>
                                            </tr>
                                        </thead>
                                        <?php while($fetch=mysqli_fetch_array($asd))
                              {

                                        extract($fetch)
                                        ?>
                                        <tbody id="myTable">
                                            <tr>
                                                <td><?php echo $count++; ?></td>
                                                <td><?php echo $user_local_name; ?></td>
                                                <td><?php echo $user_adhar_no; ?></td>
                                                <td><?php echo $user_email; ?></td>
                                                <td><?php echo $user_dob; ?></td>
                                                <td><a href="view_user.php?User_id=<?php echo "$user_id";?>"><i class="fa fa-eye" aria-hidden="true" style="color: blue"></a></i></td>
                                                
                                            </tr>

                                            <?php }?>
                                        </tbody>
                                    
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot> -->
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