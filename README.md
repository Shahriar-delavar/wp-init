

# wp-init


Small add-on to use WordPress as a back-end for a php site


Example use 

For dislaying a form made by contact form - 7  : 

<?php 

require_once("init.php");
echo "<title> Contant form </title>";
usetheme();
usethemeheader();
//get_header();
echo "<h3> insert image here </h3>";
$shortcode = '[contact-form-7 id="70" title="Untitled"]';
wpsc($shortcode);
get_footer();




