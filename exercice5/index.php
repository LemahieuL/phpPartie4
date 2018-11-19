
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 5 php Partie 4</title>
    </head>
    <body>
        <div>
            <?php

            function caractChain($chain1, $number1) {
                ?><p>Bonjour je m'apelle <?= $chain1; ?> et j'ai <?= $number1; ?> ans</p><?php
                return $text; /* On revoint la fonction $text */
            }
            $text = caractChain(Luc, 25);
            echo $text;
            ?>
        </div>
    </body>
</html>