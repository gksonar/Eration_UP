<?php
session_start();
 ?>
<?php include'header.php'?>

<br><br><br><br>
     
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme2">
                    <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 36%;">User Login</h5>
                    
                </div>
                <div class="modal-body bg-theme1">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Username</label>
                            <input type="email" class="form-control border" placeholder="Enter Username " name="user_email"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label text-white">Password</label>
                            <input type="password" class="form-control border" placeholder="****" name="user_password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" name="login" class="form-control border text-white bg-theme1" value="Login">
                        </div>

                        <!-- <div class="row sub-w3l my-3">
                            <div class="col sub-w3layouts">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-white">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right text-dark">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>
                        </div> -->
                        <br>
                        <p class="text-center text-white">Don't have an account?
                            <a href="user_registration.php" data-target="#exampleModal1" class="text-theme1 font-weight-bold">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
       
   
    <br><br><br>
                  <center><a href="index.php"><b style="color: #36588e">Home Page</b></a></center>
          
   <?php include'footer.php' ?>

   <?php
    include'confi.php';

if(isset($_POST['login']))
{

 echo $query="select * from user_ration_form_details where user_email='".$_POST['user_email']."' and user_password='".$_POST['user_password']."'and user_status='Approved' ";

 $res=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
      {
             $row=mysqli_fetch_array($res);
            extract($row);

            $_SESSION['user_id']=$row['user_id'];
         $_SESSION['user_email']=$row['user_email'];
         
                  echo "<script>";
                  //echo "alert('Login Successfully');";
                   echo "window.location.href='user_opp.php';";
                   echo "</script>";
        
        
      }
     else
     {
          echo "<script>";
          echo "alert('Email  or Password is Invalid');";
          echo "window.location.href='index.php';";
          echo "</script>";
    }
}
?>
