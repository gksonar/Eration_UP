<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Change Password</a></li>
                    </ol>
                </div>
            </div>



<div class="row">
	<div class="col-lg-3"></div>
   <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 align="center" class="card-title">Change Password</h4>
                                <div class="basic-form">
                                    <form method="post">
                                        <!-- <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" name="opass" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="npass" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="cpass" class="form-control">
                                        </div>
                                        <center><button type="submit" name="submit" class="btn btn-dark">Change</button></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</div>    
<?php include'footer.php' ?>
<?php
                                                        
if(isset($_POST['submit']))
{
    
     $query = 'select * from seller_details where seller_password="'.$_POST['opass'].'" and seller_email ="'.$_SESSION['seller_email'].'" ';

$res=mysqli_query($con,$query);

if(mysqli_num_rows($res)>0)
{

if(strlen($_POST['npass']) >= 5 )
    {
        if($_POST['npass']==$_POST['cpass'])
        {
        $query1='update seller_details set seller_password="'.$_POST['npass'].'" where seller_email ="'.$_SESSION['seller_email'].'" ';    
$res=mysqli_query($con,$query1);

          echo '<script type="text/javascript">'; 
          echo 'alert("password changed Successfully !!!! ");'; 
          echo 'window.location.href = "dashboard.php";'; 
          echo '</script>';
        }
        else
        {
        echo '<script type="text/javascript">';
        echo 'alert(" password is not matched...  try again !!!! ");'; 
        echo 'window.location.href = "chang_pass.php";'; 
        echo '</script>';
        }
    }
else 
{
    echo '<script type="text/javascript">';
    echo 'alert(" password is greater than 6");'; 
    echo 'window.location.href = "chang_pass.php";'; 
    echo '</script>';
}
}
else
{
    echo '<script type="text/javascript">';
    echo 'alert("Old password is not matched...  try again");';
    echo '</script>';
            

}
           }
?>
