<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 7 php Partie 4</title>
    </head>
    <body>
        <div>
            <?php

            function ageText($age, $gender) {
                $majeur = ($age >= 18) ? true : false; /* Je crée une variable pour determiner si l'age est superieur à 18 ou pas */

                if ($majeur == true AND $gender == 'Homme') {
                    echo 'Vous êtes un homme et vous êtes majeur';
                } elseif ($majeur == false AND $gender == 'Homme') {
                    echo 'Vous êtes un homme et vous êtes mineur';
                } elseif ($majeur == true AND $gender == 'Femme') {
                    echo 'Vous êtes une femme et vous êtes majeur';
                } else {
                    echo 'Vous êtes une femme et vous êtes mineur';
                }
            }

            ageText(17, 'Femme')
            ?>
        </div>
    </body>
</html>