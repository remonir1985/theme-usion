 <!DOCTYPE html>
 <?php  global $taibasaadh; ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Fusion - Bootstrap 4 Template</title>

    <?php wp_head(); ?>
    
  </head>
  <body <?php body_class(); ?> >

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="index.html" class="navbar-brand"><img src="<?php echo esc_url($taibasaadh['headerlogo']['url']); ?>" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            
              <?php
               
                $args = array(
                'menu'          =>'mainmenu',
                'container'     =>true,
                'items_wrap'    => '<ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">%3$s</ul>',
                   'depth'         => 1,
                  'fallback_cb'   => false,
                 
                 
                );
               wp_nav_menu( $args ); 


                 ?>
                
            </ul>
          </div>
          
             
                









                
         
        
        </div>
      </nav>
      <!-- Navbar End -->


    </header>
    <!-- Header Area wrapper End -->