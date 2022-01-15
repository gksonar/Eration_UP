<?php
include "confi.php";

         
         
          $disapprove = mysqli_query($con,"update user_ration_booking set booking_status = 'Rejected' where user_id='".$_GET['Request_booking_id']."' ")or die(mysqli_error($con));
$back="javascript:history.back()";
  if($disapprove)

          {

            echo '<script type="text/javascript">';
            echo "alert('Booking Rejected');";
             echo 'window.location.href = "'.$back.'";';
             
            echo "</script>";

          }
         else
         {
            echo '<script type="text/javascript">';
            echo "alert('Booking not Rejected');";
            echo 'window.location.href = "'.$back.'"';
            echo "</script>";
             
          }

 ?>