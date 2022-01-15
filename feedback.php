<?php
session_start();
 ?>
<?php include'header.php'?>
<html>
<br><br><br><br>
     
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme2">
                    <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 36%;">FEEDBACK</h5>
                    
                </div>
                <div class="modal-body bg-theme1">
                    <form action="#" method="post" enctype="multipart/form-data">
                      
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">FEEDBACK</label>
                            <textarea name="t1" class="form-control border"  placeholder="Enter Your Feedback" required=""/></textarea>
                        </div>
                        
                        <div class="right-w3l">
                            <input type="submit" name="login" class="form-control border text-white bg-theme1" value="submit">
                        </div>

                                               
                    </form>
                </div>
            </div>
        </div>
       
   
    <br><br><br>
      </html>
          
<?php
if (isset($_POST['login'])) 
{

extract($_POST);
 
if($user_id=$res['user_id'])
   {
echo $asd = mysqli_query($con,"insert into user_ration_form_details(feedback) values ('$t1')") or die(mysql_error());

if($asd)
{
echo '<script type="text/javascript">';
echo " alert('Feedback Submitted');";
echo 'window.location.href = "user_opp.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Feedback does not Submit Plz.....Try Again ');";
 echo 'window.location.href = "feedback.php";';
echo '</script>';
}
}
}
?>


