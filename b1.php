<?php 
session_start();
include'header.php';

?>
<script type="text/javascript">
    function sum()
{
    var bp1=parseInt(document.getElementById('ration_rate').value);
    var bq1=parseInt(document.getElementById('quantity').value);
   var total1=parseFloat(bp1)*parseFloat(bq1);
    var total2=parseFloat(total1).toFixed(2);
    document.getElementById('tt1').value=total2;
}
</script>
    <!-- //header -->
    <!-- inner banner -->
    <div class="inner-banner-w3ls">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center bg-theme">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page">Book Ration</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- contact -->
    <div class="contact-wthree" id="contact">
        <div class="container pt-md-5 pt-4">
            <div class="text-center pb-4">
                <h4 class="w3pvt-title">Booking Ration</h4>
                <!-- <span class="sub-title">Book your Ration here</span> -->
            </div>
            <!-- <div class="col-12 contact-left-w3layouts pt-md-4">
                <div class="w3layouts-contact-top text-center">
                    <p>1234k Avenue,Block-4,New York City.</p>
                    <hr>
                    <p>Donec mi nulla, auctor nec sem a, ornare auctor mi. Sed mi tortor, commodo a felis in,
                        fringilla
                        tincidunt
                        nulla. Vestibulum volutpat non eros ut vulpuuctor nec sem </p>
                </div>
            </div> -->
            <div class="row py-lg-5 py-sm-4 pt-4">
                <div class="col-12 mb-4">
                    <div class="text-center">
                        <h5><span class="sub-title">Ration Number:</span>26265655655</h5>
                    </div>
                    <hr>
                    <center><button style="line-height: 2.5em" type="submit" name="submit" data-toggle="modal" aria-pressed="false"
                                        data-target="#exampleModal" class="btn btn-w3layouts btn-block  bg-theme1 text-white w-100 font-weight-bold text-uppercase">Book Ration</button></center><br><br>

                                         <h2 align="center">List of Booked Ration</h2><br><br>
                <div class="table-responsive">
                <table class="table table-striped table-bordered ">
                <thead>
                <tr>
                <th>Sr.No</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Total</th>
                <th> Status</th>
                
                <!-- <th>Relation</th> -->
                <th style="margin-left: 7%">Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                $i=1;
                $dfg="select r.*,b.* from ration_details r, user_ration_booking b where b.user_id='".$_SESSION['user_id']."' and r.ration_id=b.ration_product_name";
                $sql=mysqli_query($con,$dfg);
                while($res=mysqli_fetch_array($sql))
                {
                $ration_booking_id=$res['ration_booking_id'];
                ?>
                <tr>
                <td><?php echo $i;$i++; ?></td>

                <td><?php echo $res['ration_product_name']; ?></td>
                <td><?php echo $res['ration_product_quantity']; ?></td>
                <td><?php echo $res['ration_product_total']; ?></td>
                 <td><?php echo $res['booking_status']; ?></td>

                <!-- <td><?php echo $res['user_fmember_relation']; ?></td> -->

               <!--  <td><a href="delete_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Remove Member')"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;&nbsp;
                <a href="update_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Update the Member Info')"><span class="glyphicon glyphicon-refresh"></span></a></td> -->
                <td><!-- <a href="update_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>"><button type="button"  class="btn btn-primary">Update
        </button></a> -->
         <center><a href="delete_book_ration.php?Ration_book_id=<?php echo"$ration_booking_id"; ?>" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-trash " style="color: red"></i></a></center>
<!--         <a href="delete_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Remove Member')"><button type="button" class="btn btn-danger">Remove</button></a> -->
                </tr>

                <?php }?>

                </tbody>
                </table>
                </div>
                </div>

            </div>
        </div>
    </div>
    <!-- //contact -->
    <!-- footer top --><br><br><br><br>
   <?php include'footer.php'?>

  

<?php
if (isset($_POST['submit'])) 
{
extract($_POST);
echo $asd = mysqli_query($con,"insert into user_ration_booking(ration_product_name,ration_product_quantity,ration_product_total) 
    values ('".$user_id."','$ration_product_name','$ration_product_quantity','$ration_product_total')") or die(mysql_error());
if($asd)
{
echo '<script type="text/javascript">';
echo " alert('Ration Added');";
echo 'window.location.href = "b1.php";';
echo '</script>';
}  
else
{
echo '<script type="text/javascript">';
echo " alert('Book Again.');";
// echo 'window.location.href = "add_seller.php";';
echo '</script>';
}

}
?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-theme2">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-theme1">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Product Name</label>
                            <select  required="required" id="ration_name"  class="form-control" name="ration_product_name">
                                            <option value="">---Select---</option>
                                        <?php
                                                    $query = mysqli_query($con,"select * from ration_details order by ration_name asc") or die(mysqli_error($con));

                                                    while ($fetch1=mysqli_fetch_array($query)) 
                                                    {
                                                        extract($fetch1);
                                                    ?>
                                                    <option value="<?php echo $fetch1['ration_id'];?>"><?php echo $fetch1['ration_name'];?></option>
                                                <?php } ?>
                                        </select>

                                    <script type="text/javascript">

                                      $(document).ready(function(){
                                        $("select#ration_name").change(function(){
                                              var u = $("#ration_name option:selected").val();
                                          
                                              $.ajax({
                                                  type: "POST",
                                                  url: "rate.php", 
                                                  data: { ration_name : u  } 
                                              }).done(function(data){
                                                  $("#ration_rate").html(data);
                                              });
                                          });
                                      });

                                    </script>

                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label text-white">Rate</label>
                            <!-- <input type="password" class="form-control border"  name="ration_product_rate" required=""> -->
                             <select  required="required" id="ration_rate"  class="form-control" name="ration_product_rate" readonly>
                                            <option value=""></option> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Quantity</label>
                            <input type="text" class="form-control border" id="quantity" onkeyup="sum()" name="ration_product_quantity" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Total Rate</label>
                            <input type="text" class="form-control border"  name="ration_product_total" id="tt1"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" name="submit" class="form-control border text-white bg-theme1" value="Login">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

