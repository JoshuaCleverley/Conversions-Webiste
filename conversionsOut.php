<?php 
    // Check if user is logged in and send them to index.php if they are not
    include("loginFunctions.php");
    redirectIfNotLoggedIn("./index.php");

    // Get values from post data
    $from = $_POST["conversionFrom"];
    $to = $_POST["conversionTo"];
    $value = $_POST["Value"];

    // Calculate conversion
    if (!is_numeric($value)) {
        $output = "error";
    }
    else if ($from == $to) {
        // Units are equal
        $output = $value;
    }
    else {
        switch ($from) {
            case "mm": {
                // From millimetres
                switch ($to) {
                    case "cm": {
                        // To centimetres
                        $output = $value / 10;
                        break;
                    }
                    case "m": {
                        // To metres
                        $output = $value / 1000;
                        break;
                    }
                }
                break;
            }
            case "cm": {
                // From centimetres
                switch ($to) {
                    case "mm": {
                        // To millimetres
                        $output = $value * 10;
                        break;
                    }
                    case "m": {
                        // To metres
                        $output = $value / 100;
                        break;
                    }
                }
                break;
            }
            case "m": {
                // From metres
                switch ($to) {
                    case "mm": {
                        // To millimetres
                        $output = $value * 1000;
                        break;
                    }
                    case "cm": {
                        // To centimetres
                        $output = $value * 10;
                        break;
                    }
                }
                break;
            }
            case "g": {
                // From grams
                switch ($to) {
                    case "kg": {
                        // To kilograms
                        $output = $value / 1000;
                        break;
                    }
                    case "lbs": {
                        // To pounds
                        $output = $value / 453.6;
                        break;
                    }
                }
                break;
            }
            case "kg": {
                // From kilograms
                switch ($to) {
                    case "g": {
                        // To grams
                        $output = $value * 1000;
                        break;
                    }
                    case "lbs": {
                        // To pounds
                        $output = $value * 2.205;
                        break;
                    }
                }
                break;
            }
            case "lbs": {
                // From pounds
                switch ($to) {
                    case "g": {
                        // To grams
                        $output = $value * 453.6;
                        break;
                    }
                    case "kg": {
                        // To kilograms
                        $output = $value / 2.205;
                        break;
                    }
                }
                break;
            }
            case "c": {
                // From celsius
                switch ($to) {
                    case "f": {
                        // To fahrenheit
                        $output = $value * 9/5 + 32;
                        break;
                    }
                    case "k": {
                        // To kelvin
                        $output = $value + 273.15;
                        break;
                    }
                }
                break;
            }
            case "f": {
                // From fahrenheit
                switch ($to) {
                    case "c": {
                        // To celsius
                        $output = ($value - 32) * 5/9;
                        break;
                    }
                    case "k": {
                        // To kelvin
                        $output = ($value - 32) * 5/9 + 273.15;
                        break;
                    }
                }
                break;
            }
            case "k": {
                // From kelvin
                switch ($to) {
                    case "c": {
                        // To celsius
                        $output = $value - 273.15;
                        break;
                    }
                    case "f": {
                        // To fahrenheit
                        $output = ($value - 273.15) * 9/5 + 32;
                        break;
                    }
                }
                break;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversions Output Page</title>
</head>
<body>
    <!-- Conversion Results -->
    <div class="container"> 
        <div class="page-card">
            <h1>Conversion Result</h1>
            <p>
                <?php 
                    if ($output == "error") {
                        echo "Please enter a valid number to be converted!";
                    } else {
                        echo $value.$from." = ".$output.$to;
                    }
                ?>
            </p>
            <input type="button" value="Go back" onclick="window.location='./conversions.php';" />   
        </div>
        <div class="sign-out-button-container">
            <a href="./signOut.php">
                <button class="sign-out-button">Sign out</button>
            </a>
        </div>
    </div>  
</body>
</html>