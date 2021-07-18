<?php
//this code gurads the page against unauthroized access
//include this after bp.php
//user should have gone through login.php

if(isset($_SESSION["loggedUser"])) {

}
else {
    echo "Username variable was not passed into the page. Check the openPage JS function";
    exit();
}

//if the user reloads the page then the session must be done for.

?>