	<!-- Footer Section Start -->
  
    <footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <?php  global $taibasaadh; ?>
                <h3 class="footer-logo"><img src="<?php echo esc_url($taibasaadh['logo_footer']['url']); ?>" alt=""></h3>
                <div class="textwidget">
                  <p><?php echo esc_html($taibasaadh['desc']); ?></p>
                </div>
                <div class="social-icon">
                  <a class="facebook" href="<?php echo esc_html($taibasaadh['facebook']); ?>"><i class="lni-facebook-filled"></i></a>
                  <a class="twitter" href="<?php echo esc_html($taibasaadh['twitter']); ?>"><i class="lni-twitter-filled"></i></a>
                  <a class="instagram" href="<?php echo esc_html($taibasaadh['instagram']); ?>"><i class="lni-instagram-filled"></i></a>
                  <a class="linkedin" href="<?php echo esc_html($taibasaadh['linkdin']); ?>"><i class="lni-linkedin-filled"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
           <?php if(is_active_sidebar('footer')){ ?>
          <ul class="footer-link">
            <?php 
                 dynamic_sidebar('footer');
                  ?> 
                </ul>
                      <?php 
                     } ?>
      </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              
              <?php if(is_active_sidebar('footer_three')){ ?>
          <ul class="footer-link">
            <?php 
                  dynamic_sidebar('footer_three');
                      ?> 

          </ul>
                <?php 
                 } ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Contact</h3>
              <ul class="address">
                <li>
                  <a href="#"><i class="lni-map-marker"></i> <?php echo esc_html($taibasaadh['address1']); ?> - <br><?php echo esc_html($taibasaadh['address2']); ?></a>
                </li>
                <li>
                  <a href="#"><i class="lni-phone-handset"></i> P: <?php echo esc_html($taibasaadh['phone']); ?></a>
                </li>
                <li>
                  <a href="#"><i class="lni-envelope"></i> E: <?php echo esc_html($taibasaadh['email']); ?></a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
      </div> 
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-content">
                <p><?php echo esc_html($taibasaadh['copyrightmm']); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </footer> 
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
  
      <?php wp_footer(); ?>
  </body>
</html>
