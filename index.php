<? get_header();

?>

<h1> Tutorial how to configure theme: </h1>
<ol>
<li>To change header go to wp-admin and click customise your theme and open Header settings. There you will be able to edit:</li>
<li>Top Bar Text/Color/Placement and the whole top bar color</li>
<li>Create a new page and name it "Home" and assign Home-template for it.</li>
<li>Then you will see a lot of custom fields in the bottom of the page, edit them yourself to your specific product.</li>
<li>To edit home-template go to theme folder/templates/page-homepage.php </li>
</ol>

<h2>You need to download these plugins</h2>
<ul>
    <li>Advanced custom fields (ACF), and then import fields from .json file (included)</li>
    <li>WooCommerce - Import your product and assign into fields</li>
    <li>Contact form 7 - create a form and paste the shortcode into contacts-page</li>
</ul>



<?php
get_footer();
