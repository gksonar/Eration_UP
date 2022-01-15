<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Ration</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Ration Product</a></li>
                    </ol>
                </div>
            </div>



<div class="row">
 <div class="col-lg-3"></div>
   <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h3 align="center">Add Ration Product</h3><br>
            <div class="basic-form">
                <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                <label>Card Type</label>
                <select name="r_id" required="required" class="form-control input-sm" >
                <option>---Select Card Type---</option>
                <?php
                $query2 = mysqli_query($con,"select * from rationtype") or die(mysqli_error($con));

                while ($fetch2=mysqli_fetch_array($query2)) 
                {
                    extract($fetch2);
                ?>
                <option value="<?php echo $fetch2['r_id'];?>"><?php echo $fetch2['rationname'];?></option>
            <?php } ?>
                </select>
                </div>
                    <div class="form-group">
                        <label>Ration Name</label>
                        <input type="text" name="ration_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Rate</label>
                        <input type="text" name="ration_rate" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Unit</label>
                        <select required="required" name="ration_unit" class="form-control">
                        <option value=" ">--Select Unit--</option>
                        <option value="Rs/kilogram">Rs/kilogram</option>
                        <option value="Rs/Liter">Rs/Liter</option>
                </select>
                        <!-- <input type="text" name="ration_unit" class="form-control"> -->
                    </div>
                  
                    <center><button type="submit" name="submit" class="btn btn-primary">Add</button>
                   <a href="ration_list.php"><button type="button" class="btn btn-danger">Cancel</button></a></center>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>    
<?php include'footer.php'?>


<?php
if (isset($_POST['submit'])) 
{
extract($_POST);
// $ration_name=$ration_name;
//         $clg=mysqli_query($con,"select * from ration_details where ration_name='".$ration_name."' ") or die(mysqli_error());
//         $row11=mysqli_fetch_array($clg);
//         if(mysqli_num_rows($clg)>0)
//          {
//             echo '<script type="text/javascript">';
//             echo " alert('Ration Already Exists');";
//             echo 'window.location.href = "add_ration.php";';
//             echo '</script>';
//          }

//  else{
echo $asd = mysqli_query($con,"insert into ration_details(r_id,ration_name,ration_rate,ration_unit) values ('$r_id','$ration_name','$ration_rate','$ration_unit')") or die(mysql_error());
if($asd)
{
echo '<script type="text/javascript">';
echo " alert('Ration Added');";
echo 'window.location.href = "ration_list.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Add Again.');";
echo 'window.location.href = "add_ration.php";';
echo '</script>';
}
}
// }
?>