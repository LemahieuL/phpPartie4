<?php
    function caractChain($string){
        $test = 'Une chaine de caractère';
        return $test;
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 2 php Partie 4</title>
    </head>
    <body>
        <div>
            <?php
            echo caractChain($string);
            ?>
        </div>
    </body>
</html>