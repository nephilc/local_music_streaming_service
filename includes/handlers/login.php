<?php

require "../bp.php";
require "../classes/user.php";
?>

<?php
echo $_POST["username"];
echo $_POST["LOGIN"];
if (isset($_POST["LOGIN"])) {
    $user = new user($connection);
    $result =  $user->login($_POST["username"], $_POST["password"]);
    if($result == true){
        //echo "user recognized";
        $_SESSION["loggedUser"] = $user;
        header( "Location: ../../browse.php", true, 303 );
        exit();
    }
    else{
        header( "Location: ../../Home.php", true, 303 );

    }
    //exit();
 }
?>