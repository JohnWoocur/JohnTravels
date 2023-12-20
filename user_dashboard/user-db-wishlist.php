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
                        <li ><a href="user-edit.php"><i class="fas fa-user"></i>Edit Profile</a> </li>
                        
                        <li><a href="user-packages.php"><i class="fas fa-umbrella-beach"></i>View Package</a></li>
                        
                        <li><a href="user-enquiry.php"><i class="fas fa-ticket-alt"></i> Enquiry </a></li> 
                        <li class="active-menu"><a href="user-db-wishlist.php"><i class="far fa-heart"></i>Wishlist</a></li>
                        <li><a href="user-db-comment.php"><i class='bx bx-chat'></i>Comments</a></li>
                        <li><a href="user-add-blog.php"><i class="fas fa-comments"></i>Create Blogs</a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap db-wislist-wrap">
                <div class="dashboard-box ">
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
                    <div class="row">
                        

                     <?php 
						  
                          $customerId = $_SESSION['id'];

                          
                          $wishlistQuery = "SELECT `user-wish`.`Wish_Id`, `package`.* FROM `user-wish`
                                            JOIN `package` ON `user-wish`.`Pack_Id` = `package`.`Pack_Id`
                                            WHERE `user-wish`.`Customer_Id` = $customerId";
                          
                          $wishlistResult = $conn->query($wishlistQuery);
                          
                          if ($wishlistResult === false) {
                             
                              die("Error executing query: " . $conn->error);
                          }
                          
                          if ($wishlistResult->num_rows > 0) {
                             
                              while ($row = $wishlistResult->fetch_assoc()) {
                                  $wishid = $row['Wish_Id'];
                                  $image = $row['Pack_img'];
                                  $pack_price = $row['Reqular_price'];
                                  $pack_title = $row['Pack_title'];
                                  $package_id = $row['Pack_Id'];
                          
                                  echo '
                                      <div class="grid-item col-md-6 col-lg-4">
                                          <div class="package-wrap">
                                              <figure class="feature-image">
                                                  <a href="#">
                                                      <img src="../admin_dashboard/package/' . $image . '" width="1200px" height="700px">
                                                  </a>
                                              </figure>
                                              <div class="package-price">
                                                  <h6>
                                                      <span>$' . $pack_price . '</span> / per person
                                                  </h6>
                                              </div>
                                              <div class="package-content-wrap">
                                                  <div class="package-content">
                                                      <h4>
                                                          <a href="#">' . $pack_title . '</a>
                                                      </h4>
                                                      <div class="content-details">
                                                          <div class="rating-start" title="Rated 5 out of 5">
                                                              <span></span>
                                                          </div>
                                                          <span class="review-text"><a href="#">1 review</a></span>
                                                      </div>
                                                      <div class="button-container">
                                                          <a href="booking-form.php?Pack_Id=' . $package_id . '"><i class="bx bx-book"></i>Book Now</a>
                                                          <a href="U-wishlist-delete.php?id=' . $wishid . '"><i class="far fa-trash-alt"></i> Delete</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>';
                              }
                          } else {
                              echo "<p>Nothing to show</p>";
                          }
                ?>                          

                <!-- pagination html -->
                <!-- <div class="pagination-wrap">
                    <nav class="pagination-inner">
                        <ul class="pagination disabled">
                            <li class="page-item"><span class="page-link"><i class="fas fa-chevron-left"></i></span></li>
                            <li class="page-item"><a href="#" class="page-link active">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div> -->
            </div>
                                        
                                
                   
                </div>
               
            <!-- Content / End -->
            <!-- Copyrights -->
            </div>
            <div class="copyrights">

                Copyright © 2023 John Travels LK. All rights reserveds.
             
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <!-- *Scripts* -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>