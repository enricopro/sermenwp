
    <h1 style="text-align: center; margin-top: 50px; color: #fff;" class="titolo"><strong>Contattaci<strong></h1> <!-- Page Title -->
	 <h5 style="color: #fff; text-align: center; margin-bottom: 15px;">Se hai dubbi o proposte non esitare a contattarci:</h5>
	 <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
		<div class="d-flex justify-content-center">
  		 <div style="width: 400px;" class="d-flex justify-content-center">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->
		  </div>
<?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
        <!--Grid column-->
        <div style="color: white" class="d-flex justify-content-around">
            


                <div style="text-align: center"><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+39 0498625113</p>
                </div>

                <div style="text-align: center;"><i class="fas fa-fax mt-4 fa-2x"></i>
                    <p>+39 0498862989</p>
                </div>

            
        </div>
        <!--Grid column-->

    </div>

<!--Section: Contact v.2-->
