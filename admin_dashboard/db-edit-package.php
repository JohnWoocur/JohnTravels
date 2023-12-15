<?php
session_start();
if(!isset($_SESSION["aid"])){
header("Location:login.php");
exit();
}
?>
<?php
require 'A-dashboard.php';
$name=displayAdmin();
?>
<!doctype html>
<html lang="en">
   <head> 
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="../assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="test.css">
      <title>John Travels LK</title>
</head>
<body>
    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">
            <div class="dashboard-header sticky-header">
                <div class="content-left  logo-section pull-left">
                    <h1><a href="../index.php"><img src="assets/images/logo.png" alt=""></a></h1>
                </div>
                <div class="heaer-content-right pull-right">
                    <div class="search-field">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search Now">
                                <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            </div>
                        </form>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" id="notifyDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="dropdown-item">
                                <i class="far fa-envelope"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu" aria-labelledby="notifyDropdown">
                            <h4> 3 Notifications</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment2.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment3.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="all-button">See all messages</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="far fa-bell"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                            <h4> 3 Messages</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment4.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment5.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="list-img">
                                            <img src="assets/images/comment6.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p>
                                            <small>2 hours ago</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="all-button">See all messages</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item profile-sec">
                                <img src="assets/images/comment.jpg" alt="">
                                <span><?php echo $name;?></span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu account-menu">
                            <ul>
                                <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li>
                                <li><a href="#"><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href="#"><i class="fas fa-key"></i>Password</a></li>
                                <li><a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-navigation">
                <!-- Responsive Navigation Trigger -->
                <div id="dashboard-Navigation" class="slick-nav"></div>
                <div id="navigation" class="navigation-container">
                    <ul>
                        <li><a href="dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a><i class="fas fa-user"></i>Admins</a>
                            <ul>
                                <li>
                                    <a href="admin.php">Admin</a>
                                </li>
                                <!-- <li>
                                    <a href="admin-edit.php">Admin edit</a>
                                </li> -->
                                <li>
                                    <a href="new-admin.php">New admin</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="user.php"><i class="fas fa-user"></i>Users</a>
                            
                        </li>
                        <li class="active-menu"><a href="db-add-package.php"><i class="fas fa-umbrella-beach"></i>Add Package</a></li>
                        <li>
                            <a><i class="fas fa-hotel"></i></i>packages</a>
                            <ul>
                            <li><a href="A-package-view.php"> Package List</a></li>
                                <li><a href="db-package-active.php">Active</a></li>
                                <li><a href="db-package-pending.php">Pending</a></li>
                                <li><a href="db-package-expired.php">Expired</a></li>
                            </ul>   
                        </li>
                        <li><a href="db-booking.php"><i class="fas fa-ticket-alt"></i> Booking</a></li>
                        <li><a href="db-enquiry.php"><i class="fas fa-ticket-alt"></i> Customize</a></li>
                        <li><a href="db-blog.php"><i class="far fa-user"></i>Blog</a></li>
                        <li><a href="db-wishlist.php"><i class="far fa-heart"></i>Wishlist</a></li>
                        <li><a href="db-comment.php"><i class="fas fa-comments"></i>Comments</a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap db-add-tour-wrap">
                <div class="row">
                    <!-- Listings -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="dashboard-box">
                        <?php
                                if(isset($_SESSION['Smsg'])):
                                ?>
                                <div class="form-group">
                                    <label class="badge badge-success"><?php echo $_SESSION['Smsg']; ?></label>
                                </div>
                                <?php
                                unset($_SESSION['Smsg']);
                                endif;
                                ?>
                                <?php
                                if(isset($_SESSION['Emsg'])):
                                ?>
                                <div class="form-group">
                                <label class="badge badge-danger"><?php echo $_SESSION['Emsg']; ?></label>
                                </div>
                                <?php
                                unset($_SESSION['Emsg']);
                                endif;
                                ?>

                        <?php 
                        require "A-edit-package.php";
                        $id=$_GET["Pack_Id"];
                        $getpack=displayPackage($id);
                        foreach($getpack as $pack):
                        ?>

                        <form action="A-edit-package-update.php" method="POST" enctype="multipart/form-data">
                        <div class="col-sm-6">
                                
                            </div>
                            <div class="custom-field-wrap">
                            <div class="col-sm-6">
                                <div class="upload-input">
                                    <div class="form-group">
                                      <span class="upload-btn">Select a image</span>
                                      <img src="package/<?php echo $pack['Pack_img']?>" alt="User image">
                                      <input type="file" name="myfile" accept="image/*" >                              
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label>ID</label>
                                    <input type="text" name="id" value="<?php echo $pack["Pack_Id"] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="name" value="<?php echo $pack["Pack_title"] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" ><?php echo $pack["Description"] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Dates and Prices</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Group Size</label>
                                            <input type="number" name="size" placeholder="No of Pax" value="<?php echo $pack["Group_size"] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Trip Duration</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Days</label>
                                                    <input type="number" name="day" placeholder="Days" value="<?php echo $pack["Days"] ?>">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Nights</label>
                                                    <input type="number" name="night" placeholder="Nights" value="<?php echo $pack["Night"] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input type="text" name="category" placeholder="Category" value="<?php echo $pack["Category"] ?>">
                                            <!-- <select value="">
                                                <option>Adult</option>
                                                <option>Child</option>
                                                <option>Couple</option>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" name="date" value="<?php echo $pack["Trip_date"] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Sales Price</label>
                                            <input type="text" name="saleprice" value="<?php echo $pack["Sale_price"] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" name="price" value="<?php echo $pack["Reqular_price"] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" name="discount" value="<?php echo $pack["Discount"] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="dashboard-box user-form-wrap">
                            <div class="col-12">
                                <h4>Package Photo</h4>
                            </div>
                            <div class="col-sm-6">
                                <div class="upload-input">
                                    <div class="form-group">
                                      <span class="upload-btn">Select a image</span>
                                      <input type="file" name="myfile" accept="image/*" >                              
                                    </div>
                                </div>
                            </div>
                            </div> -->
                        <div class="dashboard-box">
                            <h4>Location</h4>
                            <div class="custom-field-wrap">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select Map</label>
                                            <input type="text" name="map" value="<?php echo $pack["Map"] ?>">
                                            <!-- <select>
                                                <option value="<?php echo $pack["Map"] ?>">Google Map</option>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>API key</label>
                                            <input type="text" name="apikey" value="<?php echo $pack["Api_key"] ?>">
                                        </div>
                                    </div>
                                    <div class="dashboard-box">
                            <h4>Special</h4>
                            <div class="custom-field-wrap">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Popular</label>
                                            <input type="text" name="popular" value="<?php echo $pack["Popular"] ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" name="status" value="<?php echo $pack["Status"] ?>">
                                        </div>
										<div class="col-sm-7">
                                        <div class="form-group">
                                            <label>Wish</label>
                                            <input type="text" name="wish" value="<?php echo $pack["Status"] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    <div class="col-5 offset-5 mt-5">
                                        <div class="publish-btn">
                                    <div class="form-group">
                                        <input type="submit" name="draft" value="Update">
                                    </div>
                                    
                                    </div>
                                    </div>
                                
                                    </form>
                                    <?php
                                    endforeach;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        </div>
                    </div>
                </div>      
            </div>
            <!-- Content / End -->
            <!-- Copyrights -->
            <div class="copyrights">
               Copyright © 2023 John Travels LK. All rights reserveds.
            </div>
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <!-- end Container Wrapper -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>

<!-- Mirrored from cyclonethemes.com/demo/html/padhai/dashboard-addtour.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Feb 2020 09:01:50 GMT -->
</html>