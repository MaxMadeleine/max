<?php

$action = $_GET["action"];
$w1 = $_GET["w1"];
$w2 = $_GET["w2"];
$variable; 

if ($action == "before") {

    $variable = $w1 . " - " . $w2;

} elseif ($action == "after") {

    $variable = $w2 . " - " . $w2;

} else {

    $variable = "DUMMY";

}
?>
<h1><?php echo $variable ?></h1>php
phpphpphp