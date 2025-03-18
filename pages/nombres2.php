<?php

if (isset($_GET['n']) && is_numeric($_GET['n'])) {
    $max = $_GET['n'];
} else {
    $max = 20;
}

$nombres = [];

for ($i = 0; $i <= $max; $i += 2) {
    $nombres[] = $i;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de nombres v2</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>    
    <h1>Tableau de nombres v2</h1>
    <ul>
        <?php
        foreach ($nombres as $nombre) {
            echo "<li>$nombre</li>";
        }
        ?>
    </ul>
    <a href="nombres2.php?n=<?= $max + 20 ?>">Ajouter 10 nombres</a>
</body>
</html>
