<?php

if( have_rows('faq') ){ 
   echo '<div class="sitewidth">';
    while( have_rows('faq') ) :  the_row();

$question = get_sub_field('question');
$answer = get_sub_field('answer');
?>
<button class="faq-accordion"><?php echo $question; ?></button>
     <div class="faq-panel" style="display:none">
         <p><?php echo $answer; ?></p>
     </div>

<?php endwhile;
echo '</div>';
}
