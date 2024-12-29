<?php
session_start();

if (isset($_SESSION["user"]) || !empty($_SESSION["user"])) {
    header("Location: /");
}

if ($_POST) {
    if ($_POST["username"] == "max" && $_POST["password"] == "123") {
        $trace = trace();

        $_SESSION["user"] = $_POST["username"];
        $_SESSION["ip"] = $trace['clientIp'];
        $_SESSION["time"] = time();
        header("Location: /");
    } else {
        echo "you mother fucker you are not who you say you are and fuck off!";
    }
}


?>
<h1>login</h1>
<form action="/login.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="login">

</form>