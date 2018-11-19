
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 8 php Partie 4</title>
    </head>
    <body>
        <div>
            <?php
                function calcFunction($number1 = 0, $number2 = 0, $number3 = 0){
                    
                    $calc = $number1 * $number2 * $number3;
                    return $calc;
                }
                echo calcFunction(3,1,2);
            ?>
        </div>
    </body>
</html>