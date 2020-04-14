
    <h1 style="text-align: center; margin-top: 50px; color: #fff;" class="titolo">Catalogo</h1> <!-- Page Title -->
	 <h4 style="color: #fff; text-align: center;">Guarda online i nostri prodotti o scarica il nuovo <u><a style="color: #fff;" href="http://www.sermendrinking.com/UserFiles/File/CATALOGO/Catalogo_2017.pdf">catalogo</a></u></h4>
	 <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div style="color: #fff; border-radius: 10px;" class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
