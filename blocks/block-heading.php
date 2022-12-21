<?php
$class = wp_unique_id( 'heading' );


    if( have_rows('heading') ){
        echo '<div class="sitewidth">';
                
            while( have_rows('heading') ) : the_row();

                $heading = get_sub_field('heading_text');
                                          
                if( get_sub_field('heading_position') == 'left' ) {
                    ?><h3 class="headingtitle <?php echo $class; ?>" style="text-align:left"><?php echo $heading; ?></h3><?php
                }

                if( get_sub_field('heading_position') == 'center' ) {
                    ?><h3 class="headingtitle <?php echo $class; ?>" style="text-align:center"><?php echo $heading; ?></h3><?php
                }

                if( get_sub_field('heading_position') == 'right' ) {
                    ?><h3 class="headingtitle <?php echo $class; ?>" style="text-align:center"><?php echo $heading; ?></h3><?php
                }

            endwhile;
        echo '</div>';
    }