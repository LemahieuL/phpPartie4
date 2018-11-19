<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 4 php Partie 4</title>
    </head>
    <body>
        <div>
            <?php

            function numberFunction($number1, $number2) { /*Création de la function avec les variables if et else if*/
                if ($number1 > $number2) {
                    echo 'Le premier nombre est plus grand';
                } else if ($number1 == $number2) {
                    echo 'Les deux nombres sont identiques';
                } else {
                    echo 'Le premier nombre est plus petit';
                }
                return $result;
            }

            $result = numberFunction(7, 5);/*On rentre les valeur pour remplacer Number 1 et number 2*/
            echo $result;/*On afficher le resultat des variables*/ 
            ?>

        </div>
    </body>
</html>