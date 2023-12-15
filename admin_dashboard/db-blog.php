

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
                        <li><a href="db-add-package.php"><i class="fas fa-umbrella-beach"></i>Add Package</a></li>
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
                        <li><a href="db-enquiry.php"><i class="fas fa-ticket-alt"></i> Enquiry</a></li>
                        <li><a href="db-blog.php"><i class="far fa-user"></i>Blog</a></li>
                        <li><a href="db-wishlist.php"><i class="far fa-heart"></i>Wishlist</a></li>
                        <li><a href="db-comment.php"><i class="fas fa-comments"></i>Comments</a></li>
						<li><a href="db-messages.php"><i class="fas fa-envelope"></i>Messages</a></li>
                        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="db-info-wrap db-booking">
                <div class="dashboard-box table-opp-color-box">
                    <h4>Recent Blog Request</h4>
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Blog title</th>
                                    <!-- <th>Destination</th> -->
                                    <!-- <th>Id</th> -->
                                    <!-- <th>People</th>  -->
                                    <th>status</th>
                                    <th>Request</th>
                                    
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "db-connection.php";
                                 $sql= "SELECT blog.*, customer_more_details.First_name, customer_more_details.Last_name, customer_more_details.Image
                                 FROM blog
                                 JOIN customer_more_details ON blog.Customer_Id = customer_more_details.Customer_Id WHERE blog.Status='pending'";
                                
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $Blog_Id=$row['Blog_Id'];
                                    $Customer=$row['First_name'];
                                    $Blog_title=$row['Blog_title'];
                                    $Blog_content1=$row['Blog_content1'];
                                    $Blog_content2=$row['Blog_content2'];
                                    $Highlighted=$row['Highlighted'];
                                    $Status=$row['Status'];
                                    $Blog_img=$row['Blog_img'];
                                    $date=$row['Create_at'];
                                    $image=$row['Image']

                                ?>
                                <tr>
                                    <td>
                                        
                                    <?php //echo '<span class="list-img"><img src="users/'.$image.'" alt=""></span>'?>
                                        </span><span class="list-enq-name"> <?php echo"$Customer";?>  </span>
                                    </td>
                                    <td><?php echo"$date";?> </td>
                                    <td><?php echo"$Blog_title";?> </td>
                                    <td><span class="badge badge-success"><?php echo"$Status";?> </span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <!--  <td><span class="badge badge-success">9</span></td> -->
                                    <td>

                                        <!-- <a href="A-view-blog.php?Customer_Id=<?php echo $row['Customer_Id']; ?>"><span class="badge badge-success"><i class="far fa-eye"></i></span></a>
                                        <a href="A-blog-delete.php?id=<?php echo $row['Customer_Id']; ?>"><span class="badge badge-danger"><i class="far fa-trash-alt"></i></span></a> -->
                                        <span class="badge badge-success"><i class="far fa-eye"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
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
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/canvasjs.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>