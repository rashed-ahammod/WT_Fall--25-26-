<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: loginup.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>

<a href="login.php">Logout</a>

</body>
</html>