<?php
/*
* Template name: Home-template
*/

get_header();

?>

<?php

if( have_rows('homepage_template') ):
    while( have_rows('homepage_template') ) : the_row();

        if( get_sub_field('what_you_want_to_add') == 'Slider full width' ) {
            get_template_part('blocks/block','slider'); //To edit Slider go to blocks/block-slider.php
        }

        if( get_sub_field('what_you_want_to_add') == 'Text - Image' ) { 
            get_template_part('blocks/block','textimage'); //To edit Text-Image go to blocks/block-textimage.php    
        } 


        if( get_sub_field('what_you_want_to_add') == 'Featured Product' ) {
            wc_get_template_part( 'blocks/block', 'featuredproduct' ); //To edit featured product go to blocks/block-featuredproduct.php            
        }
 
        if( get_sub_field('what_you_want_to_add') == 'Heading' ) {
            get_template_part( 'blocks/block', 'heading' ); //To edit Heading go to blocks/block-heading.php
         }
            

        if( get_sub_field('what_you_want_to_add') == '3 columns' ) {
            get_template_part('blocks/block','3columns'); //To edit 3columns block go to blocks/block-3columns.php    
        }

        if( get_sub_field('what_you_want_to_add') == 'FAQ' ) {
            get_template_part('blocks/block','faq'); //To edit FAQ go to blocks/block-faq.php    
        }

        if( get_sub_field('what_you_want_to_add') == 'Reviews' ) {
            get_template_part('blocks/block','reviews'); //To edit reviews block go to blocks/block-faq.php
        }

    endwhile;

else :
    echo 'I dont have what to show, go create your first block click "Edit Page"';
endif;


get_footer();
