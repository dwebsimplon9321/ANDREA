<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo $title; ?></title>
</head>

<body>
    <div class="container-fluid img">
        <div class="row">
            <div class="col">
                <h1><?php echo $title; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">


                <form action="validation.php" method="POST">

                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-1">
                            <img class=img-responsive src="image/logo.png" alt="logo">
                        </div>
                        <div class="col-2">
                            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="icone"></span>
                                <span class="title">Retour a l'accueil</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <h1>Inscrivez-vous dès maintenant</h1>

                        </div>
                        <div class="col-3"></div>
                    </div>
                    <p></p>
                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">

                        </div>
                        <div class="col-3">
                        </div>
                    </div>
                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <p>Collectez des informations, des paiements et des signatures des formulaires en ligne
                                personnalisés</p>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="col-md-6">
                                <label for="inputAddress2" class="form-label">Nom de l'entreprise</label>
                                <input type="text" class="form-control" placeholder=" Nom de l'entreprise" aria-label="Nom de l'entreprise">
                                <label for="inputAddress2" class="form-label">Nom du représentant de
                                    l'entreprise</label>
                                <input type="text" class="form-control" placeholder="Nom du représentant de l'entreprise" aria-label="Nom du représentant de l'entreprise">
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="col-md-6">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input type="email" name="frmEmail" class="form-control" id="yourEmail" required>
                                <div class="invalid-feedback">indiquer votre email!</div>

                                <label for="inputAddress2" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Mot de passe">

                                <label for="inputAddress2" class="form-label">Confirmez le mot de passe</label>
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Confirmez le mot de passe" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="col-12">
                                <div class="col-md-6">
                                    <label for="inputAddress" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="ville">
                                    <label for="inputCity" class="form-label">Ville</label>
                                    <input type="text" class="form-control" id="inputVille" placeholder="ville">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3"></div>
                    <p></p>
                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            Sexe
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Homme
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Femme
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Autre
                                </label>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <p></p>
                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        J'accepte les <a href="#">Condition d'utilisation et la politique de
                                            confidentialité</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <p></p>
                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">

                            <button type="submit" class="btn btn-primary" name="frmC" value="creer">Inscrivez-vous</button>

                        </div>
                        <div class="col-3"></div>
                    </div>
                    <p></p>
                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <p>Vous avez déjà un compte ? <a href="page-login.php">Connexion</a></p>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <!-- LIGNE -->
                    <div class="row">
                        <div class="col-3">
                            <img src="image/Capture-decran-2021-04-29-a-14.56.06.png" class="img-responsive" alt="image" width="650">
                        </div>
                        <div class="col-3">
                            <img src="image/caribeanpartner.png" class="img-responsive" alt="image" width="650">
                        </div>
                        <div class="col-3">
                            <img src="image/Capture-decran-2021-04-29-a-14.53.52.png" class="img-responsive" alt="image" width="650">
                        </div>
                        <div class="col-3">
                            <img src="image/logosystem-1536x1536.png" class="img-responsive" alt="image" width="650">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>