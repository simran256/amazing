<?php include("conn.php"); 



?>
 <footer class="footer-area">
         <div class="footer-widget">
            <div class="container">
               <div class="row footer-widget-wrapper pt-50 pb-10">
                  <div class="col-md-6 col-lg-4">
                     <div class="footer-widget-box about-us">
                        <h4 class="footer-widget-title">Contact Details</h4>
                        <ul class="footer-contact">
                           <li><i class="far fa-home"></i>  AMAZING INFOTECH PRIVATE LIMITED</li>
                           <li><a href="tel:+91-9971314354"><i class="far fa-phone"></i>+91-9971314354, 8800520198 </a></li>
                           <li><i class="far fa-map-marker-alt"></i> GROUND FLOOR, 48, VILLAGE HASANPUR, NEAR RELIANCE FRESH, I.P EXTENSION, New Delhi, East Delhi, Delhi, 110092</li>
                           <li><a href="mailto:support@amazinginfotech.in"><i class="far fa-envelope"></i> support@amazinginfotech.in, sales@amazinginfotech.in</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-2">
                     <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <ul class="footer-list">
                           <li><a href="<?=$site?>about-us.php"><i class="fas fa-dot-circle"></i> About Us</a></li>
                           <li><a href="<?=$site?>our-branches.php"><i class="fas fa-dot-circle"></i> Our Branches</a></li>
                           <li><a href="<?=$site?>careers.php"><i class="fas fa-dot-circle"></i> Careers</a></li>
                           <li><a href="<?=$site?>news-and-events.php"><i class="fas fa-dot-circle"></i> News & Events</a></li>
                           <li><a href="<?=$site?>our-branches.php"><i class="fas fa-dot-circle"></i> Our Branches</a></li>
                           <li><a href="<?=$site?>contact-us.php"><i class="fas fa-dot-circle"></i> Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Our Products</h4>
                        <ul class="footer-list">
   <?php
                    $sql ="SELECT * FROM `cat_prod` WHERE sub_category_id = '0' AND status = '1'";
                    $res = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($res)) {
                        $category_name = $row['ct_pd_name'];
                        $category_id = $row['id'];
                                         $product_url = $row['ct_pd_url'];  
                    
                    ?>
                           <li><a href="<?php echo $site ?>products.php?category=<?php echo $product_url; ?>"><i class="fas fa-dot-circle"></i><?php echo $category_name;?></a></li>
                           <?php
                    }
                    ?>
                       </ul>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="footer-widget-box list">
                        <h4 class="footer-widget-title">Newsletter</h4>
                        <div class="footer-newsletter">
                           <p>Subscribe Our Newsletter To Get Latest Update And News</p>
                           <div class="subscribe-form">
                              <form action="#">
                                 <input type="email" class="form-control" placeholder="Your Email">
                                 <button class="theme-btn" type="submit">
                                 Subscribe Now <i class="far fa-paper-plane"></i>
                                 </button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 align-self-center">
                     <p class="copyright-text">
                        &copy; Copyright <span id="date"></span> <a href="#">  AMAZING INFOTECH PRIVATE LIMITED </a> All Rights Reserved.
                     </p>
                  </div>
                  <div class="col-md-6 align-self-center">
                     <ul class="footer-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <a href="#" id="scroll-top"><i class="far fa-angle-up"></i></a>
      <script src="assets/js/jquery-3.7.1.min.js"></script>
      <script src="assets/js/modernizr.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/isotope.pkgd.min.js"></script>
      <script src="assets/js/jquery.appear.min.js"></script>
      <script src="assets/js/jquery.easing.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/counter-up.js"></script>
      <script src="assets/js/masonry.pkgd.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/main.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>