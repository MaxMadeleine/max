<?php
$title = "Login";
include("../html/head.php");

if($_POST){
    if($_POST["pass"] != "maxisanidiot"){
        echo "INVALID PASSWORD";
        return 0;
    }
    session_start();
    $_SESSION["username"] = $_POST["username"];
    header("Location: /");
}
?>

<form action="/login.php" method="post">
    <p>Username:</p>
    <input type="text" name="username"><br>
    <p>Password:</p>
    <input type="password" name="pass"><br>
    <br>
    <input type="submit" value="Login">
</form>