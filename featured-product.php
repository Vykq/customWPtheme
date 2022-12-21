<?php
global $product;
?>
<script>
    //Splide scripts to make gallery work
    document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '#productsplide' );
    splide.mount();
  
    var thumbnails = document.getElementsByClassName( 'thumbnail' );
    var current;

    for ( var i = 0; i < thumbnails.length; i++ ) {
    initThumbnail( thumbnails[ i ], i );
    }

    function initThumbnail( thumbnail, index ) {
    thumbnail.addEventListener( 'click', function () {
        splide.go( index );
    } );
    }

    splide.on( 'mounted move', function () {
    var thumbnail = thumbnails[ splide.index ];

    if ( thumbnail ) {
    if ( current ) {
      current.classList.remove( 'is-active' );
    }

    thumbnail.classList.add( 'is-active' );
    current = thumbnail;
  }
} );

} );
</script>
<div class="ftproductcol ftproductgallery">

<?php

            $imagelinks = array(); //Create new array to store product image urls
            $mainimg = get_the_post_thumbnail_url(); //main img url
            $attachment_ids = $product->get_gallery_image_ids();

            array_push($imagelinks,$mainimg); // place main img to the first place of empty array

            foreach( $attachment_ids as $attachment_id ) {
               $image_link = wp_get_attachment_url( $attachment_id );
               array_push($imagelinks,$image_link);  // place image photos to array
            }
            

        ?>

        <section id="productsplide" class="splide" aria-label="My Product Gallery">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                        foreach($imagelinks as $imagelink){ ?>
                            <li class="splide__slide">
                                <img src="<?php echo $imagelink; ?>">
                            </li> <?php
                        } ?>
                </ul>
            </div>
        </section>

        <ul id="thumbnails" class="thumbnails">
        <?php
                        foreach($imagelinks as $imagelink){ ?>
                            <li class="thumbnail">
                                <img src="<?php echo $imagelink; ?>">
                            </li> <?php
                        } ?>
        </ul>


    </div>
    <div class="ftproductcol ftproductsummary">

        <h1 class="producttitle"><?php the_title(); ?> </h1>
        <div class="ftprodreview">
        <?php
            if ( ! wc_review_ratings_enabled() ) {
                return;
            }
        
            $rating_count = $product->get_rating_count(); // How many people left a review
            $review_count = $product->get_review_count(); // how many reviews
            $average      = $product->get_average_rating();
            
            if ( $rating_count > 0 ) : ?>
                <div class="woocommerce-product-rating">
                    <?php echo wc_get_rating_html( $average , $rating_count ); // WPCS: XSS ok. ?>
                </div>
        <?php endif; ?>
        </div>
        <div class="ftprice"><?php
            $saleprice = $product->get_sale_price();
            $regularprice = $product->get_regular_price();
            $save = $regularprice - $saleprice;
            $savetext = get_field('featured_product_save_text','main-settings');
             echo $product->get_price_html();
             echo '<p class="savepricetext">' . $savetext . ': <span class="saveprice">' . $save . get_woocommerce_currency_symbol() . '</span></p>';
             ?>
        </div>
        <div class="ftatc">
            <?php do_action('woocommerce_simple_add_to_cart'); ?>
        </div>
        <?php
        if(have_rows('icons')){
            ?>
            <div class="fticons">
                <?
            while( have_rows('icons') ){
                the_row();
                $iconhead = get_sub_field('icon_heading');
                $icontext = get_sub_field('icon_text');
                $iconcode = get_sub_field('icon_code');
                $iconcolor = get_sub_field('icon_color');
                ?>
                <div class="featuredicons">
                    <div class="fticon">
                        <i style="color:<?php echo $iconcolor; ?>" class="<?php echo $iconcode; ?> smallicon"></i>
                    </div>
                    <div class="fticoncontent">
                        <h3><?php echo $iconhead; ?></h3>
                        <p><?php echo $icontext; ?></p>
                    </div>
                </div>
                <?php
            }
        }
        ?>
        </div>
        <?php   
        ?>
        
               
    </div>
    <?php
    ?>
                <style>
             .ftprice ins span {
            color:<?php the_field('featured_product_price_color','main-settings'); ?>;
            }
            .wp-element-button {
                background-color:<?php the_field('featured_product_add_to_cart_button_color','main-settings'); ?>;
                color:<?php the_field('featured_product_add_to_cart_button_text_color','main-settings'); ?>;
            }
            </style>
            <?