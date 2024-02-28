<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Password generata: <?= $_SESSION['generated_password'];
        var_dump($_SESSION['generated_password']) ?></p>
</body>
</html>