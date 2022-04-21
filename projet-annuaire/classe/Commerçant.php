<?php 

class Commerçant 
{
     # propriete
     private $nom_entreprise;
     private $nom;
     private $prenom;
     private $email;
     private $mobile;
     private $passe;
     private $rib;

     private $DBC;  # dbconnect - objet PDO

     # methode
    public function __construct($db)
    {
        $this->setDBC($db);

        print_r($this->getDBC());
    }

    public function inscription($data)
    {
        print_r($data);
        
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
            // INSERT INTO commerçant VALUES ('$prenomC', '$nomC');
            $sql = "INSERT INTO commerçant (prenom, nom) VALUES ('".$prenomC."', '".$nomC."')";
            $resultat = $this->getDBC()->query($sql); 
            

               // lastinsert_id
               $newID = $this->getDBC()->lastInsertId();


               if( isset($newID) > 0 )
               {
                    $activer = 0;
                   $sql = "INSERT INTO an_login (id_commerçant, activer, email, passe) VALUES ('".$newID."', '".$activer."', '".$emailC."', '".$newPasse."')";
                   $resultat = $this->getDBC()->query($sql);
   
                   # redirection formulaire connexion
                   if($resultat->rowCount() === 1)
                   {
                       
                       $_SESSION["inscription_ok"] = "Vôtre inscription est validée. Vous pouvez maintenant vous connecter ";
                       /* Ceci produira une erreur. Notez la sortie ci-dessus,
                       * qui se trouve avant l'appel à la fonction header() */
                       header('Location: https://annuaire.gp/');
                       exit;
                   }
   
   
               //print_r($resultat);
                   
               } else {
                   # redirection formulaire inscription
                   header('Location: https://annuaire.gp/pages-register.php');
                   exit;
   
               }

        } else {
            // redirection page inscription
            header('Location: https://annuaire.gp/pages-register.php');
            exit;
        }
    }

    public function connect($data)
    {
        print_r($_SERVER);
        print_r($data);
        // couper chaine pour 150 caracteres uniquement
       $emailC = substr($data["frmEmail"],0, 150);
       $emailC = trim(strtolower($emailC));


       // verifier login existe
        $sql = "SELECT * FROM an_login WHERE email = '".$emailC."' ";


        $resultat = $this->getDBC()->query($sql);
    }

    public function nettoyer($data)
    {
        
        // formatage des donnees
        $resultat = htmlentities(htmlspecialchars(strip_tags($data)));

        # recherche caractere speciaux et chiffres et remplace par vide
        $pattern = '/[0-9#-&;,.:@!(){}=|_^]/i';
        $replacement = '';
        $dataFin = preg_replace($pattern, $replacement, $resultat);

        # retourner (afficher) chaine de caractere nettoyer et securise
        return $dataFin;

    }



     

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