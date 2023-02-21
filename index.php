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

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Login Page</title>
</head>
<body>
    <!-- Login Page -->
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-header">
                <h1>Sign In</h1>
                <div>Log in to start converting!</div>
            </div>
            <form action="checkLogin.php" method="post" class="login-card-form">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">person</span>
                    <input type="text" placeholder="Username" name="username" required autofocus>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMe" name="rememberMe">
                        <label for="rememberMe">Remember me for 7 days</label>
                    </div>
                    <a href="forgotPassword.php">I forgot my password</a>
                </div>
                <button type="submit">Sign In</button>
            </form>
            <div class="login-card-footer">
                Created by Joshua Cleverley, for the Introduction to Middleware module.
            </div>
        </div>
    </div>
</body>
</html>
<!--
<form class="form" method="post" action="checkLogin.php">
            <input class="input text" type="text" name="username" placeholder="Username"></input><br/>
            <input class="input text" type="password" name="password" placeholder="Password"></input><br/>
            <button class="input button" type="submit">Login</button><br/>
        </form>-->