<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Seller</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Seller list</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">View Seller</a></li>
                    </ol>
                </div>
            </div>


<?php 

$asd = mysqli_query($con,"select * from seller_details where seller_id='".$_GET['Seller_id']."' ") or die (mysqli_error($con));
$Total = mysqli_num_rows($asd);
?>
<?php while($fetch=mysqli_fetch_array($asd)){
extract($fetch)
?>
                <div class="row">   
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h2 class="mt-3">Ration Details</h2><br>
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                             <th>Name</th>
                                             <th>Email Id</th>
                                             <th>Mobile No</th>
                                             <th>Adhar No</th>
                                             <th>Address</th>
                                             <th>Area</th>
                                             <th>Gender</th>
                                             <th>DOB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $seller_name; ?></td>
                                                <td><?php echo $seller_email; ?></td>
                                                <td><?php echo $seller_mobile_no; ?></td>
                                                <td><?php echo $seller_adhar_no; ?></td>
                                                <td><?php echo $seller_address; ?></td>
                                                <td><?php echo $seller_area; ?></td>
                                                <td><?php echo $seller_gender; ?></td>
                                                <td><?php echo $seller_dob; ?></td>



                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <a href="update_seller.php?Seller_id=<?php echo "$seller_id"; ?>" class="btn gradient-4 btn-lg border-0 btn-rounded px-5">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

</div>    
<?php include'footer.php'?>

