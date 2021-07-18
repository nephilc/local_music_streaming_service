<?php
if ($_POST) {
    // Execute code (such as database updates) here.
 
    // Redirect to this page.//redirecting to the same page
    header( "Location: ../../Home.php", true, 303 );
    exit();
 }
?>