<?php 
    // Check if user is logged in and send them to conversions.php if they are
    include("loginFunctions.php");
    redirectIfLoggedIn("./conversions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Forgotten Password Page</title>
</head>
<body>
    <!-- Forgotten Password Page -->
    <div class="container"> 
        <div class="page-card">
            <h1>Forgotten Password</h1>
            <p>Username: user</p>
            <p>Password: pass</p>
        </div>
    </div>
</body>
</html>