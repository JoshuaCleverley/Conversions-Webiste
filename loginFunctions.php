<?php 
    function redirectIfLoggedIn($path) {
        if (isset($_COOKIE["loggedIn"])) {
            header("Location: ".$path); exit();
        }
    }

    function redirectIfNotLoggedIn($path) {
        if (!isset($_COOKIE["loggedIn"])) {
            header("Location: ".$path); exit();
        }
    }
?>