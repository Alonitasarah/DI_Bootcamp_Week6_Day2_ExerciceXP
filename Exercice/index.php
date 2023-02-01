<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Exercice1 </h1>
    <?php
      $nbre1 = 20;
      $nbre2 = 5;
      $somme = $nbre1 + $nbre2;

      echo $somme;
    ?>
    <h2> Exercice2 </h2>
    <?php
     for($n = 5; $n <= 15; $n++){
        echo "le nombre est: $n <br>";
     }
        ?>


    <h3> Exercice3 </h3>
    <?php
    $note = 20;

    if ($note > 60) {
        echo "la note sera la premiére division:". $note;
    }
    elseif ($note >= 45 && $note <= 59) {
        echo "la note sera la deuxiéme division:". $note;
    }
    elseif ($note >= 33 && $note <= 44) {
        echo "la note sera la troisième division.". $note;
    }
    else {
        echo " l'étudiant sera en échec.". $note;
    }
    ?>
    <h4> Exercice4 </h4>
    <?php
    $semaine = 3;
    
    switch ($semaine) {
        case 1:
            echo "Lundi";
            break;
        case 2:
            echo "Mardi";
            break;
        case 3:
            echo "Mercredi";
            break;
        case 4:
            echo "Jeudi";
            break;
        case 5:
            echo "Vendredi";
            break;
        case 6:
            echo "Samedi";
            break;
        case 7:
            echo "Dimanche";
            break;
        default:
            echo "Le nombre est invalide";
            break;
    }
    ?>
</body>
</html>