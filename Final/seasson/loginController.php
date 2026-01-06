<?php
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $password = test_input($_POST["password"]);

    // Validation
    if (empty($name) || empty($password)) {
        echo "Invalid username or password";
    } else {
        // Store in session
        $_SESSION["username"] = $name;
        $_SESSION["password"] = $password;

        header("Location: welcome.php");
        exit();
    }
}

function test_input($data) {
    return trim($data);
}
?>