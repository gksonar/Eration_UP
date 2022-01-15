<?php 
session_start();
?>
<?php include'confi.php'?>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <title> ORCS| Public Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Versatile Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
    <!-- <link  rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
    
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
       <style>
        .form_box{width:500px; margin:0 auto; margin-top:10px; margin-bottom: 40px; text-align: left;}
        .fileinput{margin-left:0px;}
        .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align:left;}
        .preview_box img{max-width: 150px; max-height: 150px;}
    </style>
       
        <style type="text/css">
            .input-group-addon {
                                padding: 6px 12px;
                                font-size: 15px;
                                font-weight: 400;
                                line-height: 1;
                                color: #555;
                                font-family: Arial;
                                text-align: center;
                                /*background-color: #eee;*/
                                border: 1px solid #ccc;
                                    /*border-right-color: rgb(204, 204, 204);
                                    border-right-style: solid;
                                    border-right-width: 1px;
                                border-radius: 4px;
                                    border-top-right-radius: 4px;
                                    border-bottom-right-radius: 4px;*/
                            }
                            


        </style>

        <style type="text/css">
            /*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
    /*background: #6441A5;  fallback for old browsers */
    background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
}

body {
    font-family: montserrat, arial, verdana;
    background: transparent;
}

/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 30px;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 80%;
    margin: 0 10%;

    /*stacking fieldsets above each other*/
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

/*inputs*/
#msform input, #msform textarea {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #ee0979;
    outline-width: 0;
    transition: All 0.5s ease-in;
    -webkit-transition: All 0.5s ease-in;
    -moz-transition: All 0.5s ease-in;
    -o-transition: All 0.5s ease-in;
}

/*buttons*/
#msform .action-button {
    width: 100px;
    background: #ee0979;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
}

#msform .action-button-previous {
    width: 100px;
    background: #C5C5F1;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

/*headings*/
.fs-title {
    font-size: 18px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-bottom: 10px;
    letter-spacing: 2px;
    font-weight: bold;
}

.fs-subtitle {
    font-weight: normal;
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}

/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
}

#progressbar li {
    list-style-type: none;
    color: white;
    text-transform: uppercase;
    font-size: 9px;
    width: 33.33%;
    float: left;
    position: relative;
    letter-spacing: 1px;
}

#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 24px;
    height: 24px;
    line-height: 26px;
    display: block;
    font-size: 12px;
    color: #333;
    background: white;
    border-radius: 25px;
    margin: 0 auto 10px auto;
}

/*progressbar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: white;
    position: absolute;
    left: -50%;
    top: 9px;
    z-index: -1; /*put it behind the numbers*/
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #ee0979;
    color: white;
}


/* Not relevant to this form */
.dme_link {
    margin-top: 30px;
    text-align: center;
}
.dme_link a {
    background: #FFF;
    font-weight: bold;
    color: #ee0979;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 5px 25px;
    font-size: 12px;
}

.dme_link a:hover, .dme_link a:focus {
    background: #C5C5F1;
    text-decoration: none;
}
        </style>
</head>

<body >
        <!-- header top -->
        <!-- <div class="header-top text-md-left text-center">
            <div class="container">
                <div class="d-md-flex justify-content-between">
                    <p class="text-capitalize">if you have any question? Call Us +12 345 678 </p>
                    <ul class="social-icons">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- //header top -->
        <!-- header-middle -->
        <!-- <div class="middle-header">
            <div class="container">
                <div class="row">
                    <div class="mx-auto d-flex">
                        <ul class="timer-wthree"><br><br>
                            <li>days<span id="days"></span></li>
                            <li>Hours<span id="hours"></span></li>
                            <li>Minutes<span id="minutes"></span></li>
                            <li>Seconds<span id="seconds"></span></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div> -->
        <!-- //header middle -->
        <!-- navigation -->

    <!-- contact -->

    <div class="contact-wthree" id="contact">
        <div class="container pt-md-5 pt-4">
            <a href="newuser.php"><button style="color: white" type="button" class="btn btn-warning"><b>My Profile</b></button></a>
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
                        <?php
            $sql=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_SESSION['user_id']."'");
            while($res=mysqli_fetch_assoc($sql))
            {

            ?>
            <h3 align="center" style="color:#3b67b3 ">Ration Number:<?php echo $res['ration_number'];?></h3><?php } ?>
                    </div>
                    <hr>
                    <center><button style="line-height: 2.5em;" type="submit" name="submit" data-toggle="modal" aria-pressed="false"
                                        data-target="#exampleModal" class="btn btn-info text-white font-weight-bold text-uppercase">Book Ration</button></center><br><br>

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
                <th style="margin-left: 7%">Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                $i=1;
                $dfg="select r.*,b.* from ration_details r, user_ration_booking b where b.user_id='".$_SESSION['user_id']."' and r.ration_name=b.ration_product_name";
                $sql=mysqli_query($con,$dfg);
                while($res=mysqli_fetch_array($sql))
                {
                $ration_booking_id=$res['ration_booking_id'];
                ?>
                <tr>
                <td><?php echo $i;$i++; ?></td>

                <td><?php echo $res['ration_name']; ?></td>
                <td><?php echo $res['ration_product_quantity']; ?></td>
                <td><?php echo $res['ration_product_total']; ?></td>
                 <!-- <td><?php //echo $res['booking_status']; ?></td> -->
                 <?php if($res['booking_status']=='Accepted'){ ?>
<td><a>Booking Confirm</a> </td><?PHP  } else { ?>
    <td><?php echo $res['booking_status']; ?></td><?php } ?>
                <!-- <td><?php echo $res['user_fmember_relation']; ?></td> -->

               <!--  <td><a href="delete_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Remove Member')"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;&nbsp;
                <a href="update_fmember.php?Userm_id=<?php echo"$user_fmember_id";?>" onclick="return confirm('Are you Sure for Update the Member Info')"><span class="glyphicon glyphicon-refresh"></span></a></td> -->
                <td><!-- <a href="update_fmember.php?Userm_id=<?php //echo"$user_fmember_id";?>"><button type="button"  class="btn btn-primary">Update
        </button></a> -->
         <center><a href="delete_book_ration.php?Ration_book_id=<?php echo"$ration_booking_id"; ?>" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you Sure to delete this')"><i class="fa fa-trash " style="color: red"></i></a></center>
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
  <?php include"footer.php" ?>
  

<?php
if (isset($_POST['submit'])) 
{
extract($_POST);
echo $asd = mysqli_query($con,"insert into user_ration_booking(user_id,ration_product_name,ration_product_quantity,ration_product_total) 
    values ('".$_SESSION['user_id']."','$ration_product_name','$ration_product_quantity','$ration_product_total')") or die(mysqli_error());
if($asd)
{
echo '<script type="text/javascript">';
echo " alert('Ration Added');";
echo 'window.location.href = "book_ration_form.php";';
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
                    <h5 class="modal-title" id="exampleModalLabel">Book</h5>
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
                                                    $query = mysqli_query($con,"select r.*,u.* from ration_details r,user_ration_form_details u where u.user_select_card_type=r.r_id group by r.ration_name asc") or die(mysqli_error($con));

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
                            
                            <input type="text" class="form-control border" id="quantity" onkeyup="sum()" name="ration_product_quantity" value="" required="">
                        </div>
                        <script type="text/javascript">
                                                  

                        function sum()
                        {
                            var bq1=parseInt(document.getElementById('quantity').value);
                            var bp1=parseInt(document.getElementById('ration_rate').value);
                            var total1=parseFloat(bp1)*parseFloat(bq1);
                            var total2=parseFloat(total1).toFixed(2);
                            document.getElementById('tt1').value=total2;
                        }
                        </script>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Total Rate</label>
                            <input type="text" class="form-control border"  name="ration_product_total" id="tt1" 
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" name="submit" class="form-control border text-white bg-theme1" value="Book">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

