<?php
include "confi.php";
 $approve = mysqli_query($con,"update user_ration_form_details set user_status ='Verified' where user_id='".$_GET['User_id']."'")or die(mysqli_error($con));

$back="javascript:history.back()";
  if($approve)

          {

            echo '<script type="text/javascript">';
            echo "alert('User Ration Card Verified Successfully');";
             echo 'window.location.href = "'.$back.'";';
             
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('User Not Approve');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>