<?php
include 'db-connection.php';
session_start();
if(!isset($_SESSION["id"])){
    header("Location:login.php");
    exit();
    }
if(isset($_SESSION['id'])){
    $Customer_Id = $_SESSION['id'];

    $query = "SELECT * FROM customers WHERE Customer_Id = $Customer_Id "; 

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $uName = $row['Username'];
}
?>
<?php

    if(isset($_SESSION['id'])){
        $Customer_Id = $_SESSION['id'];        
        $sql = "SELECT * FROM customer_more_details WHERE Customer_Id = $Customer_Id "; 
        
        $Iresult = mysqli_query($conn, $sql);
        if($Irow = mysqli_fetch_assoc($Iresult)){

       $uImage = $Irow['Image'];          
         }
       else{
        $uImage = "user.png";
         }       
     }

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
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                                <span class="notify">0</span>
                            </div>
                        </a>
                         <!-- <div class="dropdown-menu notification-menu" aria-labelledby="notifyDropdown"> 
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
                        </div> -->
                    </div> 
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="far fa-bell"></i>
                                <span class="notify">0</span>
                            </div>
                        </a>
                        <!-- <div class="dropdown-menu notification-menu">
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
                        </div> -->
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item profile-sec">
                                 <img src="Customers/<?php echo $uImage; ?>" alt="Customer Image">
                                <span><?php echo $row['Username'];?></span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu account-menu">
                            <ul>
                                <li><a href="user-edit.php"><i class="fas fa-cog"></i>Edit Profile</a></li>
                                <li><a href="profile-card.php"><i class="fas fa-user-tie"></i>Profile</a></li>
                                <li><a href="user-change-password.php"><i class="fas fa-key"></i>Password</a></li>
                                <li><a href="login.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
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
                        <li><a href="user-db-comment.php"><i class='bx bx-chat'></i>Comments</a></li>
                        <li class="active-menu"><a href="user-add-blog.php"><i class="fas fa-comments"></i>Create Blogs</a></li>
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
                                if(isset($_SESSION['Bsmsg'])):
                                ?>
                                <div class="form-group">
                                    <label class="badge badge-success"><?php echo $_SESSION['Bsmsg']; ?></label>
                                </div>
                                <?php
                                unset($_SESSION['Bsmsg']);
                                endif;
                                ?>
                                <?php
                                if(isset($_SESSION['Bemsg'])):
                                ?>
                                <div class="form-group">
                                <label class="badge badge-danger"><?php echo $_SESSION['Bemsg']; ?></label>
                                </div>
                                <?php
                                unset($_SESSION['Bemsg']);
                                endif;
                                ?>

                        <form action="U-add-blog.php" method="POST" enctype="multipart/form-data">

                            <div class="custom-field-wrap">
                                <div class="form-group">

                                    <label>Blog Title</label>
                                    <input type="text" name="Blog_title">
                                </div>
                                <div class="form-group">
                                    <label>Special Description</label>
                                    <textarea name="Highlighted"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>1st Paragraph </label>
                                    <textarea name="Blog_content1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>2nd Paragraph</label>
                                    <textarea name="Blog_content2"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hashtags">Add Hashtags</label>
                                <input type="text" name="Tag_names" id="hashtags" placeholder="#trekking , #tours">
                            </div>
                            <div class="custom-field-wrap">
                                <label>Images</label>
                                <div class="dragable-field">
                                    <div class="dragable-field-inner">
                                        <p class="drag-drop-info">Drop Small Resolution Image To Upload</p>
                                        <p>or</p>
                                        <div class="upload-input">
                                            <div class="form-group">
                                              <span class="upload-btn">Upload a image</span>
                                              <input type="file" id="Blog_img" name="Blog_img" accept="image/*" required >
                                            </div>
                                        </div>
                                    </div>
                                    
                                
                                </div>
                            </div>
                        </div>
                        <!-- Add space here -->
                        <div>
                        <button type="submit" name="submit" class="button-primary">Upload Blog</button>
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



