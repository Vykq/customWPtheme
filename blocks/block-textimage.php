<?php
echo '<div class="sitewidth">';

if( have_rows('text_image') ){
    while( have_rows('text_image') ) : the_row();

$titext = get_sub_field('text_field');
                    $tiimage = get_sub_field('image_ti');
                    if( get_sub_field('which_direction') == 'ti' ) {
                        ?>
                        <div class="tirow">
                            <div class="ticol textcol">
                            <?php echo $titext; ?>
                            </div>
                            <div class="ticol imagecol">
                            <img src="<?php echo $tiimage; ?>">
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="tirow">
                            <div class="ticol imagecol">
                            <img src="<?php echo $tiimage; ?>">
                            </div>
                            <div class="ticol textcol">
                            <?php echo $titext; ?>
                            </div>
                        </div>
                    <?php 
                    }
     endwhile;
}

echo '</div>';