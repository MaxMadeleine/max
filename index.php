<?php
include("./file1.php");

$max = new Max;

$max->name = "Marko";

$result = $max->getMax();

echo $result;
