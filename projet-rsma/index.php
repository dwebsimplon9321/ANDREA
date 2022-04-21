
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Application RSMA</title>
  </head>
  <body>
      <header class="container-fluid">
          <div class="row">
              <div class="col">
                  <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/logo-ministere.png" alt="logo-minister">
              </div>
              <div class="col">
                  <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/logo_rsma.png" alt="logo-rsma">
              </div>
              <div class="col">
                  <img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/logo_30pour30.png" alt="logo-30-formation">
              </div>
              <div class="col">
              <ul class="menu">
                  <li><a href="#"><img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/tel.png" alt="icone"></a></li>
                  <li><a href="#"><img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/mail.png" alt="icone"></a></li>
                  <li><a href="#"><img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/menu.png" alt="icone"></a></li>
              </ul>
              </div>
             
          </div>
      </header>
    <div class="container-fluid">
        <div class="row">
           <form action="" class="needs-validation" novalidate >
               <div class="row">
                    <div class="col">
                        <select class="form-select" aria-label="Civilité" id="civilite" required>
                            <option selected>Choisir une civilité</option>
                            <option value="M">Monsieur</option>
                            <option value="Mme">Madame</option>
                        </select>
                        <div class="valid-feedback civ">
                            Merci!
                        </div>
                        <div id="civiliteF" class="invalid-feedback">
                            Choisir une civilité !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" id="nom" required >
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="nomF" class="invalid-feedback">
                            indiquer votre nom !!!
                        </div>
                        
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Prénom" aria-label="Prénom" id="prenom" required>
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="prenomF" class="invalid-feedback">
                            indiquer votre prénom !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Date de naissance" aria-label="Date de naissance" id="date de naissance" required>
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="dateF" class="invalid-feedback">
                            indiquer votre date de naissance !!!
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Lieu de naissance" aria-label="Lieu de naissance" id="lieu de naissance" required>
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="lieuF" class="invalid-feedback">
                            indiquer votre lieu de naissance !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Adresse" aria-label="Adresse" id="adresse" required>
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="adresseF" class="invalid-feedback">
                            indiquer votre adresse !!!
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Adresse suite" aria-label="Adresse suite">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Code postal" aria-label="Code postal" id="code postal" required>
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="codepostalF" class="invalid-feedback">
                            indiquer votre code postal !!!
                        </div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Ville" aria-label="Ville" id="ville" required>
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="villeF" class="invalid-feedback">
                            indiquer votre ville !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <select class="form-select" aria-label="jdc" id="jdc" required>
                            <option selected>Avez-vous fait la journée d'appel (JDC)</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="jdcF" class="invalid-feedback">
                            Merci de repondre a la question !!!
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Quel formation désirez-vous suivre ?" aria-label="Formation" id="formation" required>
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="formationF" class="invalid-feedback">
                            indiquer votre formation !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <select class="form-select" aria-label="diplôme" id="diplome" required>
                            <option selected>Avez-vous un diplôme ?</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="diplomeF" class="invalid-feedback">
                            Merci de repondre a la question !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <select class="form-select" aria-label="sma" id="sma" required>
                            <option selected>Comment avez-vous connu le SMA ?</option>
                            <option value="jdc">Par la JDC</option>
                            <option value="ml">Mission locale</option>
                            <option value="pe">Pôle emploi</option>
                            <option value="cl">Par une information au collège ou au lycée</option>
                            <option value="fm">Par la famille</option>
                            <option value="am">Par un/une ami/e</option>
                            <option value="as">Par une association</option>
                            <option value="fo">Par un forum</option>
                            <option value="jo">Par le journal ou la télévision</option>
                        </select>
                         <div class="valid-feedback">
                            Merci!
                        </div>
                        <div id="smaF" class="invalid-feedback">
                        Merci de repondre a la question !!!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <button class="btn btn-primary" type="submit">Valider inscription</button>
                    </div>
                </div>
            </form>
            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                    })
                })
                ()
                

                let submit = document.querySelector("button");
                submit.addEventListener("click", function () {
                    
                    //verifier les listes
                    let civilite = document.querySelector("select#civilite");
                    

                    //verifier si valeur dans liste selectionne
                    if (civilite.value === "Choisir une civilité") {
                        console.log(civilite);

                        let divC = document.querySelector("div.civ");
                        //divC.classList.remove("valid-feedback");
                        divC.className = "displayN";


                        let divF = document.querySelector("div#civiliteF");
                        divF.className = "displayB";
                        
                    } else {
                        //ajouter un ecouteur
                        civilite.addEventListener("change", function() {

                        let divC = document.querySelector("div.civ");
                        //divC.classList.add("valid-feedback");
                        divC.className.remove("displayN");


                        let divF = document.querySelector("div#civiliteF");
                        divF.className = "displayB";
                        divC.className.remove("displayN");
                        } );

                    }
                });

            </script>
        </div>
    </div>
    <footer class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="reseau">
                    <li><a href="#"><img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/fb.png" alt="Facebook-rsma"></a></li>
                    <li><a href="#"><img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/twitter.png" alt="Tweeter-rsma"></a></li>
                    <li><a href="#"><img src="https://www.rsma.gp/templates/rsma_guadeloupe/images/icones/ig.png" alt="Instagram-rsma"></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="menuf">
                    <li><a href="#">Plan du site</a></li>
                    <li><a href="#">Mentions légales</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                </ul>
                <ul class="fd">
                    <li><a href="#"><img src="https://www.rsma.gp/images/Drapeau_UE.jpg" alt="Logo europe"></a></li>
                    <li><a href="#"><img src="https://www.rsma.gp/images/guadeloupefse.jpg" alt="fse"></a></li>
                </ul>
            </div>
            <div class="col">
                <p>dweb rsma @2022</p>
                
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
