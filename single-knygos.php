<?php

get_header();

?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				the_title();

                the_content();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				the_post_navigation();

			endwhile; // End the loop.
			?>
<?php

/***
 * To show other post type posts in single.php
 */
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
                 'post_type' => 'post',  //Specifying post type
                );
    $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
         ?>     
            <h3><?php the_title();?></h3>   
        <?php 
        endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();