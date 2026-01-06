
<!DOCTYPE HYML>
<html>
    <body>
       <form method="post" action="loginController.php">
 
Name: <input type="text" name="name">

 
Password : <input type="text" name="password">
 
 
<button type="submit">Login<button>
</form>
    </body>
    </html>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $password = test_input($_POST["password"]);

    // Validation
    if (empty($name) || empty($password)) {
       
        echo "Invalid username or password";
    }else{
        header("location: loginController.php");
    }
}
?>
