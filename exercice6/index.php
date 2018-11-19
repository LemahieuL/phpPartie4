<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 6 php Partie 4</title>
    </head>
    <body>
        <div>
            <?php

            function caractChain($chain1, $chain2, $number1) {
                ?><p>Bonjour <?= $chain1; ?> <?= $chain2; ?>, tu a <?= $number1; ?> ans</p><?php
                return $text; /* On revoint la fonction $text */
            }

            $text = caractChain(Lemahieu, Luc, 25);
            echo $text;
            ?>
        </div>
    </body>
</html>