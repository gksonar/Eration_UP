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
    <!-- <h3 style="margin-bottom:30px">Add Delete Member</h3> -->
    <a href="user_opp.php"><button type="button" class="btn btn-primary">Go Back</button></a>
    <center><h1><b>Add Family Member</b></h1></center><br>
    <br>
        <form id="wizard1" class="wizard" method="post" enctype="multipart/form-data">
        <div class="wizard-header">
        <ul class="nav nav-tabs">
        <li role="presentation" class="wizard-step-indicator"><a href="#family">Family Details</a></li>
        </ul>
        </div>

        <div class="wizard-content" style="min-height: 600;">
        <div id="family" class="wizard-step"> 
                <h3 align="center">List of Family Member</h3>
                <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                <tr>
                <!-- <th>Sr.No</th> -->
                <th>Full Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Birth Date</th>
                <th>Relation</th>
                <th>Action</th>
                </tr>
                </thead>

                <tbody>
                 <tr>    
                <?php
                $i=1;
                $sql=mysqli_query($con,"select * from user_family_member where user_fmember_id='".$_GET['Userm_id']."'");
                while($res=mysqli_fetch_array($sql))
                {
                $user_fmember_id=$res['user_fmember_id'];
                ?>
               
                <!-- <td><?php echo $i;$i++; ?></td> -->

                <td><input type="text" name="user_fmember_name"  placeholder="Enter the Full Name" required="required" class="form-control" value="<?php echo $res['user_fmember_name'] ?>"></td>

                <td><input name="user_fmember_age"  placeholder="Enter the Age" required="required" class="form-control" value="<?php echo $res['user_fmember_age'] ?>"></td>

                <td><select name="user_fmember_gender" class="form-control" required="required">
                <option value=" ">--Select--</option>
                <option value="Male" <?php if ($res['user_fmember_gender']=="Male"){echo "selected";} ?>>Male</option>
                <option value="Female" <?php if ($res['user_fmember_gender']=="Female"){echo "selected";} ?>>Female</option>
                <option value="Transgender" <?php if ($res['user_fmember_gender']=="Transgender"){echo "selected";} ?>>Transgender</option>
                </select></td>

                <td><input type="date" name="user_fmember_dob"  placeholder="Enter the DOB" required="required" class="form-control" value="<?php echo $res['user_fmember_dob'] ?>"></td>

                <td><select name="user_fmember_relation" class="form-control" required="required">
                <option value=" ">--Select--</option>
                <option value="Self"<?php if ($res['user_fmember_relation']=="Self"){echo "selected";} ?>>Self</option>
                <option value="Wife"<?php if ($res['user_fmember_relation']=="Wife"){echo "selected";} ?>>Wife</option>
                <option value="Mother" <?php if ($res['user_fmember_relation']=="Mother"){echo "selected";} ?>>Mother</option>
                <option value="Father"<?php if ($res['user_fmember_relation']=="Father"){echo "selected";} ?>>Father</option>
                <option value="Son"<?php if ($res['user_fmember_relation']=="Son"){echo "selected";} ?>>Son</option>
                <option value="Daughter"<?php if ($res['user_fmember_relation']=="Daughter"){echo "selected";} ?>>Daughter</option>
                <option value="Sister"<?php if ($res['user_fmember_relation']=="Sister"){echo "selected";} ?>>Sister</option>
                <option value="Brother"<?php if ($res['user_fmember_relation']=="Brother"){echo "selected";} ?>>Brother</option>
                </select></td>

               <!--  <td><a href="delete_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Remove Member')"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;&nbsp;
                <a href="update_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Update the Member Info')"><span class="glyphicon glyphicon-refresh"></span></a></td> -->
                <td><button type="submit" name="update" class="btn btn-primary">Update
        </button></td>
<!--         <a href="delete_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Remove Member')"><button type="button" class="btn btn-danger">Remove -->
               

   <?php }?>     
                 </tr>
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



<?php
if(isset($_POST["update"]))
{
    extract($_POST);
  // $sel=mysqli_query($con,"select * from user_family_member where user_fmember_id='".$_GET['Userm_id']."'");
  /*while($fetch=mysqli_fetch_array($sel))
  {
    $img=$fetch["photo"];
  }
  $isrc="photo1/".$img;
  unlike($isrc);*/
  // $del=mysqli_query($con,"delete from user_family_member where user_fmember_id='".$_GET['Userm_id']."'") or die(mysqli_error($con));
echo $old_fac_query="update user_family_member set
                user_fmember_name='".$user_fmember_name."',
                user_fmember_age='".$user_fmember_age."',
                user_fmember_gender='".$user_fmember_gender."',
                user_fmember_dob='".$user_fmember_dob."',
                user_fmember_relation='".$user_fmember_relation."'
                where user_fmember_id='".$_GET['Userm_id']."'";
$old_fac_update=mysqli_query($con,$old_fac_query) or die(mysqli_error($con));

  if($old_fac_update)
  {
    echo '<script type="text/javascript">';
    echo "alert('Updated Successfully.');";
    echo 'window.location.href="add_delete_member.php";';
    echo "</script>";
  }
  else
  {
    echo '<script type="text/javascript">';
    echo "alert('Not Updated.');";
    echo "</script>";
  }
}

?>




