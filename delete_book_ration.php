<?php include"confi.php";
if(isset($_GET['Ration_book_id']))
{
  $sel=mysqli_query($con,"select * from user_ration_booking where ration_booking_id='".$_GET['Ration_book_id']."'");
  
  $del=mysqli_query($con,"delete from user_ration_booking where ration_booking_id='".$_GET['Ration_book_id']."'") or die(mysqli_error($con));
  if($del)
  {
    echo '<script type="text/javascript">';
    echo "alert('Booking deleted');";
    echo 'window.location.href="book_ration_form.php";';
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