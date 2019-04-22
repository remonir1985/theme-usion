<?php /*Template Name: Fusion Page Template */ ?>
	<?php
    get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'TAIBA' );
    endif;
   // get_sidebar();
    get_footer(); 
?>