<?php

$fibonacci = [0, 1];

for ($i = 2; $i < 100; $i++) {
    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

if (
    isset($_GET['id'])
    && $_GET['id'] == (int)$_GET['id']
    && $_GET['id'] >= 0
    &&  $_GET['id'] < 100
) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Fibonacci</h1>
    <?php
        if ($id > 0 && $id <= 1000000) { ?>
            <a href="fibonacci.php?id=<?= $id - 1 ?>">-</a>
        <?php }
    ?>
    <?= $fibonacci[$id] ?>
    <a href="fibonacci.php?id=<?= $id + 1 ?>">+</a>
</body>
</html>
