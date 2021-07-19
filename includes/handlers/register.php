
<?php

require "../bp.php";//mysqland session
require "../classes/user.php";
?>

<?php


if ($_POST) {
    // Execute code (such as database updates) here.
    $user = new user($connection);
    $result = $user->register($_POST["username"], $_POST["password"], $_POST["verifyPassword"],  $_POST["email"], $_POST["verifyEmail"], $_POST["birthdate"]);
    echo $result;
    // Redirect to this page.//redirecting to the same page
    //header( "Location: ../../Home.php", true, 303 );
    exit();
 }
?>