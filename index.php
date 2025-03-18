<?php

$pages = [
    ['Exercice de diction', 'pages/diction.php'],
    ['Tableau de nombres v1', 'pages/nombres1.php'],
    ['Tableau de nombres v2', 'pages/nombres2.php'],
    ['Fibonacci', 'pages/fibonacci.php'],
    ['FizzBuzz', 'pages/fizzbuzz.php'],
    ['Suppression', 'pages/suppression.php']
]

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire 03-A</title>
    <link rel="stylesheet" href="water.css">
</head>
<body>
    <h1>Laboratoire 03-A</h1>
    <nav>
        <ul>
            <?php
            foreach ($pages as $page) {
                echo "<li><a href='{$page[1]}'>{$page[0]}</a></li>";
            }
            ?>
        </ul>
    </nav>
</body>
</html>
