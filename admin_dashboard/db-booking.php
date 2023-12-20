
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
                    <h4>Recent Booking</h4>
                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                    <p><a href="db-approved-booking.php"><button style="background-color: green; border:none; color:white; padding:15px 32px; text-align:center;display:inline-block">Approved</button></a>
                    <a href="db-rejected-booking.php"><button style="background-color: red; border:none; color:white; padding:15px 32px; text-align:center;display:inline-block">Rejected</button></a></p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Date</th>
                                    <!-- <th>Destination</th> -->
                                    <th>Package Id</th>
                                    <th>Booking Id</th>
                                    <th>status</th>
                                    <!-- <th>Booking</th>
                                    <th>People</th> -->
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require 'db-connection.php';
                                $query= "SELECT * FROM `package_booking` WHERE Status='Pending'";
                                $result= mysqli_query($conn,$query);
                                if($result){
                                    while($row=mysqli_fetch_assoc($result)):
                                        $id=$row['Customer_Id'];
                                        require_once 'A-show-customer.php'; 
                                        $r=show($row['Customer_Id']); 
                                ?>  
                                <tr>
                                    <td>
                                        <a href="view-user.php?id=<?php echo $row['Customer_Id'] ?>"><span class="list-img"><img src="../user_dashboard/Customers/<?php echo $r ?>" alt="">
                                        </span></a><span class="list-enq-name">
                                        </span>
                                    </td>
                                    <td><?php echo $row['Date'] ?></td>
                                    <!-- <td><?php echo $row['Destination'] ?></td> -->
                                    <td><?php echo $row['Pack_Id'] ?></td>
                                    <td><?php echo $row['Booking_Id'] ?></td>
                                    <td><span class="badge badge-primary"><?php echo $row['Status'] ?></span></td>
                                    <!-- <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td> -->
                                    <td>
                                        <a href="A-approved-booking.php?id=<?php echo $row['Booking_Id'] ?>"><span class="badge badge-success"><i class="far fa-check-circle"></i></span></a>
                                        <a href="A-booking-reject.php?id=<?php echo $row['Booking_Id'] ?>"><span class="badge badge-danger"><i class="far fa-trash-alt"></i></span></a>
                                    </td>
                                </tr>
                                <?php
                                endwhile;
                                }
                                ?>
                                <!-- <tr>
                                    <td>
                                        <span class="list-img"><img src="assets/images/comment2.jpg" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-primary">Pending</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="assets/images/comment3.jpg" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-danger">Reject</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="assets/images/comment4.jpg" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-primary">Pendding</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="assets/images/comment5.jpg" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-danger">Reject</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="list-img"><img src="assets/images/comment6.jpg" alt="">
                                        </span><span class="list-enq-name">John Doe</span>
                                    </td>
                                    <td>12 may</td>
                                    <td>Japan</td>
                                    <td>755</td>
                                    <td><span class="badge badge-success">approve</span></td>
                                    <td>
                                        <span class="badge badge-success">15</span>
                                    </td>
                                    <td><span class="badge badge-success">9</span></td>
                                    <td>
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span>
                                        <span class="badge badge-danger"><i class="far fa-trash-alt"></i></span>
                                    </td>
                                </tr> -->
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