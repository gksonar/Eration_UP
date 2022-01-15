<?php 
session_start();
include'confi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Ration Card Form</title>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="dist/jquery.simplewizard.css" rel="stylesheet" />
	<style type="text/css">
		.scrollit {
	overflow:scroll;
	height:170px;
}
	</style>
</head>

<body>
	

	<div class="container"><br>
	<!-- <h1 style="margin-bottom:20px;margin-left: 36%">Ration Card Form</h1> -->
	<a href="user_opp.php"><button type="button" class="btn btn-warning">My Profile</button></a>

<center><h1><b>Apply For Ration Card Form</b></h1></center><br><br>


		<form id="wizard1" class="wizard" method="post" enctype="multipart/form-data">
		<div class="wizard-header">
			<ul class="nav nav-tabs">
				<li role="presentation" class="wizard-step-indicator"><a href="#start">Personal Information</a></li>
				<li role="presentation" class="wizard-step-indicator"><a href="#profile">Bank Account Details</a></li>
				<li role="presentation" class="wizard-step-indicator"><a href="#messages">Select RC Type</a></li>
				<li role="presentation" class="wizard-step-indicator"><a href="#finish">Upload Document</a></li>
				<li role="presentation" class="wizard-step-indicator"><a href="#gas">Gas Connection Details</a></li>
				<li role="presentation" class="wizard-step-indicator"><a href="#family">Family Details</a></li>
			</ul>
		</div>
		<div class="wizard-content" style="min-height: 800px;">

				<div id="start" class="wizard-step">
				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Head Of Family Member Name</span>&nbsp;<i class="fa text-red"></i>
				<input name="head_of_family_name" required="required" style="height: 34px;font-size: 14px" type="text" class="form-control input-sm" placeholder="Enter Head of family member name" pattern="[a-zA-Z][a-zA-Z ]+"/>
				</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Full Name (as per aadhaar)</span>&nbsp;<i class="fa text-red"></i>
				<input name="head_of_family_adhar_name" required="required" style="height: 34px;font-size: 14px" type="text" class="form-control input-sm" placeholder="Enter adhar name " pattern="[a-zA-Z][a-zA-Z ]+" />
				</div>
				</div>
				</div>

				
				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Date Of Birth</span>&nbsp;<i class="fa text-red"></i>
				<input name="head_of_family_dob" style="height: 34px;font-size: 14px" required="required" type="date" maxlength="10"  max="2000-01-01" min="1950-01-01" class="form-control input-sm" placeholder="Enter Your BirthDate"/ >
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Adhar Number</span>&nbsp;<i class="fa text-red"></i>
				<input name="head_of_family_adhar" style="height: 34px;font-size: 14px" required="required" type="text"  maxlength="12" pattern="[0-9]+"  class="form-control input-sm" placeholder="Enter Your Adhar card nummber">
				</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Current Address</span>&nbsp;<i class="fa text-red"></i>
				<textarea name="user_addreess1"  style="height: 34px;font-size: 14px" required="required" type="text" class="form-control input-sm" placeholder="Current Address"></textarea>
				</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Permanent Address</span>&nbsp;<i class="fa text-red"></i>
				 <textarea name="user_addreess2" style="height: 34px;font-size: 14px" required="required" type="text" class="form-control input-sm" placeholder="Current Address" ></textarea>
				</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Area</span>&nbsp;<i class="fa text-red"></i>
				<select style="height: 34px;font-size: 14px" required="required"  class="form-control input-sm" name="user_area">
					<option value=" ">---Select Area---</option>
				<?php
				$query = mysqli_query($con,"select * from area order by area_name asc") or die(mysqli_error($con));

				while ($fetch1=mysqli_fetch_array($query)) 
				{
					extract($fetch1);
				?>
				<option value="<?php echo $fetch1['area_name'];?>"><?php echo $fetch1['area_name'];?></option>
			<?php } ?>
				</select>
				</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Job Profile</span>&nbsp;<i class="fa text-red"></i>
				<input name="head_of_family_job" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="150" class="form-control input-sm" placeholder="Enter Your Job Profile" />
				</div>
				</div>
				</div>

				<center><button type="button" class="wizard-next btn btn-primary">Next</button></center>
				</div>



				<div id="profile" class="wizard-step">

				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Bank Name</span>&nbsp;<i class="fa text-red"></i>
				<input name="user_bank_name" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="150" class="form-control input-sm" placeholder="Enter the bank Name" />
				</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Branch Name</span>&nbsp;<i class="fa text-red"></i>
				<input name="user_branch_name" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="99" class="form-control input-sm" placeholder="Enter the Branch Name" />
				</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Account No</span>&nbsp;<i class="fa text-red"></i>
				<input name="user_account_no" style="height: 34px;font-size: 14px" required="required" type="integer" maxlength="150" class="form-control input-sm" placeholder="Enter the Account Name" />
				</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>IFSC Code</span>&nbsp;<i class="fa text-red"></i>
				<input name="user_bank_ifsc_code" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="99" class="form-control input-sm" placeholder="Enter the IFSC Code" pattern="^[A-Za-z]{4}\d{7}$" />
				</div>
				</div>
				</div>

				<center>
				<button type="button" class="wizard-prev btn btn-primary">Previous</button>
				<button type="button" class="wizard-next btn btn-primary">Next</button></center>
				</div>

				<div id="messages" class="wizard-step">
				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Annual Income</span>&nbsp;(In Rupees)<i class="fa text-red"></i>
				<select name="head_of_family_income" id="i_id" style="height: 34px;font-size: 14px" required="required" class="form-control input-sm" >
				<option>---Select Annual Income---</option>
				<?php
				$query2 = mysqli_query($con,"select * from income") or die(mysqli_error($con));

				while ($fetch2=mysqli_fetch_array($query2)) 
				{
					extract($fetch2);
				?>
				<option value="<?php echo $fetch2['i_id'];?>"><?php echo $fetch2['income'];?></option>
			<?php } ?>
				</select>
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Ration Type</span>&nbsp;<i class="fa text-red"></i>
				<select name="user_select_card_type" id="r_id" style="height: 34px;font-size: 14px" required="required" class="form-control input-sm" readonly="readonly">
				<option value="0">---Select Ration Type---</option>
				
				</select>
				</div>
				</div>
				</div>

			   <center>
				<button type="button" class="wizard-prev btn btn-primary">Previous</button>
				<button type="button" class="wizard-next btn btn-primary">Next</button></center>
				</div>


				<div id="finish" class="wizard-step">
				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Income Certificate</span><br>
				<input type="file" id="upload_cv" name="user_income_certificate" class="fileinput" accept=".pdf,.docx" />
				</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Upload Address Proof</span>
				<input type="file" required="required" name="user_family_photo" class="fileinput" accept=".pdf,.docx" / />
				</div>
				</div>
				</div>

				<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 2%;">
				<div class="form-group">
				<span>Adhar Card </span>
				<div class="preview_box">
				<img id="preview_img" src="images/No-image-full.jpg" height="100" width="100" />
				<input type="file" id="image" style="height: 34px;font-size: 14px;margin-top: 2%" required="required" name="user_adhar_card_photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
				</div>
				</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 2%;">
				<div class="form-group">
				<span>Passport Size Photo</span>
				<div class="preview_box">
				<img id="preview_img1" src="images/No-image-full.jpg" height="100" width="100" />
				<input type="file" id="image1" style="height: 34px;font-size: 14px;margin-top: 2%" required="required" name="user_pass_size_photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
				</div>
				</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 2%;">
				<div class="form-group">
				<span>Signature of Head Person</span>
				<div class="preview_box">
				<img id="preview_img2" src="images/No-image-full.jpg" height="100" width="100" />
				<input type="file" id="image2" style="height: 34px;font-size: 14px;margin-top: 2%" required="required" name="user_sign_photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
				</div>
				</div>
				</div>

				
				</div>

				<center>
				 <button type="button" class="wizard-prev btn btn-primary">Previous</button>
				<button type="button" class="wizard-next btn btn-primary">Next</button></center>
				</div>


				<div id="gas" class="wizard-step">

				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Gas Company Name</span>&nbsp;<i class="fa text-red"></i>
				<input name="user_gas_cname" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="150" class="form-control input-sm" placeholder="Enter the gas Company name" />
				</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="form-group">
				<span>Consumer Number</span>&nbsp;<i class="fa text-red"></i>
				<input name="user_consumer_no" style="height: 34px;font-size: 14px" required="required" type="integer" maxlength="99" class="form-control input-sm" placeholder="Enter the Consumer Number" />
				</div>
				</div>
				</div>

				<center>
				<button type="button" class="wizard-prev btn btn-primary">Previous</button>
				<button type="button" class="wizard-next btn btn-primary">Next</button></center>
				</div>


				<div id="family" class="wizard-step">
				<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="scrollit">
			<table class="table table-hover small-text" id="tb">
				<tr class="tr-header">
				<th>Full Name</th>
				<th>Birth Date</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Adhar Card Number</th>
				<th>Relation</th>
				<th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th>
				</tr>
				<tr>
				<td><input type="text" name="user_fmember_name[]"  placeholder="Enter the Full Name" required="required" class="form-control"></td>
				<td><input type="date" name="user_fmember_dob[]"   placeholder="Enter the DOB" required="required" class="form-control" id="dob"></td>
			    <td><input type="integer" name="user_fmember_age[]"  placeholder="Enter the Age" required="required" class="form-control"></td>
				<td><select name="user_fmember_gender[]" class="form-control" required="required">
					<option value=" ">--Select--</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Transgender">Transgender</option>
					</select></td>
					<td><input type="text" maxlength="12" pattern=" [0-9]+"name="user_fmember_adhar[]" required="required" class="form-control"></td>
					
				<td><select name="user_fmember_relation[]" class="form-control" required="required">
						<option value=" ">--Select--</option>
						<option value="Self">Self</option>
						<option value="Mother">Mother</option>
						<option value="Father">Father</option>
						<option value="Wife">Wife</option>
						<option value="Son">Son</option>
						<option value="Daughter">Daughter</option>
						<option value="Sister">Sister</option>
						<option value="Brother">Brother</option>
					</select></td>
				<td><a href='javascript:void(0);'  class='remove'><span class='glyphicon glyphicon-remove'></span></a></td>
				</tr> 
			</table>
				<!-- add more script -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
				<script>
				$(function(){
				$('#addMore').on('click', function() {
				var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
				data.find("input").val('');
				});
				$(document).on('click', '.remove', function() {
				var trIndex = $(this).closest("tr").index();
				if(trIndex>1) {
				$(this).closest("tr").remove();
				} else {
				alert("Sorry!! Can't remove first row!");
				}
				});
				});      
				</script>
				<!-- end -->
				</div>
				</div>
				</div>
				<center>
				<button type="button" class="wizard-prev btn btn-primary">Previous</button>
				<button type="submit" name="submit" class=" btn btn-primary"onclick="return confirm('Are you Sure for submit the form')">Submit</button></center>
				</div>

			 </div>
		</form>
</div>
	   

			<!-- main page script -->
			<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
			<script src="dist/jquery.simplewizard.js"></script>
			<script type="text/javascript">
			  $(document).ready(function(){
			    $("select#i_id").change(function(){
			          var c = $("#i_id option:selected").val();
			     alert-(c);
			          $.ajax({
			              type: "POST",
			              url: "rationtype.php", 
			              data: { head_of_family_income : c  } 
			          }).done(function(data){
			              $("#r_id").html(data);
			          });
			      });
			  });
			</script>
			<script>
					$(function () {
					$("#wizard1").simpleWizard({
					cssClassStepActive: "active",
					cssClassStepDone: "done",
					onFinish: function() {
					alert("Wizard finished")
					}
					});
					});
			</script>
			<!-- end -->

			<!--script for images -->
			<script type="text/javascript"> //for image1
				$(document).ready(function(){
					//Image file input change event
					$("#image").change(function(){
						readImageData(this);//Call image read and render function
					});
				});
				function readImageData(imgData){
					if (imgData.files && imgData.files[0]) {
						var readerObj = new FileReader();
						
						readerObj.onload = function (element) {
							$('#preview_img').attr('src', element.target.result);
						}
						readerObj.readAsDataURL(imgData.files[0]);
					}
				}
			</script> 

			<script type="text/javascript">//for image2
				$(document).ready(function(){
					//Image file input change event
					$("#image1").change(function(){
						readImageData1(this);//Call image read and render function
					});
				});
				 
				function readImageData1(imgData){
					if (imgData.files && imgData.files[0]) {
						var readerObj = new FileReader();
						
						readerObj.onload = function (element) {
							$('#preview_img1').attr('src', element.target.result);
						}
						
						readerObj.readAsDataURL(imgData.files[0]);
					}
				}
			</script> 

			<script type="text/javascript">//for image3
				$(document).ready(function(){
					//Image file input change event
					$("#image2").change(function(){
						readImageData2(this);//Call image read and render function
					});
				});
				 
				function readImageData2(imgData){
					if (imgData.files && imgData.files[0]) {
						var readerObj = new FileReader();
						
						readerObj.onload = function (element) {
							$('#preview_img2').attr('src', element.target.result);
						}
						
						readerObj.readAsDataURL(imgData.files[0]);
					}
				}
			</script> 

			<script type="text/javascript">//for image4
				$(document).ready(function(){
					//Image file input change event
					$("#image3").change(function(){
						readImageData3(this);
					});
				});
				 
				function readImageData3(imgData){
					if (imgData.files && imgData.files[0]) {
						var readerObj = new FileReader();
						
						readerObj.onload = function (element) {
							$('#preview_img3').attr('src', element.target.result);
						}
						
						readerObj.readAsDataURL(imgData.files[0]);
					}
				}
			</script> 
			<!-- end -->
</body>
</html>
<?php

include'confi.php';
 if(isset($_POST['submit']))
{
 extract($_POST);
 
  $name=$_FILES['user_adhar_card_photo']['name'];
  $type=$_FILES['user_adhar_card_photo']['type'];
  $size=$_FILES['user_adhar_card_photo']['size'];
  $temp=$_FILES['user_adhar_card_photo']['tmp_name'];
  if($name){
  
			$upload= "images/";
			$imgExt=strtolower(pathinfo($name, PATHINFO_EXTENSION));
			$valid_ext= array('jpg','png','jpeg' );
			$user_adhar_card_photo= rand(1000,1000000).".".$imgExt;
			move_uploaded_file($temp,$upload.$user_adhar_card_photo);
  }

  $name1=$_FILES['user_pass_size_photo']['name'];
  $type1=$_FILES['user_pass_size_photo']['type'];
  $size1=$_FILES['user_pass_size_photo']['size'];
  $temp1=$_FILES['user_pass_size_photo']['tmp_name'];
  if($name1){
  
			$upload1= "images/";
			$imgExt1=strtolower(pathinfo($name1, PATHINFO_EXTENSION));
			$valid_ext1= array('jpg','png','jpeg' );
			$user_pass_size_photo= rand(1000,1000000).".".$imgExt1;
			move_uploaded_file($temp1,$upload1.$user_pass_size_photo);
  }

  $name2=$_FILES['user_sign_photo']['name'];
  $type2=$_FILES['user_sign_photo']['type'];
  $size2=$_FILES['user_sign_photo']['size'];
  $temp2=$_FILES['user_sign_photo']['tmp_name'];
  if($name2){
  
			$upload2= "images/";
			$imgExt2=strtolower(pathinfo($name2, PATHINFO_EXTENSION));
			$valid_ext2= array('jpg','png','jpeg' );
			$user_sign_photo= rand(1000,1000000).".".$imgExt2;
			move_uploaded_file($temp2,$upload2.$user_sign_photo);
  }

$user_income_certificate = rand(1000,100000)."-".$_FILES['user_income_certificate']['name'];
$file_loc = $_FILES['user_income_certificate']['tmp_name'];
 $file_size = $_FILES['user_income_certificate']['size'];
 $file_type = $_FILES['user_income_certificate']['type'];
 $folder="fileup/";
 
 move_uploaded_file($file_loc,$folder.$user_income_certificate);

 $user_family_photo = rand(1000,100000)."-".$_FILES['user_family_photo']['name'];
$file_loc = $_FILES['user_family_photo']['tmp_name'];
 $file_size = $_FILES['user_family_photo']['size'];
 $file_type = $_FILES['user_family_photo']['type'];
 $folder="address proof/";
 
 move_uploaded_file($file_loc,$folder.$user_family_photo);

 $user_fmember_adhar = rand(1000,100000)."-".$_FILES['user_fmember_adhar']['name'];
$file_loc = $_FILES['user_fmember_adhar']['tmp_name'];
 $file_size = $_FILES['user_fmember_adhar']['size'];
 $file_type = $_FILES['user_fmember_adhar']['type'];
 $folder="fileup/";

// fetching  the particular user from user id user_ration_form_details  
$s2=mysqli_query($con,"select user_id from user_ration_form_details order by user_id desc limit 1");
$fetch=mysqli_fetch_array($s2);

$chars = "0123456789";
$ration_no=substr( str_shuffle( $chars ), 0, 11 );

echo $insert=$query="update user_ration_form_details set 
			ration_number='".$ration_no."',         
			head_of_family_name='".$head_of_family_name."',
			head_of_family_adhar_name='".$head_of_family_adhar_name."',
			user_addreess1='".$user_addreess1."',
			user_addreess2='".$user_addreess2."',
			user_area='".$user_area."',
			head_of_family_dob='".$head_of_family_dob."',
			head_of_family_job='".$head_of_family_job."',
			head_of_family_adhar='".$head_of_family_adhar."',
			user_bank_name='".$user_bank_name."',
			user_branch_name='".$user_branch_name."',
			user_account_no='".$user_account_no."',
			user_bank_ifsc_code='".$user_bank_ifsc_code."',
			user_select_card_type='".$user_select_card_type."',
			user_gas_cname='".$user_gas_cname."',
			user_consumer_no='".$user_consumer_no."',
			user_income_certificate='".$user_income_certificate."',
			user_adhar_card_photo='".$user_adhar_card_photo."',
			user_pass_size_photo='".$user_pass_size_photo."',
			user_sign_photo='".$user_sign_photo."',
			user_family_photo='".$user_family_photo."',
			apply_rc_id='apply',i_id='1'
			where user_email='".$_SESSION['user_email']."'";

$asd=mysqli_query($con,$insert) or die(mysql_error($con));
//add more family member query
$total_user_fmember = count($_POST['user_fmember_name']);
for($i=0;$i<$total_user_fmember;$i++)
{
 echo $old_fac_query="INSERT INTO user_family_member(user_id, user_fmember_name, user_fmember_age,user_fmember_gender, user_fmember_dob,user_fmember_adhar,user_fmember_relation) VALUES ('".$_SESSION['user_id']."','".$_POST["user_fmember_name"][$i]."','".$_POST["user_fmember_age"][$i]."','".$_POST["user_fmember_gender"][$i]."','".$_POST["user_fmember_dob"][$i]."','".$_POST["user_fmember_adhar"][$i]."','".$_POST["user_fmember_relation"][$i]."')";

$old_fac_insert=mysqli_query($con,$old_fac_query) or die(mysqli_error($con));
if($old_fac_insert)
{
$old_fac=1;
}
}

if($insert=1)
{
echo '<script type="text/javascript">';
echo " alert('Your Application Submitted Suceesfully');";
echo 'window.location.href = "user_opp.php";';
echo '</script>';

}
else
{
echo '<script type="text/javascript">';
echo " alert('Unsucessfully');";
echo '<script>';
}

}
?>
