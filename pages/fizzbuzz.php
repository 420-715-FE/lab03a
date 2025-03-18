<?php

$fizbuzz = [];

for ($i = 1; $i <= 100; $i++) {
    $fizzbuzz[] = $i;
}

foreach ($fizzbuzz as &$valeur) {
    if ($valeur % 3 == 0 && $valeur % 5 == 0) {
        $valeur = 'FizzBuzz';
    } elseif ($valeur % 3 == 0) {
        $valeur = 'Fizz';
    } elseif ($valeur % 5 == 0) {
        $valeur = 'Buzz';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>FizzBuzz</h1>
    <ul>
        <?php foreach ($fizzbuzz as $valeur) { ?>
            <li><?= $valeur ?></li>
        <?php } 
    ?>
</body>
</html>
