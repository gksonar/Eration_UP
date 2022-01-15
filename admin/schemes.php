<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Schemes</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Schemes</a></li>
                    </ol>
                </div>
            </div>
<div class="row">
 <div class="col-lg-3"></div>
   <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
            <h3 align="center">Add Schemes</h3><br>
            <div class="basic-form">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Add Schemes</label>
                        <input type="text" name="s_name" class="form-control">
                    </div>
                  
                    <center><button type="submit" name="submit" class="btn btn-primary">Add</button>
                   <a href="schemes.php"><button type="button" class="btn btn-danger">Cancel</button></a></center>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-1"></div>
   <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <div>
                            <div class="input-group input-group-sm" style="width: 20%;margin-left: 77%">
                                  <input type="text" id="myInput" name="table_search" class="form-control pull-right" placeholder="Search">
                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" style="line-height: 1.8;"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                            </div><br>
                                <h3 align="center">Schemes List</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle">
                                        <thead>
                                            <tr>
                                                <th style="width: 13%" scope="col">Sr.No</th>
                                                <th scope="col">Schemes Name</th>
                                                <th style="width: 20%;text-align: center;" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                        <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"select * from schems");
                                          while($res=mysqli_fetch_assoc($sql))
                                          {
                                            $s_id=$res['s_id'];
                                          ?>
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $res['s_name']; ?></td>
                                                <td>
                                                    <span>
                                                    <a href="update_schem.php?s_id=<?php echo"$s_id";?>" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-pencil color-muted m-r-5" style="margin-left: 23%"></i></a>&nbsp;

                                                    
                                                    <a href="delete_schems.php?s_id=<?php echo"$s_id";?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger" style="margin-left: 10%"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
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
echo $asd = mysqli_query($con,"insert into schems(s_name) values ('$s_name')") or die(mysql_error());
if($asd)
{
echo '<script type="text/javascript">';
echo " alert('Scheme Added');";
echo 'window.location.href = "schemes.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Add again.');";
echo 'window.location.href = "schemes.php";';
echo '</script>';
}

}
?>






<!-- <?php 
 
 // include'confi.php';
// if (isset($_POST['submit'])) 
{
// extract($_POST);
// echo $asd = mysqli_query($con,"insert into user_ration_form_details(user_local_name,user_adhar_name,user_adhar_no,user_mobile_no,user_email,user_password,user_dob,user_gender) values ('$user_local_name','$user_adhar_name','$user_adhar_no','$user_mobile_no','$user_email','$user_password','$user_dob','$user_gender')") or die(mysql_error());
// if($asd)
{
// echo '<script type="text/javascript">';
// echo " alert('Registered Successfully');";
// echo 'window.location.href = "user_login.php";';
// echo '</script>';
}  
// else
{
// echo '<script type="text/javascript">';
// echo " alert('Fill Again The Registration Form.');";
// echo 'window.location.href = "user_registration.php";';
// echo '</script>';
}

}
?> -->
