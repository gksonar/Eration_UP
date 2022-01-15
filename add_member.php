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
<center><h1><b>Add Family Member</b></h1></center><br>

        <form id="wizard1" class="wizard" method="post" enctype="multipart/form-data">
            <div class="wizard-header">
                <ul class="nav nav-tabs">
                    <!-- <li role="presentation" class="wizard-step-indicator"><a href="#start">Personal Information</a></li>
                    <li role="presentation" class="wizard-step-indicator"><a href="#profile">Bank Account Details</a></li>
                    <li role="presentation" class="wizard-step-indicator"><a href="#messages">Select RC Type</a></li>
                    <li role="presentation" class="wizard-step-indicator"><a href="#finish">Upload Document</a></li>
                    <li role="presentation" class="wizard-step-indicator"><a href="#gas">Gas Connection Details</a></li> -->
                    <li role="presentation" class="wizard-step-indicator"><a href="#family">Family Details</a></li>
                </ul>
            </div>

        <div class="wizard-content" style="min-height: 1024px;">

                

                <div id="family" class="wizard-step">
                  
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

               <div class="table-responsive">
                <table class="table table-striped ">
                <tr class="tr-header">
                <th>Full Name</th>
                <th>Birth Date</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Adhar Card Number</th>
                <th>Relation</th>
                <!-- <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="glyphicon glyphicon-plus"></span></a></th> -->
                </tr>

                <tr>
                <td><input type="text" name="user_fmember_name[]"  placeholder="Enter the Full Name" class="form-control"></td>
                <td><input type="date" name="user_fmember_dob[]"  placeholder="Enter the DOB" class="form-control"></td>
                <td><input type="integer" name="user_fmember_age[]"  placeholder="Enter the Age"  class="form-control"></td>
                <td><select name="user_fmember_gender[]" class="form-control" >
                    <option value=" ">--Select--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Transgender">Transgender</option>
                    </select></td>
                <td><input type="text" maxlength="12" pattern=" [0-9]+"name="user_fmember_adhar[]" required="required" class="form-control"></td>
                <td><select name="user_fmember_relation[]" class="form-control" >
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
                <!-- <td><a href='javascript:void(0);'  class='remove'><span class='glyphicon glyphicon-remove'></span></a></td> -->
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
                <div>
                <center><button type="submit" name="submit" class=" btn btn-primary">Add</button>&nbsp;&nbsp;&nbsp;
                    <a href="add_delete_member.php"><button type="button" class=" btn btn-danger">Cancel</button></a></center>
                </div>

                </div>

             </div>
        </form>
</div>
   

    <?php

include'confi.php';
 if(isset($_POST['submit']))
{
 extract($_POST);

// fetching  the particular user from user id user_ration_form_details  
// $s2=mysqli_query($con,"select user_id from user_ration_form_details order by user_ration_form_id desc limit 1");
// $fetch=mysqli_fetch_array($s2);
// $user_id=$fetch['user_id']; 
// end
// echo $insert ="insert into user_ration_form_details(user_id,head_of_family_name, head_of_family_adhar_name, head_of_family_age, head_of_family_dob, head_of_family_gender, head_of_family_nationality, user_addreess1, user_addreess2, user_bank_name, user_branch_name, user_account_no, user_bank_ifsc_code, user_select_card_type, user_gas_cname, user_consumer_no, user_adhar_card_photo, user_pass_size_photo, user_sign_photo, user_family_photo) 
//     values ('".$user_id."','$head_of_family_name', '$head_of_family_adhar_name', '$head_of_family_age', '$head_of_family_dob', '$head_of_family_gender', 
//     '$head_of_family_nationality', '$user_addreess1', '$user_addreess2', '$user_bank_name', '$user_branch_name', '$user_account_no', '$user_bank_ifsc_code', '$user_select_card_type', '$user_gas_cname', '$user_consumer_no', '$user_adhar_card_photo', '$user_pass_size_photo', '$user_sign_photo', '$user_family_photo')";
// echo $insert=$query="update user_ration_form_details set 
//             head_of_family_name='".$head_of_family_name."',
//             head_of_family_adhar_name='".$head_of_family_adhar_name."',
//             head_of_family_age='".$head_of_family_age."',
//             head_of_family_dob='".$head_of_family_dob."',
//             head_of_family_gender='".$head_of_family_gender."',
//             head_of_family_nationality='".$head_of_family_nationality."',
//             user_addreess1='".$user_addreess1."',
//             user_addreess2='".$user_addreess2."',
//             user_bank_name='".$user_bank_name."',
//             user_branch_name='".$user_branch_name."',
//             user_account_no='".$user_account_no."',
//             user_bank_ifsc_code='".$user_bank_ifsc_code."',
//             user_select_card_type='".$user_select_card_type."',
//             user_gas_cname='".$user_gas_cname."',
//             user_consumer_no='".$user_consumer_no."',
//             user_adhar_card_photo='".$user_adhar_card_photo."',
//             user_pass_size_photo='".$user_pass_size_photo."',
//             user_sign_photo='".$user_sign_photo."',
//             user_family_photo='".$user_family_photo."'
//             where user_email='".$_SESSION['user_email']."'";

// $asd=mysqli_query($con,$insert) or die(mysql_error($con));



// fetching  the particular user from user id user_ration_form_details  
// $s1=mysqli_query($con,"select user_id from user_ration_form_details order by user_id desc limit 1");
// $fetch=mysqli_fetch_array($s1);
// $user_id=$fetch['user_id']; 
// end

//add more family member query
$total_user_fmember = count($_POST['user_fmember_name']);
for($i=0;$i<$total_user_fmember;$i++)
{
$old_fac_query="INSERT INTO user_family_member(user_id, user_fmember_name, user_fmember_age,user_fmember_gender, user_fmember_dob,user_fmember_adhar,user_fmember_relation) VALUES ('".$_SESSION['user_id']."','".$_POST["user_fmember_name"][$i]."','".$_POST["user_fmember_age"][$i]."','".$_POST["user_fmember_gender"][$i]."','".$_POST["user_fmember_dob"][$i]."','".$_POST["user_fmember_adhar"][$i]."','".$_POST["user_fmember_relation"][$i]."')";

$old_fac_insert=mysqli_query($con,$old_fac_query) or die(mysqli_error($con));
if($old_fac_insert)
{
$old_fac=1;
}
}
// if( (isset($old_fac)))
//     {
//     echo "<script>";
//         echo "alert('Your Application Submitted Suceesfully.');";
//         echo "window.location.href='user_opp.php';";
//         echo "</script>";
//     }
//end

if($insert=1)
{
echo '<script type="text/javascript">';
echo " alert('Member added Suceesfully');";
echo 'window.location.href = "add_delete_member.php";';
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


