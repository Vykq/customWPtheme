<?php

if( have_rows('slider') ):
                    ?>

                <script>
                    document.addEventListener( 'DOMContentLoaded', function() {
                        var elms = document.getElementsByClassName( 'splide' );

                            for ( var i = 0; i < elms.length; i++ ) {
                            new Splide( elms[ i ] ).mount();
                            }
                    } );
                </script>

                    <div class="splide fullheight" role="group" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?
                    while( have_rows('slider') ) : the_row();
                    $sliderimage = get_sub_field('slider_image');
                    $slidermaintext = get_sub_field('slider_main_text');
                    $slidersubtext = get_sub_field('slider_sub_text');
                    $sliderbtntext = get_sub_field('slider_button_text');
                    $sliderbtnurl = get_sub_field('slider_button_link');
                    $slidertextcolor = get_sub_field('slider_text_color');
                    $sliderbtncolor = get_sub_field('slider_button_color');
                    $sliderbtntextcolor = get_sub_field('slider_button_text_color');

                    if( get_sub_field('content_placement') == 'left' ) { ?>
                    <li class="splide__slide" style="background-image:url('<?php echo $sliderimage; ?>')">
                        <div class="splide-left">
                            <?php
                            echo '<h2 style="color:' . $slidertextcolor .'">' . $slidermaintext . '</h2>';
                            echo '<p style="color:' . $slidertextcolor .'">' . $slidersubtext . '</p>';
                            echo '<a class="splidebtn" style="color:' . $sliderbtntextcolor . ';background-color:' . $sliderbtncolor .'" href="' . $sliderbtnurl . '">' . $sliderbtntext . '</a>';
                            ?>
                        </div>
                    </li>
                    <?php    
                    }

                    if( get_sub_field('content_placement') == 'center' ) { ?>
                    <li class="splide__slide" style="background-image:url('<?php echo $sliderimage; ?>')">
                    <div class="splide-center">
                    <?php
                            echo '<h2 style="color:' . $slidertextcolor .'">' . $slidermaintext . '</h2>';
                            echo '<p style="color:' . $slidertextcolor .'">' . $slidersubtext . '</p>';
                            echo '<a class="splidebtn" style="color:' . $sliderbtntextcolor . ';background-color:' . $sliderbtncolor .'" href="' . $sliderbtnurl . '">' . $sliderbtntext . '</a>';
                            ?>
                        </div>
                    </li>
                    <?php  
                    }

                    if( get_sub_field('content_placement') == 'right' ) { ?>
                    <li class="splide__slide" style="background-image:url('<?php echo $sliderimage; ?>')">
                    <div class="splide-right">
                            <?php
                            echo '<h2 style="color:' . $slidertextcolor .'">' . $slidermaintext . '</h2>';
                            echo '<p style="color:' . $slidertextcolor .'">' . $slidersubtext . '</p>';
                            echo '<a class="splidebtn" style="color:' . $sliderbtntextcolor . ';background-color:' . $sliderbtncolor .'" href="' . $sliderbtnurl . '">' . $sliderbtntext . '</a>';
                            ?>
                        </div>
                    </li>
                    <?php  
                    }

                endwhile;
                ?>
                            </ul>
                        </div>
                    </div>
                <?
            else:
            endif;