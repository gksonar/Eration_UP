<?php
if(isset($_POST["head_of_family_income"])){
	 $str = $_POST['head_of_family_income'];
				
     include "confi.php"; 

	   $select1=mysqli_query($con,"select * from rationtype where i_id='".$str."'") or die(mysqli_error($con));

	   ?>
	   <?php
	   
	  
	 while($sele1=mysqli_fetch_array($select1))
	{
	echo"<option value=\"{$sele1['i_id']}\">{$sele1['rationname']}</option>";
	}	 
		
}
?>