<?php
session_start();
include'confi.php';
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

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- header -->
<div class="main-header">
 
<br><br>
<div class="container">
    <a href="user_opp.php"><button style="color: white" type="button" class="btn btn-warning"><b>My Profile</b></button></a>

<center><div class="col-md-9">
<h2 style="margin-bottom:20px;"><b>Schedule Date For Buy The Ration and Verified RAtion Card</b></h2>
<?php
            $sql=mysqli_query($con,"select * from user_ration_form_details where user_id='".$_SESSION['user_id']."'");
            while($res=mysqli_fetch_assoc($sql))
            {

            ?>
            <h4 align="center" style="color:#3b67b3 ">Ration Number : <?php echo $res['ration_number'];?></h4><?php } ?>
            <hr>
             <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                <tr>
                <th>Sr.No</th>
                <th>Schedule List For Ration card Verify</th>
                </tr>
                </thead>
                <tbody>
<?php 
$count=1;
$asd1 = mysqli_query($con,"select * from user_ration_form_details where user_id='".$_SESSION['user_id']."'") or die (mysqli_error($con));
?>
<?php while($fetch1=mysqli_fetch_array($asd1)){
extract($fetch1)
?>
                <tr>
                <td><?php echo $count++; ?></td>
                <td>Your Schedule date is <?php echo $fetch1['verify_rc_date']; ?> for Verified The Ration Card</td>
                </tr>
            <?php } ?>
                </tbody>
                </table>

             <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                <tr>
                <th>Sr.No</th>
                <th>All Schedule List</th>
                </tr>
                </thead>
                <tbody>
<?php 
$count=1;
$asd = mysqli_query($con,"select * from user_ration_booking where user_id='".$_SESSION['user_id']."' group by allocate_schedule") or die (mysqli_error($con));
$Total = mysqli_num_rows($asd);
?>
<?php while($fetch=mysqli_fetch_array($asd)){
extract($fetch)
?>
                <tr>
                <td><?php echo $count++; ?></td>
                <td>Your Next Schedule date <?php echo $fetch['allocate_schedule']; ?> for Buy The Ration</td>
                </tr>
            <?php } ?>
                </tbody>
                </table>

</div></center>
</div>
