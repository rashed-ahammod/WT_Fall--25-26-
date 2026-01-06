<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $password = test_input($_POST["password"]);

    // Validation
    if ($name != "Ali" || $password != "123") {
        $error = "Invalid username or password";
    } else {
        // Store in session
        $_SESSION["username"] = $name;
        $_SESSION["password"] = $password;

        echo "<h3>Login Successful</h3>";
    }
}

function test_input($data) {
    return trim($data);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="">
    Username:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <input type="submit" value="Login">
</form>



</body>
</html>
