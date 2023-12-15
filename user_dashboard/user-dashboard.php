<?php
session_start();
if(!isset($_SESSION["id"])){
    header("Location:login.php");
    exit();
}
?>
<?php
include 'db-connection.php';
if(isset($_SESSION['id'])){
    $Customer_Id = $_SESSION['id'];

    $sql = "SELECT Customers.*, customer_more_details.Image
            FROM Customers
            JOIN customer_more_details ON Customers.Customer_id = customer_more_details.Customer_id 
            WHERE Customers.Customer_id = '$Customer_Id'"; 

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $uImage = $row['Image'];
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
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                                <li><a href="U-logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
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
                        <li class="active-menu"><a href="user-dashboard.php"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a href="user-edit.php"><i class="fas fa-user"></i>Edit Profile</a> </li>
                       
                        <li><a href="user-packages.php"><i class="fas fa-umbrella-beach"></i>View Package</a></li>
                        
                        <li><a href="user-enquiry.php"><i class="fas fa-ticket-alt"></i> Enquiry </a></li>   
                         <li><a href="user-db-wishlist.php"><i class="far fa-heart"></i>Wishlist</a></li>
                        <li><a href="user-db-comment.php"><i class='bx bx-chat'></i>Comments</a></li>
                        <li><a href="user-add-blog.php"><i class="fas fa-comments"></i>Create Blogs</a></li>
                        <li><a href="U-logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <?php
            // Count the number of bookings
            $sqlBookings = "SELECT COUNT(*) AS total_bookings FROM package_booking WHERE Customer_Id =$Customer_Id";
            $resultBookings = $conn->query($sqlBookings);

            if ($resultBookings) {
                $rowBookings = $resultBookings->fetch_assoc();
                $totalBookings = $rowBookings['total_bookings'];
                
            } else {
                echo "Error: " . $sqlBookings . "<br>" . $conn->error;
            }

            // Count the number of  Approval
            $sqlapproval = "SELECT COUNT(*) AS total_approval FROM package_booking WHERE Status = 'Approval'";
            $resultapproval = $conn->query($sqlapproval);

            if ($resultapproval) {
                $rowapproval = $resultapproval->fetch_assoc();
                $totalapproval = $rowapproval['total_approval'];
                
            } else {
                echo "Error: " . $sqlapproval . "<br>" . $conn->error;
            }

            // Count the number of pending 
            $sqlPending = "SELECT COUNT(*) AS total_pending FROM package_booking WHERE Status = 'Pending'";
            $resultPending = $conn->query($sqlPending);

            if ($resultPending) {
                $rowPending = $resultPending->fetch_assoc();
                $totalPending = $rowPending['total_pending'];
                
            } else {
                echo "Error: " . $sqlPending . "<br>" . $conn->error;
            }

            // Count the number of Cancelled 
            $sqlcancel = "SELECT COUNT(*) AS total_cancel FROM package_booking WHERE Status = 'Cancel'";
            $resultcancel = $conn->query($sqlcancel);

            if ($resultcancel) {
                $rowcancel = $resultcancel->fetch_assoc();
                $totalcancel = $rowcancel['total_cancel'];
                
            } else {
                echo "Error: " . $sqlcancel . "<br>" . $conn->error;
            }
            
            
            ?>

            <div class="db-info-wrap">
                <div class="row">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-blue">
                                <i class="bx bx-book"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Booking</h4>
                                <h5><?php echo"$totalBookings" ?></h5> 
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-green">
                                <i class='bx bx-file'></i>
                            
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Approval</h4>
                                <h5><?php echo"$totalapproval" ?></h5> 
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-purple">
                                <i class='bx bxs-file'></i>
                                
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Pending</h4>
                                <h5><?php echo"$totalPending" ?></h5> 
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-red">
                                <i class='bx bxs-comment-x'></i>
                                
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Cancel</h4>
                                <h5><?php echo"$totalcancel" ?></h5> 
                            </div>
                        </div>
                    </div>
                </div>
                   
                                        
                                
                   
            
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-box">
                            <h4>My Bookings </h4>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Package Name</th>
                                            <th>Date</th>
                                            <th>Booking ID</th>
                                            <th>Package ID</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                $sql ="SELECT package_booking.*, package.Pack_title FROM package_booking
                                JOIN package ON package_booking.Pack_Id = package.Pack_Id
                                WHERE package_booking.Customer_Id = $Customer_Id";

                                $result=mysqli_query($conn,$sql);
                                

                                if ($result->num_rows > 0) {
                                    
                                    while($row = $result->fetch_assoc()) {

                                        echo "<tr>";
                                        echo "<td><span class='list-name'>" . $row['Pack_title'] . "</span><span class='list-enq-city'></span></td>";
                                        echo "<td>" . $row['Date'] . "</td>";
                                        echo "<td>" . $row['Booking_Id'] . "</td>";
                                        echo "<td>" . $row['Pack_Id'] . "</td>";
                                        echo "<td><span class='badge badge-primary'>" . $row['Status'] . "</span></td>";
                                        echo "</tr>";
                                        

                                    }
                                }
                            
                                  ?>
                                 
     
                                    </tbody>
                                </table>
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
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/dashboard-custom.js"></script>
</body>
</html>