<?php include'header.php'?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Seller</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Seller</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

<?php
$i=1;
$sql=mysqli_query($con,"select * from seller_details where seller_id='".$_GET['Seller_id']."'");
while($res=mysqli_fetch_array($sql))
{

?>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h3 align="center">Update Seller</h3><br>
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Seller Name<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="seller_name" 
                                                value="<?php echo $res['seller_name']?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="email" class="form-control"name="seller_email" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control" name="seller_password"
                                                value="<?php echo $res['seller_password']?>">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                            <textarea class="form-control" name="seller_address" rows="5" >
                                                <?php echo $res['seller_address']?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-skill">Select Area <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <select class="form-control" id="val-skill" name="seller_area">
                                                    <option value="">Please select</option>
                                                     <?php
                                                    $query = mysqli_query($con,"select * from area order by area_name asc") or die(mysqli_error($con));

                                                    while ($fetch1=mysqli_fetch_array($query)) 
                                                    {
                                                        extract($fetch1);
                                                    ?>
                                                    <option value="<?php echo $fetch1['area_name'];?>"<?php if ($fetch1['area_name']==$res['seller_area']){echo "selected";} ?>><?php echo $fetch1['area_name'];?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Adhar Number<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="seller_adhar_no" value="<?php echo $res['seller_adhar_no']?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Mobile Number<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="seller_mobile_no" value="<?php echo $res['seller_mobile_no']?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Gender <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="seller_gender">
                                                    <option value=" ">Please select</option>
                                                    <option value="Male"<?php if ($res['seller_gender']=="Male"){echo "selected";} ?>>Male</option>
                                                    <option value="Female"<?php if ($res['seller_gender']=="Female"){echo "selected";} ?>>Female</option>
                                                    <option value="Transgender"<?php if ($res['seller_gender']=="Transgender"){echo "selected";} ?>>Transgender</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Date of Birth <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="date" class="form-control" name="seller_dob" value="<?php echo $res['seller_dob']?>">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-range">Range [1, 5] <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label"><a href="#">Terms &amp; Conditions</a>  <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                    <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1"> <span class="css-control-indicator"></span> I agree to the terms</label>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <div class="col-lg-12 ml-auto">
                                               <center><button type="submit" name="update" class="btn btn-info">Update</button>
                                                <a href="seller_list.php"><button type="button" class="btn btn-danger">Cancel</button></a></center>
                                            </div>
                                        </div>
                                    </form>
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
    <?php } ?>
<?php include'footer.php'?>

<?php
if (isset($_POST['update'])) 
{
extract($_POST);
echo $asd="update seller_details set
seller_name='".$seller_name."',
seller_password='".$seller_password."',
seller_address='".$seller_address."',
seller_area='".$seller_area."',
seller_adhar_no='".$seller_adhar_no."',
seller_mobile_no='".$seller_mobile_no."',
seller_gender='".$seller_gender."',
seller_dob='".$seller_dob."'
where seller_id='".$_GET['Seller_id']."'";


echo $up = mysqli_query($con,$asd) or die(mysql_error());
if($up)
{
echo '<script type="text/javascript">';
echo " alert('Seller Updated');";
echo 'window.location.href = "seller_list.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Update Again.');";
echo 'window.location.href = "add_seller.php";';
echo '</script>';
}

}
?>