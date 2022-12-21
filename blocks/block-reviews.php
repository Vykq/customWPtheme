<?php


if(have_rows('reviews')){
    ?>
    <div class="sitewidth">
            <ol class="commentlist">
        <?php
    while(have_rows('reviews')) :
    the_row();
    $productas = get_sub_field('product');
    
    $args = array (
    'post_type' => 'product',
    'post_id' => $productas
);
    $comments = get_comments( $args );
    wp_list_comments( array( 'callback' => 'woocommerce_comments' ), $comments);
wp_reset_postdata();



endwhile;
?>
</ol>
</div>
<?php
}
