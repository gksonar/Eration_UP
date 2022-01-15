<?php include"confi.php";
if(isset($_GET['Seller_id']))
{
  $sel=mysqli_query($con,"select * from seller_details where seller_id='".$_GET['Seller_id']."'");
  
  $del=mysqli_query($con,"delete from seller_details where seller_id='".$_GET['Seller_id']."'") or die(mysqli_error($con));
  if($del)
  {
    echo '<script type="text/javascript">';
    echo "alert('Seller deleted');";
    echo 'window.location.href="seller_List.php";';
    echo "</script>";
  }
  else
  {
    echo '<script type="text/javascript">';
    echo "alert('Seller not deleted');";
    echo "</script>";
  }
}

?>
<?PHP include"footer.php" ?>