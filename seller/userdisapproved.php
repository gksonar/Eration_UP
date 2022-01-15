<?php
include "confi.php";

         
         
          $disapprove = mysqli_query($con,"update user_ration_form_details set user_status = 'Disapproved' where user_id='".$_GET['User_id']."' ")or die(mysqli_error($con));
$back="javascript:history.back()";
  if($disapprove)

          {

            echo '<script type="text/javascript">';
            echo "alert('User Disapproved');";
             echo 'window.location.href = "'.$back.'";';
             
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('User Not Disapprove');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>