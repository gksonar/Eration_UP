<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Area</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Update Area</a></li>
                    </ol>
                </div>
            </div>


<?php
$i=1;
$sql=mysqli_query($con,"select * from area where area_id='".$_GET['Area_id']."'");
while($res=mysqli_fetch_array($sql))
{
// $area_id=$res['area_id'];
?>
<div class="row">
 <div class="col-lg-3"></div>
   <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h3 align="center">Add Area</h3><br>
            <div class="basic-form">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Update Area</label>
                        <input type="text" name="area_name" value="<?php echo $res['area_name']?>" class="form-control">
                    </div>
                  
                    <center><button type="submit" name="update" class="btn btn-info">Update</button>
                   <a href="area_list.php"><button type="button" class="btn btn-danger">Cancel</button></a></center>
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
$area_name=$area_name;
$clg=mysqli_query($con,"select * from area where area_name='".$area_name."' ") or die(mysqli_error());
$row11=mysqli_fetch_array($clg);
if(mysqli_num_rows($clg)>0)
{
echo '<script type="text/javascript">';
echo " alert('Area Already Exists');";
echo 'window.location.href = "update_area.php";';
echo '</script>';
}

 else{
echo $asd="update area set
           area_name='".$area_name."'
           where area_id='".$_GET['Area_id']."'";

echo $up = mysqli_query($con,$asd) or die(mysql_error());

if($up)
{
echo '<script type="text/javascript">';
echo " alert('Area updated');";
echo 'window.location.href = "area_list.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Update again.');";
echo 'window.location.href = "add_area.php";';
echo '</script>';
}
}
}
?>
