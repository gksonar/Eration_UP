<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Area</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">View Area</a></li>
                    </ol>
                </div>
            </div>



<div class="row">
 <div class="col-lg-1"></div>
   <div class="col-lg-10">
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
                                <h3 align="center">Area List</h3>
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle">
                                        <thead>
                                            <tr>
                                                <th style="width: 13%" scope="col">Sr.No</th>
                                                <th scope="col">Area Name</th>
                                                <th style="width: 20%;text-align: center;" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                        <?php
                                          $i=1;
                                          $sql=mysqli_query($con,"select * from area");
                                          while($res=mysqli_fetch_assoc($sql))
                                          {
                                            $area_id=$res['area_id'];
                                          ?>
                                            <tr>
                                                <td><?php echo $i;$i++; ?></td>
                                                <td><?php echo $res['area_name']; ?></td>
                                                <td>
                                                    <span>
                                                    <a href="update_area.php?Area_id=<?php echo"$area_id";?>" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-pencil color-muted m-r-5" style="margin-left: 23%"></i></a>&nbsp;

                                                
                                                    
                                                    <a href="delete_area.php?Area_id=<?php echo"$area_id";?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger" style="margin-left: 10%"></i></a>
                                                    </span>
                                                </td>
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

