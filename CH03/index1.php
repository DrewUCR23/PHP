Drew Gonzales
4/6/2023
Professor Lasky
CIS 12 LAB 3
PHP (DYNAMIC WEB PROGRAMMING)
SCRIPT 3.7
CLASS CODE: 47060

Things different on this form: 3.7 This version of the home page has a user-defined function that outputs a theoretical
ad. The function is called twice in the script, thus creating two ads.

<?php 
// Script - index.php 

// This function outputs theoretical HTML
// for adding ads to a web page.
function create_ad() {
  echo '<div class="alert alert-info" role="alert"><p>This is an annoying ad! This is
 an annoying ad! This is an annoying ad! This is an annoying ad!</p></div>';
} // End of the function definition.

$page_title = 'Welcome to this Site!';
include('includes/header.html');

// Call the function:
create_ad();
?>

<div class="page-header"><h1>Content Header</h1></div>
<p>This is where the page-specific content goes. This section, and the corresponding 
header,
 will change from one page to the next.</p>

<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. 
Vestibulum
 sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque
 eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing
 blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, 
arcu
 lorem ipsum dolor sit amet.</p>

<?php
// Call the function again:
create_ad();

include('includes/footer.html');
?>
