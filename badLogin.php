<?php 
    // Check if user is logged in and send them to conversions.php if they are
    include("loginFunctions.php");
    redirectIfLoggedIn("conversions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bad login</title>
</head>
<body>
    <!-- Login Page -->
    <div class="container"> 
        <div class="page-card">
            <h3>Your username or password are incorrect!</h3>
            <form class="form" method="get" action="index.php">
                <button class="input button" type="submit">Try again</button><br/>
            </form>
        </div>
    </div>
</body>
</html>