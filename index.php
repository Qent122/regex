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

function dump($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    echo "<br>";
}
function voir($data){
    echo "<p>$data</p>";
}

    $masque = '/Michel/i'; //La lettre 'i' rend le masque insencible a la casse
    $chaine = "Bonjour, je m'appelle Michel";
    $tablo=['Michel', 'Jean-Michel','Pierre', 'Paul-Michel','Jack'];
    $match_all=[];

    $resultat= preg_grep($masque,$tablo);
    dump($resultat);



    // preg_match($masque,$chaine,$match);
    // preg_match_all($masque,$chaine,$match_all);

    // dump($match);

    // dump($match_all);

    // $match_all2=[];
    // $valeur=preg_match_all($masque,$chaine,$match_all2, PREG_PATTERN_ORDER,3);
    // voir("il y a $valeur fois la lettre recherchées");



    // if (preg_match($masque, $chaine)) {
    //     echo "<p>J'ai trouver l'occurence</p>";
    //     echo "<p>Le cacartere rechercher est present : ". preg_match_all($masque,$chaine)." fois </p>";


    // } else {
    //     echo "J'ai rien trouvé";
    // }


    ?>

</body>

</html>