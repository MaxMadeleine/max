 <!-- and howcome i cant set values to $_POST["n2"]; without logging in the browser  -->
  <!-- and why does it reload url istead of staying on the site -->
   <!-- anwser post is a pain in the asshole and dosent work with that kind of calculater  -->
    <!-- well it does work when i change file to index XD -->

<?php
$_POST["n1"];
$_POST["n2"];
$_POST["action"];
$echo;

if($_POST["action"] == "plus"){
  $echo = $_POST["n1"] + $_POST["n2"];
}
elseif($_POST["action"] == "minus"){
  $echo = $_POST["n1"] - $_POST["n2"];
}
elseif($_POST["action"] == "add"){
  $echo = $_POST["n1"] * $_POST["n2"];
}
elseif($_POST["action"] == "div"){
  $echo = $_POST["n1"] / $_POST["n2"];
}
?>

<link rel="stylesheet" href="style.css">
<body >
  <form action="/" method="POST">
    <input type="text" name="n1"  >
    <p>Chose: plus, minus, div, add</p>
    <input type="text" name="action"  >
    <input type="text" name="n2" value="<?php echo $_POST["n2"]; ?>" >
    <input type="submit" value="Submit">
  </form>
  <?php echo $echo; ?>
  </body>






