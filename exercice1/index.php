<?php
function testReturn($test) {
    return($test);
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 1 php Partie 4</title>
    </head>
    <body>
        <?php
        echo testReturn('true');
        ?>
    </body>
</html>