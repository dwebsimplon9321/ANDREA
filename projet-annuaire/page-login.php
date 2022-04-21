<?php
# session
session_start();
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/connexion.css">

    <title>Page de connexion</title>
</head>

<body class="background">
    <br>
    <br>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col align-middle">
                <div class="container-fluid board-white ">

                    <div class="row">
                        <div class="col-3">
                            <br>
                            <button type="button" class="btn btn-outline-primary"><a href="index.php">Accueil</a></button>

                        </div>
                        <div class="col-6">
                            <br>
                            <h1>Se connecter avec identifiant </h1>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-6">
                            <?php
                            if ($_SESSION["inscription_ok"]) {
                            ?>
                                <!-- Affichage erreur - Correct -->
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo $_SESSION["inscription_ok"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                                # effacer message 
                                unset($_SESSION["inscription_ok"]);
                            } ?>

                            <?php
                            if (isset($_SESSION["msg"])) {
                                # code...



                            ?>

                                <!-- Affichage erreur - Faux -->
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <?php echo $_SESSION["msg"]; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                            <?php

                                # effacer message 
                                unset($_SESSION["msg"]);
                            }
                            ?>

                            <form class="row g-3 needs-validation" action="validation.php" method="POST" novalidate>
                                <div class="mb-3">
                                    <label for="" class="form-label">Adresse email : </label>
                                    <input type="email" class="form-control" id="" placeholder="" name="frmEmail" required>
                                    <div class="invalid-feedback">Merci d'indiquer un email valide.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Mot de passe</label>
                                    <input type="password" name="frmPasse" id="" class="form-control" required>
                                    <div id="" class="invalid-feedback">
                                        indiquer votre mot de passe
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary mb-3" name="frmC" value="connexion">Connexion</button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="row">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <p>Vous n'étes pas encore inscrit ? <a href="page-register.php">Inscription</a> </p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col 5">
                <img src="image/panda.png" class="img-thumbnail" alt="..." width="800" height="599">
            </div>
            <div class="col">
                <img src="/image/caribbean.png" class="img-fluid" alt="caribbean" width="400" height="999">
            </div>
            <div class="col">
                <img src="image/office windose .png" class="img-fluid" alt="" width="300" height="200">
            </div>
            <div class="col">
                <img src="image/logosystem-1536x1536.png" class="img-fluid" alt="..." width="400" height="200">
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