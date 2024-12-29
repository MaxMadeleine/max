<?php
session_start();
session_start();

if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    header("Location: /login.php");
}
echo $_SESSION["user"] . "<br>";
echo $_SESSION["ip"]. "<br>";
echo $_SESSION["time"];

?>
<h1> <?php echo "hey " . $_SESSION["user"]; ?></h1>
<code> <?php echo $_SESSION["ip"]; ?> </code>
<a href="/logout.php">logout</a>
<a href="/settings.php">settings</a>