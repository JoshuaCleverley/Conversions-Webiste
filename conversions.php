<?php 
    // Check if user is logged in and send them to index.php if they are not
    include("loginFunctions.php");
    redirectIfNotLoggedIn("./index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversions Page</title>
</head>
<body>
    <!-- Conversion Form -->
    <div class="conversion-card-container">
        <div class="conversion-card">
                <div class="conversion-card-header">
                    <h2>Length</h2>
                </div>
                <div class="conversion-card-form-container">
                    <form method="POST" action="./conversionsOut.php">
                        <div class="form-item">
                            <label for="from">From</label>
                            <select name="conversionFrom" id="from">
                                <option value="mm">Millimetres</option>
                                <option value="cm">Centimetres</option>
                                <option value="m">Meters</option>
                            </select>
                        </div>
                        <div class="form-item">
                            <label for="to">To</label>
                            <select name="conversionTo" id="to">
                                <option value="mm">Millimetres</option>
                                <option value="cm">Centimetres</option>
                                <option value="m">Meters</option>
                            </select>
                        </div>
                        <div class="form-item">
                            <input type="text" placeholder="Value" name="Value">
                        </div>
                        <div class="form-item-other">
                            <button type="submit">Convert!</button>
                        </div>
                    </form>
                </div>
            </div>
    
            <div class="conversion-card">
                <div class="conversion-card-header">
                    <h2>Weight</h2>
                </div>
                <div class="conversion-card-form-container">
                    <form method="POST" action="./conversionsOut.php">
                        <div class="form-item">
                            <label for="from">From</label>
                            <select name="conversionFrom" id="from">
                                <option value="kg">Kilograms</option>
                                <option value="g">Grams</option>
                                <option value="lbs">Pounds</option>
                            </select>
                        </div>
                        <div class="form-item">
                            <label for="to">To</label>
                            <select name="conversionTo" id="to">
                                <option value="kg">Kilograms</option>
                                <option value="g">Grams</option>
                                <option value="lbs">Pounds</option>
                            </select>
                        </div>
                        <div class="form-item">
                            <input type="text" placeholder="Value" name="Value">
                        </div>
                        <div class="form-item-other">
                            <button type="submit">Convert!</button>
                        </div>
                    </form>
                </div>
            </div>
    
            <div class="conversion-card">
                <div class="conversion-card-header">
                    <h2>Temperature</h2>
                </div>
                <div class="conversion-card-form-container">
                    <form method="POST" action="./conversionsOut.php">
                        <div class="form-item">
                            <label for="from">From</label>
                            <select name="conversionFrom" id="from">
                                <option value="c">Celsius</option>
                                <option value="k">Kelvin</option>
                                <option value="f">Fahrenheit</option>
                            </select>
                        </div>
                        <div class="form-item">
                            <label for="to">To</label>
                            <select name="conversionTo" id="to">
                                <option value="c">Celsius</option>
                                <option value="k">Kelvin</option>
                                <option value="f">Fahrenheit</option>
                            </select>
                        </div>
                        <div class="form-item">
                            <input type="text" placeholder="Value" name="Value">
                        </div>
                        <div class="form-item-other">
                            <button type="submit">Convert!</button>
                        </div>
                    </form>
                </div>
            </div>
    
            <div class="sign-out-button-container">
                <a href="./signOut.php">
                    <button class="sign-out-button">Sign out</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>