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
    <?php
            $sql=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_SESSION['user_id']."'");
            while($res=mysqli_fetch_assoc($sql))
            {
            ?>
            <h3 align="center" style="color:#3b67b3 ">Ration Number:<?php echo $res['ration_number'];?></h3><?php } ?>
            <hr>
    <!-- <h3 style="margin-bottom:30px">Add Delete Member</h3> -->
   <!--  <a href="user_opp.php"><button style="margin-left: -15%;margin-bottom:15px" type="button" class="btn btn-primary">Go Back</button></a> -->
        <form id="wizard1" class="wizard" method="post" enctype="multipart/form-data">
        <div class="wizard-header">
        <ul class="nav nav-tabs">
        <li role="presentation" class="wizard-step-indicator"><a href="#family">Family Details</a></li>
        </ul>
        </div>

        <div class="wizard-content" style="min-height: 1024px;">
        <div id="family" class="wizard-step">
        <?php
        $sql=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_SESSION['user_id']."'");
        while($res=mysqli_fetch_assoc($sql))
        {
        $user_id=$res['user_id'];
        ?>
        <center><a href="add_member.php?User_id=<?php echo"$user_id";?>"><button type="button" class="btn btn-primary">
        Add Member
        </button></a></center>
        <?php } ?> 
                <h3 align="center">List of Family Member</h3>
                <div class="table-responsive">
                <table class="table table-striped ">
                <thead>
                <tr>
                <th>Sr.No</th>
                <th>Full Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Birth Date</th>
                <th>Adhar</th>
                <th>Relation</th>

                <th style="margin-left: 7%">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i=1;
                $sql=mysqli_query($con,"select * from user_family_member where user_id='".$_SESSION['user_id']."'");
                while($res=mysqli_fetch_array($sql))
                {
                $user_fmember_id=$res['user_fmember_id'];
                ?>
                <tr>
                <td><?php echo $i;$i++; ?></td>

               <td><?php echo $res['user_fmember_name']; ?></td>
               <td><?php echo $res['user_fmember_age']; ?></td>
               <td><?php echo $res['user_fmember_gender']; ?></td>
               <td><?php echo $res['user_fmember_dob']; ?></td>
               <td><?php echo $res['user_fmember_adhar']; ?></td>
               <td><?php echo $res['user_fmember_relation']; ?></td>

               <!--  <td><a href="delete_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Remove Member')"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;&nbsp;
                <a href="update_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Update the Member Info')"><span class="glyphicon glyphicon-refresh"></span></a></td> -->
                <td><a href="update_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>"><button type="button"  class="btn btn-primary">Update
        </button></a>
        <a href="delete_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Remove Member')"><button type="button" class="btn btn-danger">Remove
                </tr>

                <?php }?>

                </tbody>
                </table>
                </div>

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


