<?php include"confi.php";
if(isset($_GET['User_id']))
{
  $sel=mysqli_query($con,"select * from user_ration_booking where user_id='".$_GET['User_id']."'");
  
  $del=mysqli_query($con,"delete from user_ration_booking where user_id='".$_GET['User_id']."'") or die(mysqli_error($con));
  if($del)
  {
    echo '<script type="text/javascript">';
    echo "alert('Ration Sell Successfully');";
    echo 'window.location.href="ration_request_list.php";';
    echo "</script>";
  }
  else
  {
    echo '<script type="text/javascript">';
    echo "alert('Booking not deleted');";
    echo "</script>";
  }
}

?>
<?PHP include"footer.php" ?>