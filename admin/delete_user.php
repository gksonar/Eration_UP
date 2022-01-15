<?php include"confi.php";
if(isset($_GET['User_id']))
{
  $sel=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_GET['User_id']."'");
  /*while($fetch=mysqli_fetch_array($sel))
  {
    $img=$fetch["photo"];
  }
  $isrc="photo1/".$img;
  unlike($isrc);*/
  $del=mysqli_query($con,"delete from user_ration_form_details where user_id='".$_GET['User_id']."'") or die(mysqli_error($con));
  if($del)
  {
    echo '<script type="text/javascript">';
    echo "alert('user deleted');";
    echo 'window.location.href="registered_user.php";';
    echo "</script>";
  }
  else
  {
    echo '<script type="text/javascript">';
    echo "alert('user not deleted');";
    echo "</script>";
  }
}

?>
<?PHP include"footer.php" ?>