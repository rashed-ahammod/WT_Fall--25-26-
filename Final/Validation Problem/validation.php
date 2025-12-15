<!DOCTYPE html>

<html>

<?php
$name="";
$email="";
$nameerror="";
$emailerror="";
if(empty($_POST["name"]||$_POST["emall"]))
{
    $nameerror="fillup all";
}
else if()

?>

<form>
Name:<input type="text" name="name">
Email:<input type="text" name="email">
<input type="submit" name="Submit"value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"&& empty($nameerror)){
    echo"<h3>Name:.$name";
}
