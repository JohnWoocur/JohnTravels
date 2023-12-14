<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- favicon -->
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>John Travels LK</title>
</head>


<?php
session_start();
include "db-connection.php";

if(isset($_SESSION['id']))

{
    $Customer_Id = $_SESSION['id'];

    $sql="SELECT customer_more_details.*, customers.Email
    FROM customer_more_details
    JOIN customers ON customer_more_details.Customer_Id = customers.Customer_Id
    WHERE customer_more_details.Customer_Id = $Customer_Id";
     
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);

    $uImage = $row['Image'];
    $Customer_Name = $row['First_name'] ." ".$row['Last_name'];
    $Customer_Email = $row['Email'];
    $Customer_Phone = $row['Mobile_number'];
    $Customer_About = $row['About'];
    $Customer_Nic = $row['NIC'];
    $Customer_Dob = $row['Dob']; 
    $Customer_Country = $row['Country'];





}

?>


  


<main class="container">
  <div class="card">
    <img src="Customers/<?php echo $uImage; ?>" alt="User image" class="card__image" />
    <div class="card__text">
      <h2><?php echo $Customer_Name; ?></h2>
        <form name="Full Name" class="form-control" type="text">
        </form>
        <label><?php echo $Customer_About; ?></label>
        <form name="descripe" class="describe" type="text">
        </form>
          <div class="t-box">
            <i class="fa fa-calendar info" ></i>
            <label><?php echo $Customer_Dob; ?> </label>
            <form name="dob" class="form-control" type="date">
            </form>
          </div>  
        <div class="t-box">
        <i class="fa fa-envelope" ></i>
        <label><?php echo $Customer_Email; ?></label>
        <form name="email" class="form-control" type="text">
        </form>
        </div>
        <div class="t-box">
          <i class="fa fa-id-card info"></i>
          <label><?php echo $Customer_Nic; ?></label>
          <form name="nic" class="form-control" type="text">
          </form>
        </div>
        <div class="t-box">
          <i class="fa fa-mobile info"></i>
          <label><?php echo $Customer_Phone; ?></label>
          <form name="phone-number" class="form-control" type="number">    
          </form>  
        </div>
        <div class="t-box">
          <i class="fa fa-address-card info"></i>
          <label><?php echo $Customer_Country; ?></label>
          <form name="address" class="form-control" type="text">
          </form>
        </div>
        </div>
    
      <div class="socials">
      <button class="linkedin"><i class="fab fa-linkedin"></i></button>
      <button class="twitter"><i class="fab fa-twitter"></i></button>
      <button class="google"><i class="fab fa-google"></i></button>
      <button class="facebook"><i class="fab fa-facebook-f"></i></button>
      <button class="instagram"><i class="fab fa-instagram"></i></button>
      </div>
      
      
  
      <div class="card__action">
        <a href="user-dashboard.php" class="card__action__button card__action--follow">Dashboard</a>
    </div>
    
    </div>

    
  </div>
  
  
</main>
</body>
</html>