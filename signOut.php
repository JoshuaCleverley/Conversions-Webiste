<?php
    unset($_COOKIE['loggedIn']); 
    setcookie("loggedIn", "", time()-3600); 

    header("Location: ./"); exit();
?>