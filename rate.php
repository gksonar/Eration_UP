<?php
include 'confi.php';
	echo $str = $_POST['ration_name'];

	

	   $select1=mysqli_query($con,"select * from ration_details where ration_id='".$str."' ") or die(mysqli_error($con));
?>

	 <!-- <option value="">--Select Rate--</option> -->
<?php 	  
	 while($row=mysqli_fetch_array($select1))
{
	?>

	 <option value="<?php echo $row['ration_rate'];?>"><?php echo $row['ration_rate'];?></option>
	<?php

	}	 
		
//}
?>