<?php
session_start();
if(isset($_SESSION['id'])){
    unset($_SESSION['id']);
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
      <title>John Travels LK</title>
</head>
<body>
    <div class="login-page" style="background-image: url(assets/images/bg.jpg);">
        <div class="login-from-wrap">
            <form class="login-from" action="U-login.php" method="POST">
                <h1 class="site-title">
                    <a href="#">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                </h1><?php
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
                <div class="form-group">
                    <label for="first_name1">E-Mail</label>
                    <input type="email" class="validate" name="mail" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Password</label>
                    <input id="last_name" type="password" class="validate" name="password" required>
                </div>
                <div class="form-group">
                    <!-- <a class="button-primary" href="user-dashboard.php">Login</a> -->
                    <center><button class="button-primary" type="submit">Login</button></center>
                </div><br>
                <!--<div class="form-group">
                    <a class="button-primary" href="register.php">Register</a>
                </div>-->
				<a href="register.php">Don't have an account ?</a> &nbsp; &nbsp; &nbsp; 
                <a href="forgot.php">Forgot Password?</a>
            </form>
        </div>
    </div>

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