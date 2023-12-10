<?php
session_start();
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
                                <span>My Account </span>
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
                        <li><a href="user-dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a href="user-edit.php"><i class="fas fa-user"></i>Edit Profile</a> </li>
                            
                        </li>
                        <li><a href="user-packages.php"><i class="fas fa-umbrella-beach"></i>View Package</a></li>
  
                        <li><a href="user-enquiry.php"><i class="fas fa-ticket-alt"></i> Enquiry </a></li>
                        <li><a href="user-db-wishlist.php"><i class="far fa-heart"></i>Wishlist</a></li>
                        <li><a href="user-db-comment.php"> <i class='bx bx-chat'></i>Comments</a></li>
                        <li class="active-menu"><a href="user-add-blog.php"><i class="fas fa-comments"></i>Create Blogs</a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="db-info-wrap">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box user-form-wrap">
                            <div class="col-12">
                                <h4>Upload Profile Photo</h4>
                            </div>
                            <div class="col-sm-6">
                                <div class="upload-input">
                                    <div class="form-group">
                                      <span class="upload-btn">Select a image</span>
                                      <input type="file" name="myfile">                                        
                                      <button type="submit" class="button-primary" value="<?php echo $user['Image']; ?>">Upload Image</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box user-form-wrap">
                            <h4>Profile Details add</h4>

                    <?php 
                    require "A-user-edit.php";
                    $id=$_SESSION["id"];
                    $check=check($id);
                    if($check=='true'):
                    ?>         
                    <?php 
                    //require "A-user-edit.php";
                    $getuser=displayUser($id);
                    foreach($getuser as $user):
                    ?>
                            

                            <form class="form-horizontal" method="POST" action="A-user-edit-update.php">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"> 
                                            <label>First name</label>
                                            <input name="firstname" class="form-control" type="text" value="<?php echo $user['First_name']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input name="lastname" class="form-control" type="text" value="<?php echo $user['Last_name']; ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>NIC/Passport</label>
                                            <input name="ID" class="form-control" type="number" value="<?php echo $user['NIC']; ?>">
                                        </div>  
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" id="input-phone" class="form-control" value="<?php echo $user['Mobile_number']; ?>" placeholder="" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" id="dob" name="dob" value="<?php echo $user['Dob']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h4>Contact Details</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input name="country" id="country" class="form-control" value="<?php echo $user['Country']; ?>" placeholder="" type="text">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>District</label>
                                         <input name="district" id="district" class="form-control" value="<?php echo $user['district']; ?>" placeholder="" type="text">
                                         
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                            <label>City</label>
                                            <input name="city" id="City" class="form-control" value="<?php echo $user['City']; ?>" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input name="Address" id="Address" class="form-control" value="<?php echo $user['Address']; ?>" placeholder="" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <h4>Describe Yourself</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Please Tell Us About You</label>
                                            <input name="about" id="Address" class="form-control" value="<?php echo $user['About']; ?>" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <!-- <div class="col-12">
                                        <h4>Social Media Links </h4>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input name="Facebook" id="Facebook" class="form-control" value="" placeholder="" type="text">
                                            <label>Instagram</label>
                                            <input name="Instagram" id="Instagram" class="form-control" value="" placeholder="" type="text">
                                            <label>Twitter</label>
                                            <input name="Twitter" id="Twitter" class="form-control" value="" placeholder="" type="text">
                                            <label>Google</label>
                                            <input name="Google" id="Google" class="form-control" value="" placeholder="" type="text">
                                            <label>Linkedin</label>
                                            <input name="Linkedin" id="Linkedin" class="form-control" value="" placeholder="" type="text">
                                        </div>
                                    </div> -->
                                
                                    <button type="submit" class="button-primary">Update Profile</button>
                                </div>
                            </form>
                            <?php
                            endforeach;
                            ?>
                            <!-- <?php
                            //endif;
                            ?> -->
                            
                            <?php 
                            else:
                            // $check=check($id);
                            // if($check='true'):
                                
                            ?> 

                            <form class="form-horizontal" method="POST" action="A-new-user-edit-update.php">
                                    <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"> 
                                            <label>First name</label>
                                            <input name="firstname" class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input name="lastname" class="form-control" type="text" value="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>NIC/Passport</label>
                                            <input name="ID" class="form-control" type="number" value="">
                                        </div>  
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" id="input-phone" class="form-control" value="" placeholder="" type="text">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" id="dob" name="dob" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h4>Contact Details</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input name="country" id="country" class="form-control" value="" placeholder="" type="text">

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                         <label>District</label>
                                         <input name="district" id="district" class="form-control" value="" placeholder="" type="text">
                                         
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                            <label>City</label>
                                            <input name="city" id="City" class="form-control" value="" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input name="Address" id="Address" class="form-control" value="" placeholder="" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <h4>Describe Yourself</h4>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Please Tell Us About You</label>
                                            <input name="about" id="Address" class="form-control" value="" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div>
                                    <button type="submit" class="button-primary">Update Profile</button>
                                    </div>
                            </form>

                            <?php
                            endif;
                            ?>
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
    <!-- *Scripts* -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>