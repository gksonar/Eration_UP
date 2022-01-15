<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Area</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">View Area</a></li>
                    </ol>
                </div>
            </div>



<div class="row">
 <!-- <div class="col-lg-1"></div> -->
   <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group input-group-sm" style="width: 20%;margin-left: 77%">
                                  <input type="text" id="myInput" name="table_search" class="form-control pull-right" placeholder="Search">
                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" style="line-height: 1.8;"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                                <h3 align="center">Seller List</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle">
                                        <thead>
                                            <tr>
                                                <th style="width: 13%" scope="col">Sr.No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Mobile Number</th>
                                                <th scope="col">Adhar Number</th>
                                                <th scope="col">Area</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">DOB</th>
                                                <th style="width: 10%;text-align: center;" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                        <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"select * from seller_details");
                                          while($res=mysqli_fetch_assoc($sql))
                                          {
                                            $seller_id=$res['seller_id'];
                                          ?>
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $res['seller_name']; ?></td>
                                                <td><?php echo $res['seller_email']; ?></td>
                                                <td><?php echo $res['seller_mobile_no']; ?></td>
                                                <td><?php echo $res['seller_adhar_no']; ?></td>
                                                <td><?php echo $res['seller_area']; ?></td>
                                                <td><?php echo $res['seller_gender']; ?></td>
                                                <td><?php echo $res['seller_dob']; ?></td>
                                                <td>
                                                    <span>
                                                        <a href="update_seller.php?Seller_id=<?php echo "$seller_id"; ?>" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-pencil color-muted m-r-5" style="margin-left: 0%"></i> </a>&nbsp;

                                                        <a href="delete_seller.php?Seller_id=<?php echo "$seller_id"; ?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger" style="margin-left: 0%"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>    
<?php include'footer.php'?>

