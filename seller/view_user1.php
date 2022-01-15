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
                                <h4 class="card-title">Registered User Details</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>User Name</th>
                                                <th>User Adhar Number</th>
                                                <th>User EmailID</th>
                                                <th>User DOB</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                         <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"select * from user_ration_form_details");
                                          while($res=mysqli_fetch_assoc($sql))
                                          {
                                            $user_id=$res['user_id'];
                                          ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $res['user_local_name']; ?></td>
                                                <td><?php echo $res['user_adhar_no']; ?></td>
                                                <td><?php echo $res['user_email']; ?></td>
                                                <td><?php echo $res['user_dob']; ?></td>
                                                <td><a href="userapproved.php?User_id=<?php echo "$user_id";?>"> <i class="fa fa-thumbs-up" aria-hidden="true"></a></i>&nbsp;&nbsp;&nbsp;
                                                <a href="userdisapproved.php?User_id=<?php echo "$user_id";?>"><i class="fa fa-thumbs-down" aria-hidden="true"></a></i>&nbsp;&nbsp;&nbsp;
                                                <a href="view_user.php?User_id=<?php echo "$user_id";?>"><i class="fa fa-eye" aria-hidden="true"></a></i>&nbsp;&nbsp;&nbsp;
                                                <a href="delete_user.php?User_id=<?php echo"$user_id";?>"><i class="fa fa-trash-o" aria-hidden="true"></a></i>
                                                </td>
                                                
                                            </tr>
                                            <?php } ?>
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        
                                        </tfoot>
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
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>