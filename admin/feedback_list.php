<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    
                </div>
            </div>
<div class="row">
 <div class="col-lg-3"></div>
   <div class="col-lg-6">
    
</div>
</div>

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
                                                <th scope="col">User Name</th>
                                                <th style="width: 20%;text-align: center;" scope="col">Feedback</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                        <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"select * from user_ration_form_details");
                                          while($res=mysqli_fetch_assoc($sql))
                                          {
                                            $feedback=$res['feedback'];
                                          ?>
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $res['user_local_name']; ?></td>
                                                <td><?php echo $res['feedback']; ?></td>
                                                
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
