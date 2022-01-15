<?php
session_start();
 ?>
<?php include'header.php'?>

<br><br><br><br>
     
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme2">
                    <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 36%;">Verify</h5>
                    
                </div>
                <div class="modal-body bg-theme1">
                    <form action="#" method="post" enctype="multipart/form-data">
                      
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Adhar Number </label>
                            <input type="text" class="form-control border"  maxlength="12" pattern="[0-9]+"  placeholder="Enter Adhar Number Of Family Head" name="head_of_family_adhar"
                                required="">
                        </div>
                        
                        <div class="right-w3l">
                            <input type="submit" name="login" class="form-control border text-white bg-theme1" value="Verify">
                        </div>

                       
                        
                    </form>
                </div>
            </div>
        </div>
       
   
    <br><br><br>
          
   <?php include'footer.php' ?>

   <?php
    include'confi.php';

if(isset($_POST['login']))
{                                                          

  $query="select * from user_ration_form_details where head_of_family_adhar='".$_POST['head_of_family_adhar']."' and user_id='".$_SESSION['user_id']."'";

 $res=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($res)>0)
      {
          
            $row=mysqli_fetch_array($res);
            extract($row);

            $_SESSION['user_id']=$row['user_id'];
            $_SESSION['user_email']=$row['user_email'];
         
                  echo "<script>";
                  echo "alert('Verified');";
                   echo "window.location.href='user_opp.php';";
                   echo "</script>";

        
        
      }
     else
     {

                   echo "<script>";
          echo "alert('Plz.... Apply for new Ration Card ');";
          echo "window.location.href='user_opp.php';";
          echo "</script>";
    }
}
?>
