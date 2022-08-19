<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>

<body>
    <h1>Je fait du Regex</h1>
    <?php

    $masque = '/m/i'; //La lettre 'i' rend le masque insencible a la casse
    $chaine = 'michel maman';

    if (preg_match($masque, $chaine)) {
        echo "<p>J'ai trouver l'occurence</p>";
        echo "<p>Le cacartere rechercher est present : ". preg_match_all($masque,$chaine)." fois </p>";


    } else {
        echo "J'ai rien trouvé";
    }


    ?>

</body>

</html>