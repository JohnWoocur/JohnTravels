<?php

include "../JohnTravels/admin_dashboard/db-connection.php";

$sql ="SELECT * FROM package WHERE Status ='Active' ";
$result = mysqli_query($conn,$sql); 
   
?>


<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- favicon -->
      <link rel="icon" type="image/png" href="assets/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
      <!-- jquery-ui css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
      <!-- modal video css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
      <!-- light box css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">      <!-- slick slider css -->
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
      <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <title>John Travels LK</title>
   </head>
   <body>
      <div id="siteLoader" class="site-loader">
         <div class="preloader-content">
            <img src="assets/images/loader1.gif" alt="">
         </div>
      </div>
      <div id="page" class="full-page">
         <header id="masthead" class="site-header header-primary">
            <!-- header html start -->
            <div class="top-header">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 d-none d-lg-block">
                        <div class="header-contact-info">
                           <ul>
                              <li>
                                 <a href="#"><i class="fas fa-phone-alt"></i>+94 76 245 0858</a>
                              </li>
                              <li>
                                 <a href="mailto:info.johntravels@gmail.com"><i class="fas fa-envelope"></i> info.johntravels@gmail.com</a>
                              </li>
                              <li>
                                 <i class="fas fa-map-marker-alt"></i> #377 B 1/1, Mannar Road, Veppankulam, Vavuniya, Srilanka
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                        <div class="header-social social-links">
                           <ul>
                              <li><a href="https://www.facebook.com/johntravelslk" target="blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                              <li><a href="https://www.youtube.com/@johntravelslk" target="blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                              <li><a href="https://www.instagram.com/john_travels_lk/" target="blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                              <li><a href="https://wa.me/message/JHT7ZVJLWFUUP1" target="blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                        <div class="header-search-icon">
                           <button class="search-icon">
                              <i class="fas fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-header">
               <div class="container d-flex justify-content-between align-items-center">
                  <div class="site-identity">
                     <p class="site-title">
                        <a href="index.php">
                           <img src="assets/images/John_Travels_LK_Banner_R.png" alt="logo">
                        </a>
                     </p>
                  </div>
                  <div class="main-navigation d-none d-lg-block">
                     <nav id="navigation" class="navigation">
                        <ul>
                           <li class="menu-item-has-children">
                              <a href="index.php">Home</a>
                           </li>
                           <li class="menu-item-has-children">
                              <a href="#">Tour</a>
                              <ul>
                                 <li>
                                    <a href="destination.php">Destination</a>
                                 </li>
                                 <li>
                                    <a href="tour-packages.php">Tour Packages</a>
                                 </li>
                                 <li>
                                    <a href="package-offer.php">Package Offer</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="menu-item-has-children">
                              <a href="#">Travels</a>
                              <ul>
                                 <li>
                                    <a href="about.php">About</a>
                                 </li>
                                 <li>
                                    <a href="service.php">Service</a>
                                 </li>
                                 <li>
                                    <a href="career.php">Career</a>
                                 </li>
                                 <li>
                                    <a href="tour-guide.php">Tour Guide</a>
                                 </li>
                                 <li>
                                    <a href="gallery.php">Gallery</a>
                                 </li>
                                 <li>
                                    <a href="faq.php">FAQ</a>
                                 </li>
                                 <li>
                                    <a href="testimonial-page.php">Testimonial</a>
                                 </li>
                                 <li>
                                    <a href="contact.php">Contact</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="menu-item-has-children">
                              <a href="">Shop</a>
                              <ul>
                                 <li>
                                    <a href="product-detail.php">Products</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="menu-item-has-children">
                              <a href="#">Blog</a>
                              <ul>
                                 <li><a href="blog-archive-left.php">Blog List</a></li>
                              </ul>
                           </li>
                        </ul>
                     </nav>
                  </div>
                  <div class="header-btn">
                     <a href="user_dashboard/login.php" class="button-primary">LOG IN</a>
                  </div>
               </div>
            </div>
            <div class="mobile-menu-container"></div>
         </header>
         <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
               <div class="inner-baner-container" style="background-image: url(assets/images/inner-banner.jpg);">
                  <div class="container">
                     <div class="inner-banner-content">
                        <h1 class="inner-title">Tour Packages</h1>
                     </div>
                  </div>
               </div>
               <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <!-- packages html start -->
            <div class="package-section">
               <div class="container">
                  <div class="package-inner">
                     <div class="row">
					 <?php 
						  if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									$package_id=$row["Pack_Id"];
									$image=$row["Pack_img"];
									$pack_price=$row["Reqular_price"];
									$days=$row["Days"];
									$night=$row["Night"];
									$group_size=$row["Group_size"];
									$Location=$row["Location"];
									$description=$row["Description"];
                           $Pack_title=$row["Pack_title"];
									
						echo '
                        <div class="col-lg-4 col-md-6">
                           <div class="package-wrap">
                              <figure class="feature-image">
                                 <a href="#">
                                   <img src="admin_dashboard/package/'.$image.'" width = "376px" height="249px">
                                 </a>
                                 
                              </figure>
                              <div class="package-price">
                                 <h6>
                                    <span >$'.$pack_price.'  </span>  / per person
                                 </h6>
                              </div>
                              <div class="package-content-wrap">
                                 <div class="package-meta text-center">
                                    <ul>
                                       <li>
                                          <i class="far fa-clock"></i>
                                          '.$days.'D/'.$night.'N
                                       </li>
                                       <li>
                                          <i class="fas fa-user-friends"></i>
                                          People: '.$group_size.'
                                       </li>
                                       <li>
                                          <i class="fas fa-map-marker-alt"></i>
                                          '.$Location.'
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="package-content">
                                    <h3>
                                       <a href="#">'.$Pack_title.'</a>
                                    </h3>
                                    <div class="review-area">
                                       <span class="review-text">(25 reviews)</span>
                                       <div class="rating-start" title="Rated 5 out of 5">
                                          <span style="width: 60%"></span>
                                       </div>
                                    </div>
                                    <p>'.$description.'.</p>
                                    <div class="btn-wrap">
                                    <a href ="package-detail.php ?Pack_Id=<?php  echo $row["Pack_Id"]; "?>SEE MORE<i class="fas fa-arrow-right"></i></a>
                                       <a href="#" class="button-text width-6">WISH LIST<i class="far fa-heart"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
						';

									}
							} else {
								echo "<p>Nothing to show</p>";
							}

						   ?>
            <!-- packages html end -->
            <!-- Home activity section html start -->
            <section class="activity-section">
               <div class="container">
                  <div class="section-heading text-center">
                     <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                           <h5 class="dash-style">TRAVEL BY ACTIVITY</h5>
                           <h2>ADVENTURE & ACTIVITY</h2>
                           <p>Experience the courage inside you . Realize that you can do it alone as well as the team. Only one thing you need to have your first step .</p>
                        </div>
                     </div>
                  </div>
                  <div class="activity-inner row">
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon6.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Adventure</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon10.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Trekking</a>
                              </h4>
                              <p>12 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon9.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camp Fire</a>
                              </h4>
                              <p>7 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon8.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Off Road</a>
                              </h4>
                              <p>15 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon7.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Camping</a>
                              </h4>
                              <p>13 Destination</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="activity-item">
                           <div class="activity-icon">
                              <a href="#">
                                 <img src="assets/images/icon11.png" alt="">
                              </a>
                           </div>
                           <div class="activity-content">
                              <h4>
                                 <a href="#">Exploring</a>
                              </h4>
                              <p>25 Destination</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- activity html end -->
         </main>
         <footer id="colophon" class="site-footer footer-primary">
            <div class="top-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">
                              About Travel
                           </h3>
                           <div class="textwidget widget-text">
                              John Travels - Trips by Woocurs. 
							  where you are going to make memories in your Life.
                           </div>
                           <div class="award-img">
                              <a href="#"><img src="assets/images/logo6.png" alt=""></a>
                              <a href="#"><img src="assets/images/logo2.png" alt=""></a>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_text">
                           <h3 class="widget-title">CONTACT INFORMATION</h3>
                           <div class="textwidget widget-text">
                              Let's have a Trip - which will help you to Explore new world - Mirabilis.
                              <ul>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-phone-alt"></i>
                                      +94 76 245 0858
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <i class="fas fa-envelope"></i>
                                       info.johntravels@gmail.com
                                    </a>
                                 </li>
                                 <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                     #377 B 1/1, Mannar Road, Veppankulam, Vavuniya, Srilanka
                                 </li>
                              </ul>
                           </div>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_recent_post">
                           <h3 class="widget-title">Latest Post</h3>
                           <ul>
                              <li>
                                 <h5>
                                    <a href="#">Life is a beautiful journey not a destination</a>
                                 </h5>
                                 <div class="entry-meta">
                                    <span class="post-on">
                                       <a href="#">August 17, 2021</a>
                                    </span>
                                    <span class="comments-link">
                                       <a href="#">No Comments</a>
                                    </span>
                                 </div>
                              </li>
                              <li>
                                 <h5>
                                    <a href="#">Take only memories, leave only footprints</a>
                                 </h5>
                                 <div class="entry-meta">
                                    <span class="post-on">
                                       <a href="#">August 17, 2021</a>
                                    </span>
                                    <span class="comments-link">
                                       <a href="#">No Comments</a>
                                    </span>
                                 </div>
                              </li>
                           </ul>
                        </aside>
                     </div>
                     <div class="col-lg-3 col-md-6">
                        <aside class="widget widget_newslatter">
                           <h3 class="widget-title">SUBSCRIBE US</h3>
                           <div class="widget-text">
                              Make your footprints Everywhere. Get updates.
                           </div>
                           <form class="newslatter-form">
                              <input type="email" name="s" placeholder="Your Email..">
                              <input type="submit" name="s" value="SUBSCRIBE NOW">
                           </form>
                        </aside>
                     </div>
                  </div>
               </div>
            </div>
            <div class="buttom-footer">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-5">
                        <div class="footer-menu">
                           <ul>
                              <li>
                                 <a href="#">Privacy Policy</a>
                              </li>
                              <li>
                                 <a href="#">Term & Condition</a>
                              </li>
                              <li>
                                 <a href="#">FAQ</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-2 text-center">
                        <div class="footer-logo">
                           <a href="#"><img src="assets/images/John_Travels_LK_Banner_R.png" alt=""></a>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="copy-right text-right">Copyright © 2023 John Travels LK. All rights reserveds</div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
         </a>
         <!-- custom search field html -->
         <div class="header-search-form">
            <div class="container">
               <div class="header-search-container">
                  <form class="search-form" role="search" method="get" >
                     <input type="text" name="s" placeholder="Enter your text...">
                  </form>
                  <a href="#" class="search-close">
                     <i class="fas fa-times"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- header html end -->
      </div>

      <!-- JavaScript -->
      <script src="assets/js/jquery.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
      <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
      <script src="assets/js/jquery.counterup.js"></script>
      <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
      <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
      <script src="assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
      <script src="assets/vendors/slick/slick.min.js"></script>
      <script src="assets/js/jquery.slicknav.js"></script>
      <script src="assets/js/custom.min.js"></script>
   </body>
</html>