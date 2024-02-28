<?php

require_once __DIR__ . "/functions/functions.php";

if (isset($_GET["password_length"])) {
    $passwordLength = $_GET["password_length"];
    $passwordLength = $passwordLength > 40 ? 40 : ($passwordLength < 5 ? 5 : $passwordLength);
    $generated_password = generate_password($passwordLength, $alphabet, $uppercase, $symbols, $numbers);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form method="GET">
        <label for="password_length">inserisci la lunghezza della password:</label>
        <input type="number" id="password_length" name="password_length" required>
        <button type="submit">Genera</button>
    </form>


    <?php if(isset($generated_password)): ?>
        <p>Password generata: <?= $generated_password;
        var_dump($generated_password) ?></p>
    <?php endif; ?>
    
</body>
</html>