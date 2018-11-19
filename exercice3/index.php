<?php
    function caractChain($fusion){
        $chain1 = ', et un peu plus pour moi.';/*Premiere variable*/
        $chain2 = 'Une chaine de caractère';/*Deuxieme variable*/
        $text = $chain2 . $chain1 ;/*concaténation des 2 variable de la fonction*/
        return $text;/*On revoint la fonction $text*/
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 3 php Partie 4</title>
    </head>
    <body>
        <div>
            <?php
            $text = caractChain($fusion);/*On crée la variable text à partir de la function caractChain*/
            echo $text;/*On affiche la variable $text*/
            ?>
        </div>
    </body>
</html>