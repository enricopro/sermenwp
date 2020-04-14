<?php get_header();?>
<?php
    if ( is_page('home') ) {
      require_once('components/carousel.inc.php');
		require_once('components/chisiamo.inc.php');
    }
	 else if ( is_page('dove-siamo') ) {
		require_once('components/map.inc.php');
	 }
	 else if ( is_page('contattaci') ) {
		require_once('components/form.inc.php');
	 }
?>
<?php get_footer(); ?>


