<?php

class Gestion
{

    # proprietes
    private $_email;
    private $_passe;
    private $_code;
    private $_nPasse;

    private $_DBC; # dbconnect - objet PDO

    # methodes 
    public function __construct($db)
    {
        $this->set_DBC($db);
    }


    public function demander_npasse($datas)
    {
        // print_r($datas);

        if (strlen($datas) == 5) {
            
            # gestion code
            $this->set_code($datas);

            # requete select avec fetch
            // $req ="SELECT * FROM loginCode WHERE code = '".$this->get_code()."'";
            // $req = "SELECT loginCode.admin_id, code, admin.email, admin.mot_passe FROM loginCode, admin WHERE loginCode.admin_id = admin.id";
            $req = "SELECT admin_id, code, email, mot_passe FROM loginCode INNER JOIN admin ON admin_id = admin.id";

            $resultat = $this->get_DBC()->prepare($req);
            $resultat->execute();

            $row = $resultat->fetch(PDO::FETCH_ASSOC);

            print_r($row);

             $this->set_email($row["email"]);
             $this->set_nPasse($this->generateur_passe());
             $id = $row["admin_id"];
            // echo $this->generateur_passe();
            
            
            # envoi email
            $tH1 = "Vous demmandez un nouveau mot de passe";
            $sujet = "Voici votre nouveau mot de passe !";
            $objet = "Mot de passe";
            $url = "";

            $message = $this->emailHTML($tH1, $sujet, $this->get_nPasse(), $url);
            $this->envoi_email($this->get_email(), $objet, $message);


             # update mot_passe
             $dates = date("Y-m-d H:i:s");  

              // crypter mot de passe
            $newPasse = password_hash($this->get_nPasse(), PASSWORD_DEFAULT); 

            $req = "UPDATE admin SET mot_passe = '".$newPasse."', date_update ='".$dates."' WHERE id='".$id."' ";
            $resultat = $this->get_DBC() ->query($req);

            if ($resultat->rowCount() == 1)
             {
                # code...
                echo "Mise a jour OK.";

            } else {
                # code...
                echo "ERREUR: Problème de mise a jour voir le webmaster.";

            }
            



        } else {

            # email 

            $this->set_email($datas);


            #generer un code numerique // 0-9 taille de 5
            $this->set_code(rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9));

            //   echo $this->get_code();

            $tH1 = "Vous demmandez un nouveau mot de passe";
            $sujet = "Voici votre code de confirmation !";
            $objet = "Code de validation";
            $url = "";

            // $message = "Bonjour, voici votre code de validation.";
            // $message .= $this->get_code();

            $message = $this->emailHTML($tH1, $sujet, $this->get_code(), $url);

            // $this->envoi_email($this->get_email(), $objet, $message);

            // echo $this->generateur_passe();

            // print_r($p);

            # requete select
            $req = "SELECT * FROM admin  WHERE email = '" . $this->get_email() . "' ";
            $resultat = $this->get_DBC()->query($req);

            if ($resultat->rowCount() === 1) {
                # code...
                foreach ($resultat as $row) {
                    # code...
                    //    echo $row["email"];

                    $id = $row["id"];
                    $dates = date("Y-m-d H:i:s");
                    # insert into loginCode
                    $req = "INSERT INTO loginCode (admin_id, code, date_add, date_update) 
                            VALUES ('" . $id . "', '" . $this->get_code() . "','" . $dates . "','" . $dates . "')";

                    $resultat = $this->get_DBC()->query($req);

                    if ($resultat->rowCount() === 1) {
                        # code...

                        // $this->envoi_email($this->get_email(), $objet, $message);
                        // echo $this->generateur_passe();


                    } else {
                        # code...
                        echo "Echec Insert";
                    }
                }
            } else {
                # code...
                echo "aucun resultat";
            } // fin rowCount 
        }   // fin strlenght

        exit;
    }


    public function generateur_passe()
    {
        $chaine = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789&#@%~*';
        $chaine = str_shuffle($chaine);

        $p = str_split($chaine, 10);
        $index = rand(0, 5);

        return $p[$index];
    }


    public function emailHTML($titre, $sujet, $code, $lien)
    {
        // Message
        $messageH = '
        <html>
        <head>
        <title>' . $sujet . '</title>
        </head>
        <body>
        <h1 style="font-size: 1.4em; color: gray;">' . $titre . '</h1>
        <p style="font-size: 1.2em;">' . $sujet . '</p>
        <p style="font-size: 1.2em;> <strong style="font-size: 1.3em;">' . $code . '</strong> </p>';
        if (isset($lien)) {
            # code...
            $messageH .= '<p style="font-size: 1.2em"><a href="' . $lien . '" title="Valider votre code">Valider Votre code en cliquant ici.</a></p>';
        }
        $messageH .= '<p>Votre webmaster vous remercie.</p>
        </body>
        </html>
        ';

        return $messageH;
    }



    public function connexion(array $datas)
    {
    }

    public function envoi_email($to, $sujet, $message)
    {
        // $headers = 'From: webmaster@filattentes.com.gp' . "\r\n" .
        //     'Reply-To: webmaster@filattentes.com.gp' . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=utf-8';

        // En-têtes additionnels
        $headers[] = 'To: ' . $to;
        $headers[] = 'From: ANDREA <andrea-lenovo-v110-15isk.rsmaga.local></andrea-lenovo-v110-15isk.rsmaga.local>';
        // $headers[] = 'Cc: anniversaire_archive@example.com';
        // $headers[] = 'Bcc: anniversaire_verif@example.com';

        // In case any of our lines are larger than 70 characters, we should use wordwrap()
        $message = wordwrap($message, 70, "\r\n");

        // Envoie du mail
        if (mail($to, $sujet, $message, implode("\r\n", $headers))) {
            # code...
            echo "Envoie email reussi.";
        } else {
            # code...
            echo "Echec d'envoie d'email.";
        }
    }

    # getter / setter

    /**
     * Get the value of _email
     */
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }

    /**
     * Get the value of _passe
     */
    public function get_passe()
    {
        return $this->_passe;
    }

    /**
     * Set the value of _passe
     *
     * @return  self
     */
    public function set_passe($_passe)
    {
        $this->_passe = $_passe;

        return $this;
    }

    /**
     * Get the value of _code
     */
    public function get_code()
    {
        return $this->_code;
    }

    /**
     * Set the value of _code
     *
     * @return  self
     */
    public function set_code($_code)
    {
        $this->_code = $_code;

        return $this;
    }

    /**
     * Get the value of _nPasse
     */
    public function get_nPasse()
    {
        return $this->_nPasse;
    }

    /**
     * Set the value of _nPasse
     *
     * @return  self
     */
    public function set_nPasse($_nPasse)
    {
        $this->_nPasse = $_nPasse;

        return $this;
    }

    /**
     * Get the value of _DBC
     */
    public function get_DBC()
    {
        return $this->_DBC;
    }

    /**
     * Set the value of _DBC
     *
     * @return  self
     */
    public function set_DBC($_DBC)
    {
        $this->_DBC = $_DBC;

        return $this;
    }
}
