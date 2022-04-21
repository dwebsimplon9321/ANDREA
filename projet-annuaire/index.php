<?php
# session
session_start();
$title = "Accueil";
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/acceuil.css">

    <!-- <title>Titre</title> -->
    <title><?php echo $title; ?></title>
</head>

<body>

    <!-- BARRE DE NAVIGATION -->
    <div class="contaienr-fluid">
        <div class="row">
            <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                <!-- Navbar content -->
                <div class="container-fluid">
                    <div>
                        <a class="navbar-brand" href="#">
                            <img src="/image/logo.png" alt="logo" width="40px">
                        </a>
                    </div>

                    <ul class="nav nav-tabs">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page-login.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page-register.php">Inscription</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="page-favoris.php">Favoris</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="page-notification.php">Notification</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>

    </div>




    <!-- CONTENUE -->
    <main>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/image/workshop.jpg"  height="580px" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- FILS ARIANE -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <h1><?php echo $title; ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <img class="img-fluid" src="/image/template_logo.png" alt="image_artisant" width="190px">
                            </div>
                            <div class="col">
                                <h2>Nom Artisant</h2>
                                <p>Métier : <span>Menuisier</span> </p>
                                <p>Lieux : <span>Ville</span></p>
                                <p>Num : <span>0690 999 999</span></p>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro aliquam aut commodi eveniet veniam quis ipsam quas unde illo minima accusamus repudiandae, praesentium dolor expedita alias, explicabo in magni aperiam.</p>
                                <a href="page-commerçant.php">voir plus...</a>
                                <br>
                                <!-- pouvoir saisir dans le numero dans le telephone -->
                                <!-- <button class="btn btn-primary">Appler maintenant</button> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="py-3 my-4 ">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
        <div class="">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2021 Company, Inc</p>
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