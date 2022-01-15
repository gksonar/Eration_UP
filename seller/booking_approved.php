<?php include'header.php'?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Reg User</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Approved User</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
<?php
 $i = 1;
$asd=mysqli_query($con,"select * from user_ration_booking where booking_status='Accepted'") or die(mysqli_error($con));
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
                                <h4 class="card-title">Approved User</h4>
                                <div class="table-responsive">
                                    <table class="table  table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>user_id</th>
                                                <th>Ration Name</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php while($fetch=mysqli_fetch_array($asd))
                              {

                                        extract($fetch)
                                        ?>
                                        <tbody id="myTable">
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $fetch['user_id']; ?></td> 
                                                <td><?php echo $fetch['ration_product_name']; ?></td>
                                                <td><?php echo $fetch['ration_product_quantity']; ?></td>
                                                <td><?php echo $fetch['booking_status']; ?></td>
                                                
                                                <td>

                                                <a href="bookdisapproved.php?Request_booking_id=<?php echo "$user_id";?>"><i class="fa fa-thumbs-down" aria-hidden="true" style="color: black"></a></i>
                                               </td>
                                                
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
        
        
       <?php include'footer1.php'?>