<?php

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$action = $_GET["action"];
$echo;

if( empty($n1) || empty($n2)){
  return;
}

if( $action == "plus" ){
  $echo = $n1 . " + " . $n2 . " = " . $n1 + $n2;
}
elseif( $action == "minus" ){
  $echo = $n1 - $n2;
}
elseif( $action == "div" ){
  $echo = $n1 / $n2;
}
elseif( $action == "add" ){
  $echo = $n1 * $n2;
}
else {echo "error";}
?>

<html>
    <h1> <?php echo $echo;  ?></h1>
</html>