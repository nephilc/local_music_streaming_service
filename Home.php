<?php 
include "./includes/bp.php";
include "./includes/guard.php";

?>


<?php
if ($_POST) {
    // Execute code (such as database updates) here.
 
    // Redirect to this page.//redirecting to the same page
    header( "Location: register.php", true, 303 );
    exit();
 }

?>
<?php $root = "./includes/elements/"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="./css/layout.css">
    <link rel="stylesheet" type="text/css" href="./includes/elements/Forms/Form.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    </script>
    <title>WELCOME TO STREAMIFY</title>
</head>
<body>
<div class="mainContainer">

<?php include $root."Forms/loginForm.html"; ?>
<?php include $root."Forms/registrationForm.html"; ?>



</div>



</body>
</html>