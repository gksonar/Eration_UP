<?php include"confi.php";
if(isset($_GET['Area_id']))
{
  $sel=mysqli_query($con,"select * from area where area_id='".$_GET['Area_id']."'");
  
  $del=mysqli_query($con,"delete from area where area_id='".$_GET['Area_id']."'") or die(mysqli_error($con));
  if($del)
  {
    echo '<script type="text/javascript">';
    echo "alert('Area deleted');";
    echo 'window.location.href="area_List.php";';
    echo "</script>";
  }
  else
  {
    echo '<script type="text/javascript">';
    echo "alert('Area not deleted');";
    echo "</script>";
  }
}

?>
<?PHP include"footer.php" ?>