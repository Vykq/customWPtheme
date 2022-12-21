<?php

/***
 * 
 *  The template of loop posts Vykintas Venckus
 */

?>

<article class="post">
    <?php
    ?>
    <a href="<? the_permalink(); ?>"> <? the_title(); ?> </a>
    <?
    the_content();
    ?>
</article>
