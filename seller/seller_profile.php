<?php include'header.php' ?>
<div class="content-body">
    <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Seller_profile</a></li>
                    </ol>
                </div>
            </div>



<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <div class="media align-items-center mb-4">
                <img class="mr-3" src="images/user/1.png" width="80" height="80" alt="">
                <div class="media-body">
                    <!-- <h3 class="mb-0">Pikamy Cha</h3>
                    <p class="text-muted mb-0">Canada</p> -->
                </div>
            </div>
            
            <!-- <div class="row mb-5">
                <div class="col">
                    <div class="card card-profile text-center">
                        <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                        <h3 class="mb-0">263</h3>
                        <p class="text-muted px-4">Following</p>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-profile text-center">
                        <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                        <h3 class="mb-0">263</h3>
                        <p class="text-muted">Followers</p>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-danger px-5">Follow Now</button>
                </div>
            </div> -->

            <h4>About Me</h4>
            <p class="text-muted">Hi, I'm Seller or shopkeeper to distribute the Ration to the people.....</p>
            <ul class="card-profile__info">
                <!-- <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li> -->
                <li><strong class="text-dark mr-4">Email</strong> <span><?php echo $_SESSION['seller_email'];?></span></li>
            </ul>
        </div>
    </div>  
   </div>
</div>
</div>    
<?php include'footer.php' ?>