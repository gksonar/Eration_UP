<?php include"confi.php";
if(isset($_GET['Userm_id']))
{
  $sel=mysqli_query($con,"select * from user_family_member where user_fmember_id='".$_GET['Userm_id']."'");
  /*while($fetch=mysqli_fetch_array($sel))
  {
    $img=$fetch["photo"];
  }
  $isrc="photo1/".$img;
  unlike($isrc);*/
  $del=mysqli_query($con,"delete from user_family_member where user_fmember_id='".$_GET['Userm_id']."'") or die(mysqli_error($con));
  if($del)
  {
    echo '<script type="text/javascript">';
    echo "alert('Member deleted');";
    echo 'window.location.href="add_delete_member.php";';
    echo "</script>";
  }
  else
  {
    echo '<script type="text/javascript">';
    echo "alert('Member not deleted');";
    echo "</script>";
  }
}

?>
<?PHP INCLUDE"footer.php" ?>