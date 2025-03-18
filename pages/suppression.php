<?php

$avant = [];

for ($i = 0; $i < 10; $i++) {
    $avant[] = rand(1, 100);
}

$apres = $avant;

array_splice($apres, 3, 1);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Suppression</h1>
    <h2>Avant</h2>
    <ol>
        <?php foreach ($avant as $valeur) { ?>
            <li><?= $valeur ?></li>
        <?php } ?>
    </ol>
    <h2>Après</h2>
    <ol>
        <?php foreach ($apres as $valeur) { ?>
            <li><?= $valeur ?></li>
        <?php } ?>
    </ol>
</body>
</html>
