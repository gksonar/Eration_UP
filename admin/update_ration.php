<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Ration</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Ration</a></li>
                    </ol>
                </div>
            </div>
<?php
$i=1;
$sql=mysqli_query($con,"select * from ration_details where ration_id='".$_GET['Ration_id']."'");
while($res=mysqli_fetch_array($sql))
{
// $ration_id=$res['ration_id'];
?>

<div class="row">
 <div class="col-lg-3"></div>
   <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h3 align="center">Update Ration</h3><br>
            <div class="basic-form">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Ration Name</label>
                        <input type="text" name="ration_name" value="<?php echo $res['ration_name'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ration Rate</label>
                        <input type="text" name="ration_rate" value="<?php echo $res['ration_rate'] ?>" class="form-control">
                    </div>
                   <div class="form-group">
                        <label>Unit</label>
                        <select required="required" name="ration_unit" class="form-control">
                        <option value=" ">--Select Unit--</option>
                        <option value="Rs/kilogram" <?php if ($res['ration_unit']=="Rs/kilogram"){echo "selected";} ?>>Rs/kilogram</option>
                        <option value="Rs/Liter" <?php if ($res['ration_unit']=="Rs/Liter"){echo "selected";} ?>>Rs/Liter</option>
                </select>
                        <!-- <input type="text" name="ration_unit" class="form-control"> -->
                    </div>
                  

                                  
                    <center><button type="submit" name="update" class="btn btn-info">Update</button>
                   <a href="ration_list.php"><button type="button" class="btn btn-danger">Cancel</button></a></center>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div> 
<?php } ?>   
<?php include'footer.php'?>


<?php
if (isset($_POST['update'])) 
{
extract($_POST);
$ration_name=$ration_name;
$clg=mysqli_query($con,"select * from ration_details where ration_name='".$ration_name."' ") or die(mysqli_error());
$row11=mysqli_fetch_array($clg);
if(mysqli_num_rows($clg)>0)
{
echo '<script type="text/javascript">';
echo " alert('Ration Already Exists');";
echo 'window.location.href = "update_ration.php";';
echo '</script>';
}
else
{
echo $asd="update ration_details set
           ration_name='".$ration_name."',
           ration_rate='".$ration_rate."',
           ration_unit='".$ration_unit."'
           where ration_id='".$_GET['Ration_id']."'";
$up = mysqli_query($con,$asd) or die(mysqli_error());

if($up)
{
echo '<script type="text/javascript">';
echo " alert('Ration Updated');";
echo 'window.location.href = "ration_list.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Update Again.');";
echo 'window.location.href = "update_ration.php";';
echo '</script>';
}
}
}
?>
