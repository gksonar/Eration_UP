<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <!-- <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Ration</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Sell Ration</a></li>
                    </ol>
                </div> -->
            </div>
<div class="row">
 <div class="col-lg-3"></div>
   <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
           <h3 align="center">Allocate Schedule</h3><br>
            <div class="basic-form">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Allocate Schedule</label>
                        <input type="date" name="verify_rc_date" class="form-control" required="required">
                    </div>
                    <center><button type="submit" name="submit" class="btn btn-primary">Allocate</button>
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
 echo $query="update user_ration_form_details set 
            verify_rc_date='".$verify_rc_date."',
            verify_rc_status='Allocate'
          where user_id='".$_SESSION['user_id']."'";

         $asd=mysqli_query($con,$query) or die (mysqli_error($con));
if($asd)
{
echo '<script type="text/javascript">';
echo " alert('Schedule Allocate');";
echo 'window.location.href = "registered_user.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Add again.');";
echo 'window.location.href = "sellration.php";';
echo '</script>';
}

}
?>


