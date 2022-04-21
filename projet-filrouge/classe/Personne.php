<?php 

class Personne 
{
    # propriete
    private $nom;
    private $prenom;
    private $email;
    private $passe;

    private $DBC;  # dbconnect - objet PDO
    
    

    # methode
    public function __construct($db)
    {
        $this->setDBC($db);

        //print_r($this->getDBC());
    }

    public function inscription($data)
    {
        //print_r($data);
        $nomC = $this->nettoyer($data["frmNom"]);

        // couper chaine pour 50 caracteres uniquement
        $nomC = substr($nomC,0, 50);

        $nomC = trim($nomC);
        $nomC = strtoupper($nomC);
        //print_r($nomC);

        $prenomC = $this->nettoyer($data["frmPrenom"]);

        // couper chaine pour 50 caracteres uniquement
        $prenomC = substr($prenomC,0, 50);
        $prenomC = trim(ucfirst($prenomC));


        // couper chaine pour 150 caracteres uniquement
        $emailC = substr($data["frmEmail"],0, 150);
        $emailC = trim(strtolower($emailC));


        // couper chaine pour 150 caracteres uniquement
        $passeC = substr($data["frmPasse"],0, 10);
        $passeC = trim($passeC);


        //echo $nomC, $prenomC, $emailC, $passeC;

        if( isset($nomC, $prenomC, $emailC, $passeC))
        {
            // crypter mot de passe
            $newPasse = password_hash($passeC, PASSWORD_DEFAULT); 

            // requete insert
            //INSERT INTO aa_users VALUES ('$prenom', '$nom');
            $sql = "INSERT INTO aa_users (prenom, nom) VALUES ('".$prenomC."', '".$nomC."')";
            $resultat = $this->getDBC()->query($sql); 

            // lastinsert_id
            $newID = $this->getDBC()->lastInsertId();

            if( isset($newID) > 0 )
            {
                $sql = "INSERT INTO aa_login (id_user, email, passe) VALUES ('".$newID."', '".$emailC."', '".$newPasse."')";
                $resultat = $this->getDBC()->query($sql);

                # redirection formulaire connexion
                if($resultat->rowCount() === 1)
                {
                    
                    $_SESSION["inscription_ok"] = "Vôtre inscription est validée. Vous pouvez maintenant vous connecter ";
                    /* Ceci produira une erreur. Notez la sortie ci-dessus,
                    * qui se trouve avant l'appel à la fonction header() */
                    header('Location: https://projet-filrouge.com.gp/');
                    exit;
                }


            //print_r($resultat);
                
            } else {
                # redirection formulaire inscription
                header('Location: https://projet-filrouge.com.gp/pages-register.php');
                exit;

            }



        } else {
            // redirection page inscription
            header('Location: https://projet-filrouge.com.gp/pages-register.php');
            exit;
        }

    }

    public function connect($data)
    {

        print_r($_SERVER);
       // couper chaine pour 150 caracteres uniquement
       $emailC = substr($data["frmEmail"],0, 150);
       $emailC = trim(strtolower($emailC));
        
        // verifier login existe
        // $sql = "SELECT * FROM aa_login WHERE email = '".$emailC."' ";

        $sql = "SELECT prenom, nom , email, passe FROM aa_user, aa_login WHERE aa_user.id = aa_login.id_user AND aa_login.email = '".$emailC."'"; 
        // $sql = "SELECT prenom, nom, aa_login.id_user, email, passe FROM aa_users INNER JOIN aa_login ON aa_user.id = aa_login.id_user AND aa_login.email = '".$emailC."'";

       $resultat = $this->getDBC()->query($sql);

       if( $resultat->rowCount() === 1 )
       {
            # verifier mot de passe
            foreach($resultat as $row)
            {
                //print_r($row["passe"]);

                if (password_verify($data["frmPasse"], $row["passe"])) {

                    $_SESSION["email"] = $row["email"];
                    $_SESSION["prenom"] = $row["prenom"];

                     // redirection page inscription
                    header('Location: https://projet-filrouge.com.gp/backend/');
                    exit;


                } else {
                    $_SESSION["msg"] = "Oupss, vous avez fait une erreur sur votre email ou votre mot de passe, </br> essayer de nouveau. ";
                }
            }

       }



    }

    public function nettoyer($data)
    {
        
        // formatage des donnees
        $resultat = htmlentities(htmlspecialchars(strip_tags($data)));

        # recherche caractere speciaux et chiffres et remplace par vide
        $pattern = '/[0-9#-&;,.:!()={}]/i';
        $replacement = '';
        $dataFin = preg_replace($pattern, $replacement, $resultat);

        # retourner (afficher) chaine de caractere nettoyer et securise
        return $dataFin;

    }



    # getter / setter


    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of passe
     */ 
    public function getPasse()
    {
        return $this->passe;
    }

    /**
     * Set the value of passe
     *
     * @return  self
     */ 
    public function setPasse($passe)
    {
        $this->passe = $passe;

        return $this;
    }

    /**
     * Get the value of DBC
     */ 
    public function getDBC()
    {
        return $this->DBC;
    }

    /**
     * Set the value of DBC
     *
     * @return  self
     */ 
    public function setDBC($DBC)
    {
        $this->DBC = $DBC;

        return $this;
    }
}