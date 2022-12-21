<?php
/***
 * 
 *  The footer template Vykintas Venckus
 * 
 */
?>

		</div><!-- #main -->

		<footer class="site-footer">
			<div class="footer-main">
			<div class="footer-col">
				<img id="footer-logo" src="<?php the_field('footer_logo', 'footer-options'); ?>">
				
				<?php
					if( have_rows('social_media', 'footer-options') ):
						echo '<div class="social-media-icons">';
						while( have_rows('social_media', 'footer-options') ) : the_row();

							$icon = get_sub_field('social_media_icon');
							$url = get_sub_field('social_media_url');
							$color = get_sub_field('social_media_color');

							?>
							<a class="social-media-icon" target="_blank" href="<?php echo $url; ?>"><i style="font-size:24px; color:<?php echo $color; ?>" class="<?php echo $icon; ?>"></i></a>
							<?

						endwhile;
						echo '</div>'; // close social-media-icons
					else :
					endif;
				?>
			</div>
			<div class="footer-col">
			<?php
				$defaults2 = array(
					'theme_location'  => 'header-menu',
					'container'       => '',
					'items_wrap'      => '<nav>%3$s</nav>'
				);
				wp_nav_menu( $defaults2 );
				?>
			</div>
			<div class="footer-col">
			<?php
				$defaults3 = array(
					'theme_location'  => 'footer-menu-2',
					'container'       => '',
					'items_wrap'      => '<nav>%3$s</nav>'
				);
				wp_nav_menu( $defaults3 );
				?>
			</div>
			</div>
			<div class="footer-copyright" style="color:<?php the_field('copyrights_text_color', 'footer-options'); ?>">
			<img class="paymentcards" src="<?php the_field('payment_cards_image', 'footer-options'); ?>" alt="How you can pay" >
			<?php the_field('copyrights_text', 'footer-options'); ?>
			</div>
			</div><!-- .site-info -->
		</footer><!-- footer end -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
<style>
	footer {
		background-color: <?php the_field('footer_section_color', 'footer-options'); ?>;
	}

	footer nav li a {
            color:<?php the_field('navigation_item_color', 'footer-options'); ?>;
        }

        footer nav .current-menu-item a {
    color:<?php the_field('navigation_current_item_color', 'footer-options'); ?>;

}
	</style>
</html>