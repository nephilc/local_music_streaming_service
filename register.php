<?php
if ($_POST) {
    // Execute code (such as database updates) here.
 
    // Redirect to this page.//redirecting to the same page
    header( "Location: register.php", true, 303 );
    exit();
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/layout.css">
    <link rel="stylesheet" type="text/css" href="./css/register.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    </script>
    <title>WELCOME TO STREAMIFY</title>
</head>
<body>
<div class="mainContainer">

<?php include "./includes/elements/loginForm.html"; ?>
<?php include "./includes/elements/registrationForm.html"; ?>



</div>



</body>
</html>