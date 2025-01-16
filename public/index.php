<?php
session_start();
$title = "Home page";
include("../html/head.php");
echo $_SESSION["username"];

if (isset($_SESSION["username"]) ){
    echo "<a href='./out.php'>login</a>";
}
else { echo "<a href='./login.php'>logout</a>";
 }
?>

