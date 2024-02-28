<?php

// variabile con tutte le lettere dell'alfabeto 
$alphabet = 'abcdefghijklmnopqrstuvwxyz';

// variabile con tutte le lettere in maiuscolo
$uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

// variabile con tutti i simboli
$symbols = '!@#$%^&*()_+{}[]|:;"<>,.?/~`';

// variabile con tutti i numeri
$numbers = '0123456789';

function generate_password($user_length, $alphabet, $uppercase, $symbols, $numbers){
    $combine_chars = $alphabet . $uppercase . $symbols . $numbers;
    $password = '';
    $combine_chars_length = strlen($combine_chars);

    while(strlen($password) < $user_length){
        $random_chars = rand(0, $combine_chars_length -1);
        $password .= $combine_chars[$random_chars];
    }

    return $password;
}

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