<?php

$partie1 = [
    ['Exercice de diction', 'partie1/diction.php'],
    ['Tableau de nombres v1', 'partie1/nombres1.php'],
    ['Tableau de nombres v2', 'partie1/nombres2.php'],
    ['Fibonacci', 'partie1/fibonacci.php'],
    ['FizzBuzz', 'partie1/fizzbuzz.php'],
    ['Suppression', 'partie1/suppression.php']
]

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire 03</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <h1>Laboratoire 03</h1>
    <nav>
        <h2>Partie 1</h2>
        <ul>
            <?php
            foreach ($partie1 as $page) {
                echo "<li><a href='{$page[1]}'>{$page[0]}</a></li>";
            }
            ?>
        </ul>
    </nav>
</body>
</html>
