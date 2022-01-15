<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Area</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Area</a></li>
                    </ol>
                </div>
            </div>
<div class="row">
 <div class="col-lg-3"></div>
   <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h3 align="center">Add Area</h3><br>
            <div class="basic-form">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Add Area</label>
                        <input type="text" name="area_name" class="form-control">
                    </div>
                  
                    <center><button type="submit" name="submit" class="btn btn-primary">Add</button>
                   <a href="area_list.php"><button type="button" class="btn btn-danger">Cancel</button></a></center>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>    
<?php include'footer.php'?>

<?php
if (isset($_POST['submit'])) 
{
extract($_POST);
$area_name=$area_name;
        $clg=mysqli_query($con,"select * from area where area_name='".$area_name."' ") or die(mysqli_error());
        $row11=mysqli_fetch_array($clg);
        if(mysqli_num_rows($clg)>0)
         {
            echo '<script type="text/javascript">';
            echo " alert('Area Already Exists');";
            echo 'window.location.href = "add_area.php";';
            echo '</script>';
         }

 else
 {
echo $asd = mysqli_query($con,"insert into area(area_name) values ('$area_name')") or die(mysql_error());
if($asd)
{
echo '<script type="text/javascript">';
echo " alert('Area Added');";
echo 'window.location.href = "area_list.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Add again.');";
echo 'window.location.href = "add_area.php";';
echo '</script>';
}
}
}
?>






<!-- <?php 
 
 // include'confi.php';
// if (isset($_POST['submit'])) 
{
// extract($_POST);
// echo $asd = mysqli_query($con,"insert into user_ration_form_details(user_local_name,user_adhar_name,user_adhar_no,user_mobile_no,user_email,user_password,user_dob,user_gender) values ('$user_local_name','$user_adhar_name','$user_adhar_no','$user_mobile_no','$user_email','$user_password','$user_dob','$user_gender')") or die(mysql_error());
// if($asd)
{
// echo '<script type="text/javascript">';
// echo " alert('Registered Successfully');";
// echo 'window.location.href = "user_login.php";';
// echo '</script>';
}  
// else
{
// echo '<script type="text/javascript">';
// echo " alert('Fill Again The Registration Form.');";
// echo 'window.location.href = "user_registration.php";';
// echo '</script>';
}

}
?> -->
