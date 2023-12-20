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
                            <?php
                                $img=displayImg();
                                ?>
                                <img src="admins/<?php echo $img;?>" alt="admin">
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
						<li><a href="db-messages.php"><i class="fas fa-envelope"></i>Messages</a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap db-add-tour-wrap">
                <div class="row">
                    <!-- Listings -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="dashboard-box">
                        <form action="A-add_package.php" method="post" enctype="multipart/form-data">
                            <div class="custom-field-wrap">
                                <div class="form-group">
                                    <label>Package Title</label>
                                    <input type="text" placeholder="Package Title" id="Pack_title" name="Pack_title" required/>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" placeholder="Description" id="Description" name="Description" required/></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Dates and Prices</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>No of People</label>
                                            <input type="number" placeholder="No of People" id="Group_size" name="Group_size" required/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Trip Duration</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="number" placeholder="Days" id="Days" name="Days" required/>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="number" placeholder="Night" id="Night" name="Night" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select placeholder="Category"  id="Category" name="Category" required/>
                                                <option>Adult</option>
                                                <option>Child</option>
                                                <option>Couple</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" placeholder="Date" id="Trip_date" name="Trip_date" required/>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Regular Price</label>
                                            <input type="text" placeholder="Reqular_price" id="Reqular_price" name="Reqular_price" required/>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Discount</label>
                                            <input type="text" placeholder="Discount" id="Discount" name="Discount" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Trip location and places</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" placeholder="Location" id="Location" name="Location" required/>
                                        </div>
                                    </div><br>
                                    <div class="col-sm-6">
                                        <label>Places</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Place1" id="Place_one" name="Place_one" required/>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Place2" id="Place_two" name="Place_two" required/>
                                                </div>
                                            </div>
											<div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Place3" id="Place_three" name="Place_three" required/>
                                                </div>
                                            </div>
											<div class="col-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Place4" id="Place_four" name="Place_four" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <h4>Gallery</h4>
                            <div class="custom-field-wrap">
                                <div class="dragable-field">
                                    <div class="dragable-field-inner">
                                        <p class="drag-drop-info">Drop Files To Upload</p>
                                        <p>or</p>
                                        <div class="upload-input">
                                            <div class="form-group">
                                              <span class="upload-btn">Upload a image</span>
											  <input type="file" id="Pack_img" name="Pack_img" accept="image/*" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <h4>Location</h4>
                            <div class="custom-field-wrap">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select Map</label>
                                            <select id="Map" name="Map" required/>
                                                <option>Google Map</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>API key</label>
                                            <input type="text" id="Api_key" name="Api_key" required/>
                                        </div>
                                    </div>
                                    <div class="col-5 offset-4 mt-5">
                                        <div class="publish-btn">
                                    <div class="form-group">
									<button type="submit" class="button-primary">Create</button>
									<button type="reset" class="button-primary">Reset</button>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <<div class="col-lg-4 col-xl-3"> 
                        <div class="dashboard-box">
                            <div class="custom-field-wrap">
                                <h4>Publish</h4>
                                <div class="publish-btn">
                                    <div class="form-group">
                                        <input type="submit" name="draft" value="Save Draft">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="preview" value="Preview">
                                    </div>
                                </div>
                                <div class="publish-status">
                                    <span>
                                        <strong>Status:</strong>
                                        Draft
                                    </span>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="publish-status">
                                    <span>
                                        <strong>Visibility:</strong>
                                        Poblic
                                    </span>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="publish-status">
                                    <span>
                                        <strong>Visibility:</strong>
                                        Poblic
                                    </span>
                                    <a href="#">Edit</a>
                                </div>
                                <div class="publish-action">
                                    <input type="submit" name="publish" value="Publish">
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Popular</h4>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span>
                                        Use Polpular
                                    </label>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-pop-field-wrap">
                                <h4>Keywords</h4>
                                <div class="form-group">
                                    <input type="text" name="keyword" placeholder="Keywords">
                                </div>
                            </div>
                            <div class="custom-field-wrap db-cat-field-wrap">
                                <h4>Category</h4>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox">
                                        <span class="custom-input-field"></span>
                                        Hotel
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="custom-input"><input type="checkbox" checked="checked">
                                        <span class="custom-input-field"></span>
                                        Walking
                                    </label>
                                </div>
                                <div class="add-btn">
                                    <a href="#">Add category</a>
                                </div>
                            </div>
                            <div class="custom-field-wrap db-media-field-wrap">
                                <h4>Add image</h4>
                                <div class="upload-input">
                                    <div class="form-group">
                                      <span class="upload-btn">Upload a image</span>
                                      <input type="file" name="myfile">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>--> 
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
	<script src="image.js"></script>
</body>

<!-- Mirrored from cyclonethemes.com/demo/html/padhai/dashboard-addtour.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Feb 2020 09:01:50 GMT -->
</html>