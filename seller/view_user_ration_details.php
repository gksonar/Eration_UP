<?php include'header.php'?>

<!--**********************************
Content body start
***********************************-->
<div class="content-body">
<br><br>
<!--  <div class="row page-titles mx-0">
<div class="col p-md-0">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
<li class="breadcrumb-item"><a href="javascript:void(0)">User View</a></li>
<li class="breadcrumb-item active"><a href="javascript:void(0)">RationDetails</a></li>
</ol>
</div>
</div> -->
<!-- row -->
<?php 

$asd = mysqli_query($con,"select * from user_ration_form_details where user_id='".$_GET['User_id']."' ") or die (mysqli_error($con));
$Total = mysqli_num_rows($asd);
?>
<?php while($fetch=mysqli_fetch_array($asd)){
extract($fetch)
?>
<div class="container-fluid">
<div class="row">
<!-- <div class="col-lg-2"></div> -->
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<h4 class="card-title">Ration Details</h4>
<p class="text-muted"><code></code>
</p>
<div id="accordion-three" class="accordion">
<div class="card">
<div class="card-header">
    <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4"><i class="fa" aria-hidden="true"></i>Personal Information</h5>
</div>
<div id="collapseOne4" class="collapse show" data-parent="#accordion-three">
    <div class="card-body">
    <p><b>Head of Family Member Name:</b><a style="margin-left: 2%"><?php echo $head_of_family_name;?></a></p>
    <p><b>Full Name (as per aadhaar):</b><a style="margin-left:4%"><?php echo $head_of_family_adhar_name;?></a></p>
    <!-- <p><b>Age:</b><a style="margin-left: 17%"><?php echo $head_of_family_age;?></a></p> -->
    <p><b>BirthDate:</b><a style="margin-left: 14%"><?php echo $user_dob;?></a></p>
    <p><b>Gender:</b><a style="margin-left: 15%"><?php echo $user_gender;?></a></p>
    <!-- <p><b>Nationality:</b><a style="margin-left: 13%"><?php echo $head_of_family_nationality;?></a></p> -->
    <p><b>Local Address:</b><a style="margin-left: 11%"><?php echo $user_addreess1;?></a></p>
    <p><b>Permanent Address:</b><a style="margin-left: 8%"><?php echo $user_addreess2;?></a></p>
    <p><b>Job Profile:</b><a style="margin-left: 13%"><?php echo $head_of_family_job;?></a></p>
    <p><b>Area:</b><a style="margin-left: 17%"><?php echo $user_area;?></a></p>
    
    </div>
</div>
</div>
<div class="card">
<div class="card-header">
    <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5"><i class="fa" aria-hidden="true"></i> Bank Account Details, Ratoion Card Type & Gas Connection Details</h5>
</div>
<div id="collapseTwo5" class="collapse" data-parent="#accordion-three">
    <div class="card-body">
        <h6>Bank Details:</h6>
    <p><b>Bank Name:</b><a style="margin-left: 7%"><?php echo $user_bank_name;?></a></p>
    <p><b>Branch Name:</b><a style="margin-left:6%"><?php echo $user_branch_name;?></a></p>
    <p><b>Account Number:</b><a style="margin-left: 4%"><?php echo $user_account_no;?></a></p>
    <p><b>IFSC Code:</b><a style="margin-left: 8%"><?php echo $user_bank_ifsc_code;?></a></p><br>
    <h6>Ration Card Type:</h6>
    <!-- <p><b>RC Type:</b><a style="margin-left: 9%"><?php echo $user_select_card_type;?></a></p><br> -->
    <h6>Gas Connection Details:</h6>
    <p><b>Gas Company Name:</b><a style="margin-left: 2%"><?php echo $user_gas_cname;?></a></p>
    <p><b>Consumer Number:</b><a style="margin-left:3%"><?php echo $user_consumer_no;?></a></p>
    </div>
</div>
</div>
<div class="card">
<div class="card-header">
    <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6"><i class="fa" aria-hidden="true"></i> Documents & Family Member Details</h5>
</div>
<div id="collapseThree6" class="collapse" data-parent="#accordion-three">
    <div class="card-body">
        <h6>Document Images:</h6>
        <a><b>Adhar Card Photo:&nbsp;&nbsp;</b><img src="../images/<?php echo $fetch['user_adhar_card_photo']?>" height="100" width="100" /></a>&nbsp;&nbsp;
        <a><b>PassPort Photo:&nbsp;&nbsp;</b><img src="../images/<?php echo $fetch['user_pass_size_photo']?>" height="100" width="100" /></a>&nbsp;&nbsp;
        <a><b>Signature Photo:&nbsp;&nbsp;</b><img src="../images/<?php echo $fetch['user_sign_photo']?>" height="100" width="100" /></a>&nbsp;&nbsp;
        <!-- <a><b>Family Photo:&nbsp;&nbsp;</b><img src="../images/<?php //echo $fetch['user_family_photo']?>" height="100" width="100" /></a> --><br><br><br><br>
           
           <h6>Income Certificate:</h6>
           <a href="../fileup/<?php echo $fetch['user_income_certificate']?>" view><?php echo $fetch['user_income_certificate']?></a>
           <h6>Address Proof:</h6>
           <a href="../address proof/<?php echo $fetch['user_family_photo']?>" view><?php echo $fetch['user_family_photo']?></a>
           <!-- <a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a> -->


<?php } ?>                                                   <br>
        <h6>List of Family Member:</h6>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Birth Date</th>
                    <th>Relation</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    $i=1;
                $sql=mysqli_query($con,"select * from user_family_member where user_id='".$_GET['User_id']."'");
                while($res=mysqli_fetch_assoc($sql))
                {
                // $user_id=$res['user_id'];
                ?>
                <tr>
                    <td><?php echo $i;$i++; ?></td>
                    <td><?php echo $res['user_fmember_name']; ?></td>
                    <td><?php echo $res['user_fmember_age']; ?></td>
                    <td><?php echo $res['user_fmember_gender']; ?></td>
                    <td><?php echo $res['user_fmember_dob']; ?></td>
                    <td><?php echo $res['user_fmember_relation']; ?></td>
                </tr>

                <?php }?>

                </tbody>
            </table>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div>
    <center><a><button class="btn btn-info">Allocate Schedule</button></a></center>
</div>
</div>
<!-- #/ container -->

</div>
<!--**********************************
Content body end
***********************************-->


<?php include'footer.php'?>

