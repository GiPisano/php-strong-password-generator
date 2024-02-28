<?php

require_once __DIR__ . "/functions/functions.php";

if (isset($_GET["password_length"])) {
    $passwordLength = $_GET["password_length"];
    $passwordLength = $passwordLength > 40 ? 40 : ($passwordLength < 5 ? 5 : $passwordLength);
    $generated_password = generate_password($passwordLength, $alphabet, $uppercase, $symbols, $numbers);

    header('Location: ./password.php ');
    session_start();

    $_SESSION['generated_password'] = $generated_password;

    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./style/style.css">
    <title>Password Generator</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">PASSWORD GENERATOR</h1>
        <form method="GET">
            <label class="form-label" for="password_length"><h4>Inserisci la lunghezza della password:</h4></label>
            <input type="number" id="password_length" name="password_length" class="form-control mb-3" placeholder="minimo 5, massimo 40">
            <button type="submit" class="btn btn-outline-dark">Genera</button>
        </form>
    </div>
</body>
</html>