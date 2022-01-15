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
</head>

<body>

    <div class="container"><br>
          <a href="user_opp.php"><button type="button" class="btn btn-warning">My Profile</button></a>
    <!-- <h1 style="margin-bottom:20px">Ration Card Form</h1> -->
<!-- <a href="user_opp.php"><button style="margin-left: -15%;margin-bottom:15px" type="button" class="btn btn-primary">Go Back</button></a> -->
        <form id="wizard1" class="wizard" method="post" enctype="multipart/form-data">
            <h2 align="center" style="margin-bottom:20px" align="center"><b>Update Ration Card Form</b></h2><br><br>
            <?php
            $sql=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_SESSION['user_id']."'");
            while($res=mysqli_fetch_assoc($sql))
            {

            ?>
            <h3 align="center" style="color:#3b67b3 ">Ration Number:<?php echo $res['ration_number'];?></h3><?php } ?>
            <hr>
            <div class="wizard-header">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="wizard-step-indicator"><a href="#start">Personal Information</a></li>
                    <li role="presentation" class="wizard-step-indicator"><a href="#profile">Bank Account Details</a></li>
                    <li role="presentation" class="wizard-step-indicator"><a href="#finish">Upload Document</a></li>
                    <li role="presentation" class="wizard-step-indicator"><a href="#gas">Gas Connection Details</a></li>
                    <!-- <li role="presentation" class="wizard-step-indicator"><a href="#family">Family Details</a></li> -->
                </ul>
            </div>

        <div class="wizard-content" style="min-height: 900px;">
<?php 
  if(isset($_GET['User_id']))
  {
   $view="select * from user_ration_form_details where user_id='".$_GET['User_id']."'";
     $abc=mysqli_query($con,$view) or die(mysqli_error($con));
      $fetch=mysqli_fetch_array($abc);
     // extract($fetch);
 
 ?>
                <div id="start" class="wizard-step">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Head Of Family Member Name</span>&nbsp;<i class="fa text-red"></i>
                <input name="head_of_family_name" required="required" style="height: 34px;font-size: 14px" type="text" class="form-control input-sm" placeholder="Enter Head of family member name" value="<?php echo $fetch['head_of_family_name']; ?>" />
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Full Name (as per aadhaar)</span>&nbsp;<i class="fa text-red"></i>
                <input name="head_of_family_adhar_name" required="required" style="height: 34px;font-size: 14px" type="text" class="form-control input-sm" placeholder="Enter adhar name " value="<?php echo $fetch['head_of_family_adhar_name'] ?>" />
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Age</span>&nbsp;<i class="fa text-red"></i>
                <input name="head_of_family_age" style="height: 34px;font-size: 14px" required="required" type="number" class="form-control input-sm" placeholder="Enter Your Age" value="<?php echo $fetch['head_of_family_age'] ?>"/>
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Date Of Birth</span>&nbsp;<i class="fa text-red"></i>
                <input name="head_of_family_dob" style="height: 34px;font-size: 14px" required="required" type="date" maxlength="150" class="form-control input-sm" placeholder="Enter Your BirthDate" value="<?php echo $fetch['head_of_family_dob'] ?>"/>
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Gender</span>&nbsp;<i class="fa text-red"></i>
                <select style="height: 34px;font-size: 14px" required="required"  class="form-control input-sm" name="head_of_family_gender">
                <option value=" ">--Select--</option>
               
                <option value="Male" <?php if ($fetch['head_of_family_gender']=="Male"){echo "selected";} ?>>Male</option>
                <option value="Female" <?php if ($fetch['head_of_family_gender']=="Female"){echo "selected";} ?>>Female</option>
                <option value="Transgender" <?php if ($fetch['head_of_family_gender']=="Transgender"){echo "selected";} ?>>Transgender</option>
                </select>
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Nationality</span>&nbsp;<i class="fa text-red"></i>
                <select style="height: 34px;font-size: 14px" required="required" class="form-control input-sm" name="head_of_family_nationality">
                <option value=" ">--Select--</option>
                <option value="Indian" <?php if ($fetch['head_of_family_nationality']=='Indian'){echo "selected";} ?>>Indian</option>
                <option value="Irish" <?php if ($fetch['head_of_family_nationality']=="Irish"){echo "selected";} ?>>Irish</option>
                <option value="German" <?php if ($fetch['head_of_family_nationality']=="German"){echo "selected";} ?>>German </option>
                <option value="Italian" <?php if ($fetch['head_of_family_nationality']=="Italian"){echo "selected";} ?>>Italian </option>
                <option value="Polish" <?php if ($fetch['head_of_family_nationality']=="Polish"){echo "selected";} ?>>Polish</option>
                <option value="Russian" <?php if ($fetch['head_of_family_nationality']=="Russian"){echo "selected";} ?>>Russian</option>
                <option value="French" <?php if ($fetch['head_of_family_nationality']=="French"){echo "selected";} ?>>French</option>
                <option value="Swedish" <?php if ($fetch['head_of_family_nationality']=="Swedish"){echo "selected";} ?>>Swedish</option>
                <option value="Danish" <?php if ($fetch['head_of_family_nationality']=="Danish"){echo "selected";} ?>>Danish</option>
                <option value="Greek" <?php if ($fetch['head_of_family_nationality']=="Greek"){echo "selected";} ?>>Greek</option>
                <option value="Spanish" <?php if ($fetch['head_of_family_nationality']=="Spanish"){echo "selected";} ?>>Spanish</option>
                <option value="Armenian" <?php if ($fetch['head_of_family_nationality']=="Armenian"){echo "selected";} ?>>Armenian</option>
                <option value="Albanian" <?php if ($fetch['head_of_family_nationality']=="Albanian"){echo "selected";} ?>>Albanian</option>
                <option value="Austrian" <?php if ($fetch['head_of_family_nationality']=="Austrian"){echo "selected";} ?>>Austrian</option>
                <option value="British" <?php if ($fetch['head_of_family_nationality']=="British"){echo "selected";} ?>>British</option>
                <option value="Belgian" <?php if ($fetch['head_of_family_nationality']=="Belgian"){echo "selected";} ?>>Belgian</option>
                <option value="Bulgarian" <?php if ($fetch['head_of_family_nationality']=="Bulgarian"){echo "selected";} ?>>Bulgarian</option>
                <option value="Finland" <?php if ($fetch['head_of_family_nationality']=="Finland"){echo "selected";} ?>>Finland</option>
                <option value="Georgian" <?php if ($fetch['head_of_family_nationality']=="Georgian"){echo "selected";} ?>>Georgian</option>
                <option value="Iceland" <?php if ($fetch['head_of_family_nationality']=="Iceland"){echo "selected";} ?>>Iceland</option>
                <option value="Dutch" <?php if ($fetch['head_of_family_nationality']=="Dutch"){echo "selected";} ?>>Dutch</option>
                <option value="Portugal" <?php if ($fetch['head_of_family_nationality']=="Portugal"){echo "selected";} ?>>Portugal</option>
                <option value="Turkish" <?php if ($fetch['head_of_family_nationality']=="Turkish"){echo "selected";} ?>>Turkish</option>
                <option value="Croatia" <?php if ($fetch['head_of_family_nationality']=="Croatia"){echo "selected";} ?>>Croatia</option>
                <option value="Czech" <?php if ($fetch['head_of_family_nationality']=="Czech"){echo "selected";} ?>>Czech</option>
                <option value="Latvia" <?php if ($fetch['head_of_family_nationality']=="Latvia"){echo "selected";} ?>>Latvia</option>
                <option value="Iran" <?php if ($fetch['head_of_family_nationality']=="Iran"){echo "selected";} ?>>Iran</option>
                <option value="Slovakia" <?php if ($fetch['head_of_family_nationality']=="Slovakia"){echo "selected";} ?>>Slovakia</option>
                <option value="Ukraine" <?php if ($fetch['head_of_family_nationality']=="Ukraine"){echo "selected";} ?>>Ukraine</option>
                <option value="Romania" <?php if ($fetch['head_of_family_nationality']=="Romania"){echo "selected";} ?>>Romania</option>
                <option value="Norway" <?php if ($fetch['head_of_family_nationality']=="Norway"){echo "selected";} ?>>Norway</option>
                <option value="Lithuanian" <?php if ($fetch['head_of_family_nationality']=="Lithuanian"){echo "selected";} ?>>Lithuanian</option>
                <option value="Scottish" <?php if ($fetch['head_of_family_nationality']=="Scottish"){echo "selected";} ?>>Scottish</option>
                </select>
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Current Address</span>&nbsp;<i class="fa text-red"></i>
                <textarea name="user_addreess1"  style="height: 34px;font-size: 14px" required="required" type="text" class="form-control input-sm" placeholder="Address1"><?php echo $fetch['user_addreess1'] ?></textarea>
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Permanent Address</span>&nbsp;<i class="fa text-red"></i>
                 <textarea name="user_addreess2" style="height: 34px;font-size: 14px" required="required" type="text" class="form-control input-sm" placeholder="Address2" ><?php echo $fetch['user_addreess2'] ?></textarea>
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Area</span>&nbsp;<i class="fa text-red"></i>
                <select style="height: 34px;font-size: 14px" required="required"  class="form-control input-sm" name="user_area">
                <option value=" ">--Select Area--</option>
               <?php
                $query = mysqli_query($con,"select * from area order by area_name asc") or die(mysqli_error($con));

                while ($fetch1=mysqli_fetch_array($query)) 
                {
                    extract($fetch1);
                ?>
                <option value="<?php echo $fetch1['area_name'];?>"<?php if ($fetch1['area_name']==$res['user_area']){echo "selected";} ?>><?php echo $fetch1['area_name'];?></option>
                 <?php } ?>
                </select>
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Job Profile</span>&nbsp;<i class="fa text-red"></i>
                <input name="head_of_family_job" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="150" class="form-control input-sm" placeholder="Enter Your Job Profile" value="<?php echo $fetch['head_of_family_job'] ?>"/>
                </div>
                </div>
                </div>

                 <center>
                <button type="button" class="wizard-next btn btn-primary">Next</button></center>
                <!-- <button type="button" class="wizard-goto btn btn-primary" value="6">Go to last</button> -->
                </div>



                <div id="profile" class="wizard-step">

                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Bank Name</span>&nbsp;<i class="fa text-red"></i>
                <input name="user_bank_name" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="150" class="form-control input-sm" placeholder="Enter the bank Name" value="<?php echo $fetch['user_bank_name'] ?>" />
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Branch Name</span>&nbsp;<i class="fa text-red"></i>
                <input name="user_branch_name" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="99" class="form-control input-sm" placeholder="Enter the Branch Name" value="<?php echo $fetch['user_branch_name'] ?>" />
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Account No</span>&nbsp;<i class="fa text-red"></i>
                <input name="user_account_no" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="12" class="form-control input-sm" placeholder="Enter the Account Name" value="<?php echo $fetch['user_account_no'] ?>"/>
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>IFSC Code</span>&nbsp;<i class="fa text-red"></i>
                <input name="user_bank_ifsc_code" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="14" class="form-control input-sm" placeholder="Enter the IFSC Code" pattern="^[A-Za-z]{4}\d{7}$" value="<?php echo $fetch['user_bank_ifsc_code'] ?>"/>
                </div>
                </div>
                </div>

                <center>
                <button type="button" class="wizard-prev btn btn-primary">Previous</button>
                <button type="button" class="wizard-next btn btn-primary">Next</button></center>
                </div>

                <div id="finish" class="wizard-step">
                <div class="row">
                <div class="col-md-12">
                <span>Income Certificate</span><br>
                <input type="file" src="fileup/<?php echo $fetch['user_income_certificate']?>" name="user_income_certificate" class="fileinput" accept=" .zip, .pdf, .docx " />
                </div>
                </div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 2%;">
                <div class="form-group">
                <span>Adhar Card Photo</span>
                <div class="preview_box">
                <?php 
                if($fetch['user_adhar_card_photo']=="")
                {
                ?>
                <img id="preview_img" src="images/No-image-full.jpg" height="100" width="100"/>
                <?php }
                else
                {
                ?>
                <img id="preview_img" src="images/<?php echo $fetch['user_adhar_card_photo']?>" height="100" width="100" />
                <?php } ?>
                <input type="file" id="image" style="height: 34px;font-size: 14px;margin-top: 2%" name="user_adhar_card_photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
                </div> 
                </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 2%;">
                <div class="form-group">
                <span>Password Size Photo</span>
                <div class="preview_box">
                <?php 
                if($fetch['user_pass_size_photo']=="")
                {
                ?>
                <img id="preview_img1" src="images/No-image-full.jpg" height="100" width="100"/>
                <?php }
                else
                {
                ?>
                <img id="preview_img1" src="images/<?php echo $fetch['user_pass_size_photo']?>" height="100" width="100" />
                <?php } ?>
                <input type="file" id="image1" style="height: 34px;font-size: 14px;margin-top: 2%" name="user_pass_size_photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
                </div> 
                <!-- <input type="file"style="height: 34px;font-size: 14px;margin-top: 2%" name="user_pass_photo" /> -->
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 2%;">
                <div class="form-group">
                <span>Signature of Head Person</span>
                <div class="preview_box">
                <?php 
                if($fetch['user_sign_photo']=="")
                {
                ?>
                <img id="preview_img2" src="images/No-image-full.jpg" height="100" width="100"/>
                <?php }
                else
                {
                ?>
                <img id="preview_img2" src="images/<?php echo $fetch['user_sign_photo']?>" height="100" width="100" />
                <?php } ?>
                <input type="file" id="image2" style="height: 34px;font-size: 14px;margin-top: 2%" name="user_sign_photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
                </div> 
                <!-- <input type="file" style="height: 34px;font-size: 14px;margin-top: 2%" name="user_sign" /> -->
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 2%;">
                <div class="form-group">
                <span>Upload Family Photo</span>
                <div class="preview_box">
                <?php 
                if($fetch['user_family_photo']=="")
                {
                ?>
                <img id="preview_img3" src="images/No-image-full.jpg" height="100" width="100"/>
                <?php }
                else
                {
                ?>
                <img id="preview_img3" src="images/<?php echo $fetch['user_family_photo']?>" height="100" width="100" />
                <?php } ?>
                <input type="file" id="image3" style="height: 34px;font-size: 14px;margin-top: 2%" name="user_family_photo" class="fileinput" accept=" .png, .jpg, .jpeg " />
                </div> 
                <!-- <input type="file" style="height: 34px;font-size: 14px;margin-top: 2%" name="user_family_photo" /> -->
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
                <input name="user_gas_cname" style="height: 34px;font-size: 14px" required="required" type="text" maxlength="150" class="form-control input-sm" placeholder="Enter the gas Company name" value="<?php echo $fetch['user_gas_cname'] ?>"/>
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                <span>Consumer Number</span>&nbsp;<i class="fa text-red"></i>
                <input name="user_consumer_no"  style="height: 34px;font-size: 14px" required="required" type="text" maxlength="6" class="form-control input-sm" placeholder="Enter the Consumer Number" value="<?php echo $fetch['user_consumer_no'] ?>"/>
                </div>
                </div>
                </div>
<?php } ?>
               <center>
                <button type="button" class="wizard-prev btn btn-primary">Previous</button>
                <button type="submit" name="update" class=" btn btn-primary" onclick="return confirm('Are you Sure for update the form')">Update</button></center>
                
                </div>

             </div>
        </form>
</div>
       

            <!-- main page script -->
            <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
            <script src="dist/jquery.simplewizard.js"></script>
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
<!-- <script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script> -->
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
                        readImageData3(this);//Call image read and render function
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
   if(isset($_POST['update']))
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

  else
    {
      $user_adhar_card_photo=$fetch['user_adhar_card_photo'];
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


else
    {
      $user_pass_size_photo=$fetch['user_pass_size_photo'];
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

else
    {
      $user_sign_photo=$fetch['user_sign_photo'];
    }

  $name3=$_FILES['user_family_photo']['name'];
  $type3=$_FILES['user_family_photo']['type'];
  $size3=$_FILES['user_family_photo']['size'];
  $temp3=$_FILES['user_family_photo']['tmp_name'];
  if($name3){
  
            $upload3= "images/";
            $imgExt3=strtolower(pathinfo($name3, PATHINFO_EXTENSION));
            $valid_ext3= array('jpg','png','jpeg' );
            $user_family_photo= rand(1000,1000000).".".$imgExt3;
            move_uploaded_file($temp3,$upload3.$user_family_photo);
  }
else
    {
      $user_family_photo=$fetch['user_family_photo'];
    }

$user_income_certificate = rand(1000,100000)."-".$_FILES['user_income_certificate']['name'];
$file_loc = $_FILES['user_income_certificate']['tmp_name'];
 $file_size = $_FILES['user_income_certificate']['size'];
 $file_type = $_FILES['user_income_certificate']['type'];
 $folder="fileup/";
 
 move_uploaded_file($file_loc,$folder.$user_income_certificate);

  echo $query="update user_ration_form_details set 
            head_of_family_name='".$head_of_family_name."',
            head_of_family_adhar_name='".$head_of_family_adhar_name."',
            head_of_family_age='".$head_of_family_age."',
            head_of_family_dob='".$head_of_family_dob."',
            head_of_family_gender='".$head_of_family_gender."',
            head_of_family_nationality='".$head_of_family_nationality."',
            user_addreess1='".$user_addreess1."',
            user_addreess2='".$user_addreess2."',
            user_area='".$user_area."',
            head_of_family_job='".$head_of_family_job."',
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
            user_family_photo='".$user_family_photo."'

          where user_id='".$_SESSION['user_id']."'";

         $up=mysqli_query($con,$query) or die (mysqli_error($con));
            if($up)
            {
                echo '<script type="text/javascript">';
                echo "alert('Your information updated successfully');";
                echo 'window.location.href="user_opp.php";';
                echo "</script>";

                }
              else
              {
                echo '<script type="text/javascript">';
                    echo "alert('Record not update');";
                        
                        echo "</script>";
              }
          

}

?>




