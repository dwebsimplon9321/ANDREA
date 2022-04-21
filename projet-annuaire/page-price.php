<?php
$title = "Prix";
?>

<!-- offre basic, standart, ilimite-->

<!-- DASHBOARD Artisant -->
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/price.css">

    <title><?php echo $title; ?></title>
</head>

<body>
    <?php include("includes/nav.php"); ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="price-heading clearfix">
                        <h1 class="text-center ">Tarifs</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-block p-2 bg-dark ">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-4">
                        <br>
                        <div class="card text-center bg-light mb-3" style="max-width: 18rem;">
                         <!-- TITLE -->
                            <div class="card-header"> <strong><span class="text-blue price-font">Basic</span></strong> </div>
                            <div class="card-body">
                                <h2 class="card-title m-4">
                                    <!-- PRICE -->
                                    <span class="price ">
                                        <span class="sign">$</span>
                                        <span class="currency">3</span>
                                        <span class="cent">.99</span>
                                        <span class="month">/MOIS</span>
                                    </span>
                                </h2>
                                <p class="card-text mb-2"><strong>Notre offres:</strong></p>
                                <div class="mb-0">
                                    <p class="card-bottom mb-2"><span> 5 </span> Produits max</p>
                                </div>
                               
                                <a class="btn btn-primary" href="page-register.php">S'inscrire</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <br>
                        <div class="card text-center bg-light mb-3" style="max-width: 18rem;">
                         <!-- TITLE -->
                            <div class="card-header"> <strong> <span class="text-orange  price-font">Standard</span></strong> </div>
                            <div class="card-body">
                                <h2 class="card-title m-4">
                                    <!-- PRICE -->
                                    <span class="price">
                                        <span class="sign">$</span>
                                        <span class="currency">5</span>
                                        <span class="cent">.99</span>
                                        <span class="month">/MOIS</span>
                                    </span>
                                </h2>
                                <p class="card-text mb-2"><strong>Notre offres:</strong></p>
                                <div class="mb-0">                        
                                    <p class="card-bottom  mb-2"><span>10 </span> Produits max</p>
                                    <p class="card-bottom  mb-2"><span>1 </span> Tableau de bord</p>
                                </div>
                                
                                <a class="btn btn-primary" href="page-register.php">S'inscrire</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <br>
                        <div class="card text-center bg-light mb-3" style="max-width: 18rem;">
                        <!-- TITLE -->
                            <div class="card-header"> <strong> <span class="text-green price-font">Pros</span></strong> </div>
                            <div class="card-body">
                                <h2 class="card-title m-4">
                                    <!-- PRICE -->
                                    <span class="price">
                                        <span class="sign">$</span>
                                        <span class="currency">8</span>
                                        <span class="cent">.99</span>
                                        <span class="month">/MOIS</span>
                                    </span>
                                </h2> 
                                <p class="card-text mb-2"> <strong>Notre offres:</strong> </p>
                                <div class="mb-0">
                                    <p class="card-bottom mb-2"><span>10 </span> Produits max</p>
                                    <p class="card-bottom mb-2"><span>1 </span> Tableau de bord</p>
                                    <p class="card-bottom mb-2"><span>1 </span> Offres Promotionnelle</p>
                                    <p class="card-bottom mb-2"><span>1 </span> Booster réfèrencement</p>
                                </div>
                                
                                <a class="btn btn-primary" href="page-register.php">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <footer>

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