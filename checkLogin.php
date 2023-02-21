<?php
    // Set correct username and password
    $correctUsername = "user";
    $correctPassword = "pass";

    // Check if the username and password are set
    // In an actual application this would be connecting to a database aswell as hashing the password for security
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // If username and password are set, check if the username and password are correct
        if ($_POST["username"] == $correctUsername && $_POST["password"] == $correctPassword) {
            // Add log in data
            if (isset($_POST["rememberMe"])) {
                // Set the cookie to expire after a week if rememberMe is set
                setcookie('loggedIn', true, time() + 7 * 24 * 60 * 60);
            }
            else {
                // Set the cookie to expire at the end of the browser session if rememberMe is not set
                setcookie('loggedIn', true);
            }

            // If correct, send the user to the ./conversions.php page
            header("Location: ./conversions.php"); exit();
        }
        else {
            // If incorrect, send the user to the ./badLogin.php page
            header("Location: ./badLogin.php"); exit();
        }
    }
    else {
        // If username and password are not set, send the user to the ./index.php page
        // This only happens if the user goes directly to the /checkLogin.php route, unreachable in normal use
        header("Location: ./index.php"); exit();
    }
    
?>