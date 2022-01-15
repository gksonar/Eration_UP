<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Area</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Ration list</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">View Area</a></li>
                    </ol>
                </div>
            </div>


<?php 

$asd = mysqli_query($con,"select * from area where area_id='".$_GET['Area_id']."' ") or die (mysqli_error($con));
$Total = mysqli_num_rows($asd);
?>
<?php while($fetch=mysqli_fetch_array($asd)){
extract($fetch)
?>
                <div class="row">   
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h2 class="mt-3">User Request for Ration</h2><br>
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                             <th>Ration Number</th>
                                             <th>Ration Product name</th>
                                             <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $area_name; ?></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <a href="update_area.php" class="btn gradient-4 btn-lg border-0 btn-rounded px-5">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

</div>    
<?php include'footer.php'?>

