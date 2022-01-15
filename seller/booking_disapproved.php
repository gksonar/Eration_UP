<?php include'header.php'?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Ration Request</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Rejected Ration Booking List</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <!-- row -->
<?php
 $i = 1;
$asd=mysqli_query($con,"select * from user_ration_booking where booking_status='Rejected'") or die(mysqli_error($con));
 $Total = mysqli_num_rows($asd);
 // echo "<br>";
 // echo "Total Records:- " .$Total;
 // echo "<br>";
?>
  
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-1"></div> -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                            <div class="input-group input-group-sm" style="width: 23%;margin-left: 75%">
                                  <input type="text" id="myInput" name="table_search" class="form-control pull-right" placeholder="Search">
                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default" style="line-height: 1.8;"><i class="fa fa-search"></i></button>
                                  </div>
                                </div>
                            </div><br>

                                <h4 align="center" class="card-title">Rejected Ration Booking</h4><br>
                                <div class="table-responsive">
                                    <table class="table  table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>user_id</th>
                                                <th>Ration Name</th>
                                                <th>Ration Quantity</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                       <?php while($fetch=mysqli_fetch_array($asd))
                                        {

                                        extract($fetch)
                                        ?>
                                        <tbody id="myTable">    
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $fetch['user_id']; ?></td> 
                                                <td><?php echo $fetch['ration_product_name']; ?></td>
                                                <td><?php echo $fetch['ration_product_quantity']; ?></td>
                                                <td><?php echo $fetch['booking_status']; ?></td>
                                                
                                               

                                                <td><center><a href="bookapproved.php?Request_booking_id=<?php echo "$user_id";?>"> <i class="fa fa-thumbs-up" aria-hidden="true"style="color: green"></a></i>&nbsp;&nbsp;&nbsp;

                                                </center></td>
                                                
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
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
       <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="http://www.sumagoinfotech.com">Sumago Infotech</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 
</body>

</html>