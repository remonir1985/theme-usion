<?php

function section_1_hero($atts){

extract(shortcode_atts(array(
 'title' => 'This is title',
 'desc' => 'This is description',
 'image' =>'image here',
 
),$atts)
);

ob_start();
?>

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">      
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title"><?php echo esc_html($title); ?></h2>
                <p><?php echo esc_html($desc);?></p>
                <div class="header-button">
                  <a href="#" class="btn btn-common">Download Now</i></a>
                  <a href="#" class="btn btn-border video-popup">Learn More</i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="intro-img">
              	<?php $img_src1 = wp_get_attachment_image_src( $image, 'full'); ?>
                <img class="img-fluid" src="<?php echo esc_url($img_src1[0]); ?>" alt="">
              </div>            
            </div>
          </div> 
        </div> 
      </div>
      <!-- Hero Area End -->
<?php

return ob_get_clean();

}

add_shortcode('hero_section','section_1_hero');



//service section
function section_service($atts){

extract(shortcode_atts(array(
		'section_2_group'=>'',
		'Sec_2_main_title'=>'',
		'Sec_2_main_desc' =>'',
		'Sec_2_icon' => '',
 		
 
),$atts)
);

ob_start();
?>
 <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
		   <div class="row">
		 <?php $sec_2_service = vc_param_group_parse_atts($section_2_group);
		foreach ($sec_2_service as $service_2_value) {
			?>    
		          
                
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
              <div class="icon">
                <i class="lni-<?php echo esc_attr($service_2_value['Sec_2_icon']); ?>"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"><?php echo esc_html($service_2_value['Sec_2_title']); ?></a></h3>

                <p><?php echo esc_html($service_2_value['Sec_2_desc']); ?> </p>
              </div>
            </div>
            </div>
            <?php } ?>
          
        </div>
      </div>
    </section>
    <!-- Services Section End -->

					
<?php

return ob_get_clean();

}

add_shortcode('service_section','section_service');


//about section
function section_about($atts){

extract(shortcode_atts(array(
		
		'title'=>'title here',
		'title2'=>'title 2 here',
		'desc'=>'description here',
		'image' =>''
		
 		
 
),$atts)
);

ob_start();
?>
  <!-- About Section start -->
    <div class="about-area section-padding bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div>
                <div class="site-heading">
                  <p class="mb-3"><?php echo esc_html($title); ?></p>
                
                  <h2 class="section-title"><?php echo esc_html($title2); ?></h2>
                </div>
                <div class="content">
                  <p>
                    <?php echo esc_html($desc); ?>
                  </p>
                  <a href="#" class="btn btn-common mt-3">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
<?php $img_about = wp_get_attachment_image_src( $image, 'full'); ?>
            <img class="img-fluid" src="<?php echo esc_url($img_about[0]); ?>" alt="" >
          </div>
        </div>
      </div>
    </div>
    <!-- About Section End -->


					
<?php

return ob_get_clean();

}

add_shortcode('about_section','section_about');

//aawosome title section
function section_title($atts){

extract(shortcode_atts(array(
		
		'title'=>'title here',
		'color'=>'title 2 here',
		
		
 		
 
),$atts)
);

ob_start();
?>
  <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown <?php echo esc_html($color); ?>"  data-wow-delay="0.3s"><?php echo esc_html($title); ?></h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>


					
<?php

return ob_get_clean();

}

add_shortcode('title_section','section_title');


//aawosome content section
function section_content($atts){

extract(shortcode_atts(array(
		
		'title'=>'title here',
		'desc'=>'description here',
		'conteny_icon'=>'icon name 2 here',
		
		
 		
 
),$atts)
);

ob_start();
?>
  <div class="box-item wow fadeInLeft" data-wow-delay="0.3s">
                <span class="icon">
                  <i class="lni-<?php echo esc_html($conteny_icon); ?>"></i>
                </span>
                <div class="text">
                  <h4><?php echo esc_html($title); ?></h4>
                  <p><?php echo esc_html($desc); ?></p>
                </div>
              </div>

					
<?php

return ob_get_clean();

}

add_shortcode('content_section','section_content');


//aawosome middle section
function section_content_middle($atts){

extract(shortcode_atts(array(
		
		'image'=>'',
		
		
		
 		
 
),$atts)
);

ob_start();
?>
 <div class="show-box wow fadeInUp" data-wow-delay="0.3s">
 	<?php $image_middle = wp_get_attachment_image_src( $image, 'full' ); ?>
              <img src="<?php echo esc_url($image_middle[0]); ?>" alt="">
            </div>
					
<?php

return ob_get_clean();

}

add_shortcode('middle_section','section_content_middle');

//our team section
function section_our_team($atts){

extract(shortcode_atts(array(
		
		'team_group'=>'',
		'name'		=>'',
		'degination'=>'',
		'dese'=>'',
		'image'		=>'',
		'facebook'	=>'',
		'twitter'	=>'',
		'instagram'	=>''
			
 
),$atts)
);

ob_start();
?>
 <!-- Team Section Start -->
    <section id="team" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Meet our team</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
		 <?php $sec_2_team = vc_param_group_parse_atts($team_group);
		foreach ($sec_2_team as $team_2_value) {
			?>

          <div class="col-lg-6 col-md-12 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
              	<?php $img_team = wp_get_attachment_image_src( $team_2_value['image'], 'full'); ?>
                <img class="img-fluid" src="<?php echo esc_url($img_team[0]); ?>" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#"><?php echo esc_html($team_2_value['name']); ?></a></h3>
                  <p><?php echo esc_html($team_2_value['degination']); ?></p>
                </div>
                <p><?php echo esc_html($team_2_value['desc']); ?></p>
                <ul class="social-icons">
                  <li><a href="<?php echo esc_url($team_2_value['facebook']); ?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo esc_url($team_2_value['twitter']); ?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                  <li><a href="<?php echo esc_url($team_2_value['instagram']); ?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
         
          <?php } ?>
          
           
          </div>
        </div>
      </div>
    </section>
    <!-- Team Section End -->

					
<?php

return ob_get_clean();

}

add_shortcode('team_section','section_our_team');


//PRICING section
function section_pricing($atts){

extract(shortcode_atts(array(
		
		'price_group'	=>'',
		'icon'		=>'',
		'price'			=>'',
		'title'			=>'',
		'user'			=>'',
		'storage'		=>'',
		'support'		=>'',
		'updates'		=>'',
		
			
 
),$atts)
);

ob_start();
?>
 <!-- Team Section Start -->
   
		 
	<!-- Pricing section Start --> 
    <section id="pricing" class="section-padding">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Pricing</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
			
			<?php $sec_2_price = vc_param_group_parse_atts($price_group);
			foreach ($sec_2_price as $price_2_value) {
			?>


          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInLeft" data-wow-delay="1.2s">
              <div class="icon-box">
                <i class="lni-<?php echo esc_attr($price_2_value['icon']); ?>"></i>
              </div>
              <div class="pricing-header">
                <p class="price-value">$<?php echo esc_html($price_2_value['price']); ?><span> /mo</span></p>
              </div>
              <div class="title">
                <h3><?php echo esc_html($price_2_value['title']); ?></h3>
              </div>
              <ul class="description">
                <li><?php echo esc_html($price_2_value['user']); ?> user</li>
                <li><?php echo esc_html($price_2_value['storage']); ?>storage</li>
                <li><?php echo esc_html($price_2_value['price']); ?></li>
                <li><?php echo esc_html($price_2_value['updates']); ?> updates</li>
              </ul>
              <button class="btn btn-common">Buy Now</button>
            </div> 
          </div>
         
		<?php } ?>

          </div>
          

        </div>
      </div>
    </section>
    <!-- Pricing Table Section End -->
					
<?php

return ob_get_clean();

}

add_shortcode('pricing_section','section_pricing');

//testimonial section
function section_testimonial($atts){

extract(shortcode_atts(array(
		
		'testimonial_group'	=>'',
		'image'		=>'',
		'name'			=>'',
		'degi'			=>'',
		'desc'			=>'',
		
		
			
 
),$atts)
);

ob_start();
?>
	
 <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <?php $sec_2_testimonial = vc_param_group_parse_atts($testimonial_group);
			foreach ($sec_2_testimonial as $testimonial_2_value) {
			?>

              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                  	<?php $img_testimonial = wp_get_attachment_image_src( $testimonial_2_value['image'], 'full'); ?>
                    <img src="<?php echo esc_url($img_testimonial[0]); ?>" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#"><?php echo esc_html($testimonial_2_value['name']); ?> </a></h2>
                    <h3><a href="#"><?php echo esc_html($testimonial_2_value['degi']); ?></a></h3>
                  </div>
                  <div class="content">
                    <p class="description"><?php echo esc_html($testimonial_2_value['desc']); ?>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-filled"></i></span>
                      <span><i class="lni-star-half"></i></span>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
      
     
              



              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial Section End -->
   
		 
	
    
    <?php

return ob_get_clean();

}

add_shortcode('testimonial_section','section_testimonial');


//call to action

function section_call_to_action($atts){

extract(shortcode_atts(array(
		
		'title'=>'',
		'desc'=>'',
		'Link'=>'',
		
		
		
 		
 
),$atts)
);

ob_start();
?>
  <!-- Call To Action Section Start -->
    <section id="cta" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">           
            <div class="cta-text">
              <h4><?php echo esc_html($title) ;?></h4>
              <p><?php echo esc_html($desc) ;?> </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12 text-right wow fadeInRight" data-wow-delay="0.3s">
          	<?php $href = vc_build_link( $Link )?>
            </br><a href="<?php echo esc_url($href ) ;?>" class="btn btn-common">Register Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Call To Action Section Start -->
					
<?php

return ob_get_clean();

}

add_shortcode('call_to_action_section','section_call_to_action');

//contact us section

function section_contact_us($atts,$content = null){

extract(shortcode_atts(array(
		
		'title'=>'',
		'place'	=>'dhaka',
		'width'	=>'100%',
		'height'=>'280',
		'zoom'	=>'13'
		
		
		
		
		
 		
 
),$atts)
);

ob_start();
?>

    <section id="contact" class="section-padding bg-gray">    
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html($title); ?></h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.3s">   
          <div class="col-lg-7 col-md-12 col-sm-12">
            <div class="contact-block">
            	<?php include_once(ABSPATH .'wp-admin/includes/plugin.php');
            	if(is_plugin_active('contact-form-7/wp-contact-form-7.php')){
            	echo do_shortcode( $content);
            }
            	 ?>
             


            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="map">
             <div>
		   	 <div>
		        <iframe width="<?php echo esc_html($width); ?>" height="<?php echo esc_html($height); ?>"
		                src="https://maps.google.com/maps?q=<?php echo esc_html($place); ?>&t=&z=<?php echo esc_html($zoom); ?>&ie=UTF8&iwloc=&output=embed"
		                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
		        </iframe>
		    </div>
				</div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->
					
<?php

return ob_get_clean();

}

add_shortcode('contact_us_section','section_contact_us');


 ?>