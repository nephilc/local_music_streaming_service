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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    </script>
    <title>WELCOME TO STREAMIFY</title>
</head>
<body>
<div class="mainContainer">

<div class="loginFormContainer">
    <form method="POST" action ="register.php" class="loginForm">
    <h2>Login to your account</h2>
					<p>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson"  required>
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>

					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Signup here.</span>
					</div>
    </form>
</div>



<div class="registrationFormContainer">
    <form method="POST" action="register.php" class="registrationForm">
    
    </form>
</div>
</div>



</body>
</html>