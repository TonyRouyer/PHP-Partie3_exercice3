<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>partie 3 exercice 3</title>
</head>
<body>
<?php
        $nb1 = 100;
        $nb2 = rand(1, 100);
        while ($nb1 >= 10) {
            $nb1 = $nb1 * $nb2;
            echo '<p>' . $nb1 . '</p>';
            $nb1--;
        }
    ?>
</body>
</html>