<?php
session_start();
 ?>
<?php include'header.php'?>
<br><br><br>


<div class="container">
<center><div class="col-md-8">
<span class="sub-title" style="font-family: Arial">Registration of User</span><br><br>
<form  method="post" enctype="multipart/form-data">

        <div class="form-group">
        <div class="input-group">
        <span class="input-group-addon">
        <span>Name in local language:</span>
        </span>
        <input name="user_local_name" required="required" type="text"  maxlength="100" style="font-family: Arial" class="form-control" placeholder="Name in local language">
        </div>
        </div>

        <div class="form-group">
        <div class="input-group">
        <span class="input-group-addon">
        <span>Full Name (as per aadhaar):</span>
        &nbsp;<span class="fa text-red"></span> 
        </span>
        <input name="user_adhar_name" required="required" type="text"  maxlength="100" style="font-family: Arial" class="form-control" placeholder="Name as per aadhaar">
        </div>
        </div>

        <div class="form-group">
        <div class="input-group">
        <span class="input-group-addon">
        <span>Aadhaar No.:</span>
        &nbsp;<span class="fa text-red"></span></span>
        <input name="user_adhar_no" required="required" type="integer"  maxlength="14" style="font-family: Arial" class="form-control input-sm" placeholder="Aadhaar No.">
        </div>
        </div>


        <div class="form-group">
        <div class="input-group">
        <span class="input-group-addon">
        <span>Mobile No.:</span>
        &nbsp;<span class="fa text-red"></span>&nbsp;<b>+91</b></span>
        <input name="user_mobile_no" required="required" type="integer"  maxlength="10" style="font-family: Arial" class="form-control" placeholder="Mobile No.">
        </div>
        </div>

        <div class="form-group">
        <div class="input-group">
        <span class="input-group-addon">
        <span>Email Address</span>
        </span>
        <input name="user_email" required="required" type="email" style="font-family: Arial" maxlength="80" class="form-control" placeholder="Email Address">
        </div>
        </div>

    <div class="row">
    
    <div class="col-lg-12">
        <div class="form-group">
        <div class="input-group">
        <span class="input-group-addon">
        <span>Password:</span>
        &nbsp;<span class="fa text-red"></span></span>
        <input name="user_password" required="required" type="password" style="font-family: Arial" class="form-control" placeholder="**********">
        </div>
        </div>
    </div>

     <!-- <div class="col-lg-6">
        <div class="form-group">
        <div class="input-group">
        <span class="input-group-addon">
        <span>Confirm Password:</span>
        &nbsp;<span class="fa text-red">*</span></span>
        <input name="BirthDay" type="password" class="form-control" placeholder="**********">
        </div>
        </div>
    </div> -->
    </div>

    <div class="row">
    
    <div class="col-lg-6">
        <div class="form-group">
        <div class="input-group">
        <span class="input-group-addon">
        <span>Date of Birth:</span>
        &nbsp;<span class="fa text-red"></span></span>
        <input  name="user_dob" required="required" type="date" style="font-family: Arial" maxlength="10" class="form-control" placeholder="dd/mm/yyyy">
        </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
        <div class="input-group">
        <span class="input-group-addon">
        <span>Gender:</span>
        &nbsp;<span class="fa text-red"></span></span>
        <select class="form-control" placeholder="Gender" style="font-family: Arial" name="user_gender" required="required">
        <option selected="selected" value="0">Select One</option>
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
        <option value="transgender">TRANSGENDER</option>
        </select>
        </div>
        </div>
    </div>
    </div>

    <div class="form-group">
    <!-- <input type="submit" name="submit" style="font-family: Arial" value="Submit"  class="btn btn-primary"> -->
    <button class="btn btn-primary" type="submit" name="submit" style="font-family: Arial;background-color: #3b67b3;">Submit</button>
    </div>

</form>

</div></center>
</div>

<br><br><br><br><br><br><br><br><br>
 <!-- <center><a href="index.php"><b style="color: #36588e">Home Page</b></a></center> -->
   <?php include'footer.php' ?>

<?php 
 
 include'confi.php';
if (isset($_POST['submit'])) 
{
extract($_POST);
echo $asd = mysqli_query($con,"insert into user_ration_form_details(user_local_name,user_adhar_name,user_adhar_no,user_mobile_no,user_email,user_password,user_dob,user_gender) values ('$user_local_name','$user_adhar_name','$user_adhar_no','$user_mobile_no','$user_email','$user_password','$user_dob','$user_gender')") or die(mysql_error());
if($asd)
{
echo '<script type="text/javascript">';
echo " alert('Registered Successfully');";
echo 'window.location.href = "user_login.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Fill Again The Registration Form.');";
echo 'window.location.href = "user_registration.php";';
echo '</script>';
}

}
?>


<!-- echo $asd = mysqli_query($con,"insert into user_registration (user_local_name, user_adhar_name, user_adhar_no, user_mobile_no, user_email, user_pasword, user_dob, user_gender) values ('$user_local_name', '$user_adhar_name', '$user_adhhar_no', '$user_mobile_no' '$user_email', '$user_pasword', '$user_dob', '$user_gender')") or die(mysql_error()); -->