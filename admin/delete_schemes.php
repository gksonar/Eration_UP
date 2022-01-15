<?php include"confi.php";
if(isset($_GET['s_id']))
{
  $sel=mysqli_query($con,"select * from schems where s_id='".$_GET['s_id']."'");
  
  $del=mysqli_query($con,"delete from schems where s_id='".$_GET['s_id']."'") or die(mysqli_error($con));
  if($del)
  {
    echo '<script type="text/javascript">';
    echo "alert('Scheme deleted');";
    echo 'window.location.href="schemes.php";';
    echo "</script>";
  }
  else
  {
    echo '<script type="text/javascript">';
    echo "alert('Scheme not deleted');";
    echo "</script>";
  }
}

?>
<?PHP include"footer.php" ?>