<?php

$rowclass = wp_unique_id( 'uniquerow' );
$colclass = wp_unique_id( 'uniquecol' );

if( have_rows('3_columns') ){
    echo '<div class="sitewidth">';
    while( have_rows('3_columns') ) : the_row();

$ch1 = get_sub_field('column_heading1');
$ch2 = get_sub_field('column_heading2');
$ch3 = get_sub_field('column_heading3');
$ct1 = get_sub_field('column_text1');
$ct2 = get_sub_field('column_text2');
$ct3 = get_sub_field('column_text3');
$ci1 = get_sub_field('column_image1');
$ci2 = get_sub_field('column_image2');
$ci3 = get_sub_field('column_image3');

?>

<div class="threerow <?php echo $rowclass; ?>">
    <div class="threecol <?php echo $colclass; ?>">
    <?php if($ci1){ ?>
        <img src="<?php echo $ci1; ?>">
    <?php } ?>
    <h4 class="threecolhead"><?php echo $ch1; ?></h4>
    <p class="threecolp"><?php echo $ct1; ?></p>
    </div>
    <div class="threecol <?php echo $colclass; ?>">
    <?php if($ci2){ ?>
    <img src="<?php echo $ci2; ?>">
    <?php } ?>
    <h4 class="threecolhead"><?php echo $ch2; ?></h4>
    <p class="threecolp"><?php echo $ct2; ?></p>
    </div>
    <div class="threecol <?php echo $colclass; ?>">
    <?php if($ci3){ ?>
    <img src="<?php echo $ci3; ?>">
    <?php } ?>
    <h4 class="threecolhead"><?php echo $ch3; ?></h4>
    <p class="threecolp"><?php echo $ct3; ?></p>
    </div>
</div>

<?php endwhile;
echo '</div>'; //end of sitewidth
}