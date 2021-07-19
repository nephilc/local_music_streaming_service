<?php

require "../bp.php";
require "../classes/user.php";
?>

<?php
echo $_POST["username"];
echo $_POST["LOGIN"];

if (isset($_POST["LOGIN"])) {
    $user = new user($connection);
    $result =  $user->login(strtolower(trim($_POST["username"])), $_POST["password"]);
    if($result == true){
        //echo "user recognized";
        $_SESSION["loggedUser"] = $_POST["username"];
        header("Location: ../../singlePage.php", true, 303 );
        exit();
    }
    else{
        header( "Location: ../../Home.php", true, 303 );

    }
    //exit();
 }
?>