<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Ration</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Sell Ration</a></li>
                    </ol>
                </div>
            </div>
<div class="row">
 <div class="col-lg-3"></div>
   <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
           <h3 align="center">Allocate Schedule</h3><br>
            <div class="basic-form">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Allocate Schedule</label>
                        <input type="date" name="allocate_schedule" class="form-control">
                    </div>
                    <center><button type="submit" name="submit" class="btn btn-primary">Allocate</button>
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
 echo $query="update user_ration_booking set 
            allocate_schedule='".$allocate_schedule."',
            allcate_status='Allocate'
          where user_id='".$_GET['User_id']."'";

         $asd=mysqli_query($con,$query) or die (mysqli_error($con));
if($asd)
{
  $asd=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_GET['User_id']."'") or die(mysqli_error($con));
$res=mysqli_fetch_assoc($asd);

extract($res);
 //message api
 $msg="Hi ".$user_local_name." Your Schedule has been Fixed To Buy The Ration";
 $mobile=$user_mobile_no;
 $ch = "ERATIN";
$apiurl ="http://sms.happysms.in/api/sendhttp.php?authkey=242446A57b8VBMQpOd5bc06387&mobiles=$mobile&message=$msg&sender=$ch&route=4&country=91";

      $ch = curl_init($apiurl);

      if($method == "GET")
      {
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$apiurl);
      }
      else
      {
        $get_url = $apiurl;
        curl_setopt($ch, CURLOPT_POST,0);
        curl_setopt($ch, CURLOPT_URL, $get_url);
      }

      curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
      curl_setopt($ch, CURLOPT_HEADER,0);
      // DO NOT RETURN HTTP HEADERS
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
      // RETURN THE CONTENTS OF THE CALL
      $return_val = curl_exec($ch);

      if($return_val=="")
      {
      echo "Process Failed";
      }

  
echo '<script type="text/javascript">';
echo " alert('Schedule Allocate');";
echo 'window.location.href = "ration_request_list.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Add again.');";
echo 'window.location.href = "sellration.php";';
echo '</script>';
}

}
?>


