<?php
    session_start();

    if (isset( $_SESSION["email"])) {
        # afficher backend

        // header html
        include("../includes/header.php");

        //main html
        include("../includes/base.php");
    
        // footer html
        include("../includes/footer.php");


    }else{

        #Redirection page connexion
        $_SESSION["msg"] = "Attention votre session est expirée!!";

        /* Ceci produira une erreur. Notez la sortie ci-dessus,
         * qui se trouve avant l'appel à la fonction header() */
         header('Location: https://annuaire.gp/');
         exit;
    }


?>