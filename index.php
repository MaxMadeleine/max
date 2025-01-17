

<?php

$trace = trace();

echo "Client IP: " . $trace['clientIp'] . "\n";

session_start();

// Initialize the game state
if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = rand(1, 100); // Random number between 1 and 100
    $_SESSION['attempts'] = 0; // Track attempts
}

// Handle user inputguess
if ($_POST) {
    $guess = $_POST['guess'];
    $_SESSION['attempts']++;

    if ($guess < $_SESSION['number']) {
        $message = "Too low! Try again.";
    } elseif ($guess > $_SESSION['number']) {
        $message = "Too high! Try again.";
    } else {
        $message = "Congratulations! You guessed it in " . $_SESSION['attempts'] . " attempts.";
        session_destroy(); 
        session_start(); 
        $_SESSION['number'] = rand(1, 100);
        $_SESSION['attempts'] = 0;
    }
} else {
    $message = "Guess a IP Adress between 0.0.0.0 and 255.255.255.255.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number</title>
</head>
<body>
    <h1>Guess the Number Game</h1>
    <p><?php echo $message; ?></p>
    <form method="POST">
        <input type="text" name="guess"  required>
        <button type="submit">Submit Guess</button>
    </form>
</body>
</html>





