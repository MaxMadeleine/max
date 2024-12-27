<?php
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$action = $_GET["action"];
$echo;

if($_GET["action"] == "plus"){
  $echo = $_GET["n1"] + $_GET["n2"];
}
elseif($_GET["action"] == "minus"){
  $echo = $_GET["n1"] - $_GET["n2"];
}
elseif($_GET["action"] == "add"){
  $echo = $_GET["n1"] * $_GET["n2"];
}
elseif($_GET["action"] == "div"){
  $echo = $_GET["n1"] / $_GET["n2"];
}
?>

<link rel="stylesheet" href="style.css">
<body >
  <form action="/" method="GET">
    <input type="text" name="n1" value="<?php echo $n1; ?>" >
    <p>Chose: plus, minus, div, add</p>
    <input type="text" name="action" value="<?php echo $action; ?>" >
    <input type="text" name="n2" value="<?php echo $n2; ?>"  >
    <input type="submit" value="Submit">
  </form>
  <?php echo $echo; ?>
  </body>






