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
    <div class="change-pwd-page" style="background-image: url(assets/images/bg.jpg);">
        <div class="change-pwd-from-wrap">
            <form class="change-pwd-from" method="post" action="password-reset-code.php">
                <h1 class="site-title">
                    <a href="#">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                </h1>
                <input type="hidden" name="paassword_token" value="<?php if(isset($_GET['token'])){echo $_GET['token'];}?>">
                <div class="form-group">

                    <label for="Email">User Email</label>
                    <input type="Email" value="<?php if(isset($_GET['Email'])){echo $_GET['Email'];}?>" class="input-feild" name="Email" required>
                </div>
                <div class="form-group">
                    <label for="New Password">New Password</label>
                    <input type="password" name="new_password" class="validate" pattern="^(?=.*[a-zA-Z])(?=\w*[0-9])\w{6,12}$" title="Must contain at least one number and one letter, and at least 6 to 12 characters (special characters not allowed)">
                </div>
                <div class="form-group">
                    <label for="Confirm Password">Confirm Password</label>
                    <input id="last_name" name="confirm_password" type="password" class="validate" pattern="^(?=.*[a-zA-Z])(?=\w*[0-9])\w{6,12}$" title="Must contain at least one number and one letter, and at least 6 to 12 characters (special characters not allowed)">
                </div>
                <div class="form-group">
                <center><button class="button-primary" name="set_new_password" type="submit">Update</button></center>
                    
                </div>
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