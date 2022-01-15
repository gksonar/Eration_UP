<?php include"confi.php";
if(isset($_GET['Ration_id']))
{
  $sel=mysqli_query($con,"select * from ration_details where ration_id='".$_GET['Ration_id']."'");
  
  $del=mysqli_query($con,"delete from ration_details where ration_id='".$_GET['Ration_id']."'") or die(mysqli_error($con));
  if($del)
  {
    echo '<script type="text/javascript">';
    echo "alert('Ration deleted');";
    echo 'window.location.href="ration_List.php";';
    echo "</script>";
  }
  else
  {
    echo '<script type="text/javascript">';
    echo "alert('Ration not deleted');";
    echo "</script>";
  }
}

?>
<?PHP include"footer.php" ?>