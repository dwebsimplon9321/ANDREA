<main id="main" class="main">

<section class="section dashboard">
<?php
    // declaration variable en php
    $nom;

    // valeur dans une variable
    $nom = "ambrosio";
    $prenom = "martine";
    $age = 53;


    // afficher une variable
    echo($nom);
    echo $prenom;
    echo $age;

    // concatenation en php
    echo $nom . $prenom . $age;

    // calcul en php
    $age = 2022 - 1969;
    //echo "Mon âge est :".$age;

    // tableau en php
    $mois = [];

    $mois = ["janvier", "février", "mars", "avril", "mai", "juin"];

    // lire un tableau en php
    for($i=0; $i < count($mois); $i++){
        //echo $i;

        // afficher juin
        //echo $mois[5];

        // condition
        if($mois[$i] === "juin"){
            //echo $mois[$i];
        }
    }

    foreach($mois as $value){
        // la valeur du tableau
        //echo $value;

        if($value === "juin"){
            //echo $value;
        } else {
            //echo "Je n'ai rien trouvé";
        }
    }

    // ajoute index et valeur dans tableau
    $mois = [1 => "janvier", 2 => "février", 3 => "mars", 4 => "avril", 5 => "mai", 6 => "juin"];

    for($i = 1; $i <= count($mois); $i++){
       /* echo "<br >";
        echo count($mois);
        echo "<br >";
        echo $mois[$i]; */

        if($mois[$i] === "juin"){
            echo $mois[$i];
        }
    }

    // boucle
    $i =1;

    do {
        //echo $mois[3];

    } while ( $mois[$i] === "mars");

    // multi condition (if/else if/ else)
    if($mois[1] === "février"){
        echo "tu es sûre !!!";
    } else if($mois[1] === "janvier"){
        echo "super";
    } else {
        echo "rien trouvé";
    }

    // switch
    switch($mois[2]){
        case "janvier":
                echo "Janvier";
            break;

        case "février" :
                echo "Février";
            break;

        default:
                echo $mois[4];
            break;
    }

    




?>
</section>

</main><!-- End #main -->