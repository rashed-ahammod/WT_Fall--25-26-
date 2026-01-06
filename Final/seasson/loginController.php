<?php
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {


        $_SESSION["username"] = $name;
        $_SESSION["password"] = $password;

        header("Location: welcome.php");
        exit();
    }


function test_input($data) {
    return trim($data);
}
?>