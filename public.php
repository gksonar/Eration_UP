<?php include'header.php'?>

<br><br>
     <div class="abt_bottom py-lg-5 py-4  text-center">
       
            
            <center><div class="d-flex justify-content-center mt-lg-5 mt-3">
                <!-- <i class="fa fa-user" style="font-size:48px;color:#3b67b3"></i> -->
                <div><i class="fa fa-user" style="font-size:60px;color:#3b67b3"></i><br><a href="user_login.php" class="text-capitalize serv_link btn bg-theme1" style="margin-left:-5% ">Registered User</a></div>&nbsp;&nbsp;&nbsp;&nbsp;

               <div><i class="fa fa-user-plus" style="font-size:60px;color:#3b67b3"></i> <br><a href="user_registration.php" class="text-capitalize serv_link btn bg-theme1" style="margin-left: 4%">New User!Sign Up</a></div>

                <!-- <a href="portfolio.html" class="text-capitalize serv_link btn bg-theme1" style="margin-left: ">our work</a> -->
                
            </div></center>
       
    </div>
    <!-- //about bottom -->
   
    <!-- services-->
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
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Username</label>
                            <input type="text" class="form-control border" placeholder="john mercy " name="Name" id="recipient-name"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label text-white">Password</label>
                            <input type="password" class="form-control border" placeholder="****" name="Password" id="password"
                                required="">
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control border text-white bg-theme1" value="Login">
                        </div>

                        <div class="row sub-w3l my-3">
                            <div class="col sub-w3layouts">
                                <input type="checkbox" id="brand1" value="">
                                <label for="brand1" class="text-white">
                                    <span></span>Remember me?</label>
                            </div>
                            <div class="col forgot-w3l text-right text-dark">
                                <a href="#" class="text-white">Forgot Password?</a>
                            </div>
                        </div>
                        <p class="text-center text-white">Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-theme1 font-weight-bold">
                                Register Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //Login modal -->
    <!-- Register modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-theme2">
                    <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body  bg-theme1">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-white">Username</label>
                            <input type="text" class="form-control border" placeholder="john mercy " name="Name" id="recipient-rname"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label text-white">Email</label>
                            <input type="email" class="form-control border" placeholder="username@email.com" name="Email"
                                id="recipient-email" required="">
                        </div>
                        <div class="form-group">
                            <label for="password1" class="col-form-label text-white">Password</label>
                            <input type="password" class="form-control border" placeholder="****" name="Password" id="password1"
                                required="">
                        </div>
                        <div class="form-group">
                            <label for="password2" class="col-form-label text-white">Confirm Password</label>
                            <input type="password" class="form-control border" placeholder="****" name="Confirm Password"
                                id="password2" required="">
                        </div>
                        <div class="sub-w3l">
                            <div class="sub-w3layouts">
                                <input type="checkbox" id="brand2" value="">
                                <label for="brand2" class="mb-3 text-white">
                                    <span></span>I Accept to the Terms & Conditions</label>
                            </div>
                        </div>
                        <div class="right-w3l">
                            <input type="submit" class="form-control bg-theme1 text-white" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><!-- <br><br><br><br> -->
              <!-- <center><a href="index.php"><b style="color: #36588e">Home Page</b></a></center> -->

   <?php include'footer.php' ?>