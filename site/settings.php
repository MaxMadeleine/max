<?php
session_start();

if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("Location: /login.php");
}

?>
<h1>settings</h1>

<p><?php echo $_SESSION["user"] . "<br>";
    echo $_SESSION["ip"] . "<br>";
    echo $_SESSION["time"]; ?></p>
    <a href="/">home</a>