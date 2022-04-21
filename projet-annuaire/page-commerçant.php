<?php
session_start();
$title = "Artisant";
?>

<!-- Profil des artisants, Nom de l entrerpise, Activiter ,num, email, description, produit -->

<!-- DASHBOARD Artisant -->
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
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h1><?php echo $title; ?></h1>
        </div>
      </div>
     
      <div class="row">
        <div class="col">
        <img src="https://img.icons8.com/ios-filled/100/000000/name.png"/>
        <h1>nom de l'entreprise </h1>
        <img src="https://img.icons8.com/ios-filled/50/000000/apple-mail.png"/><a href="#">teste@gmail.com</a>
        <p>
        <img src="https://img.icons8.com/ios-glyphs/50/000000/phone-squared.png"/><a href="#">0690236598</a>
        </p>
        <h2>metier</h2>
        <h1>metier vent temps</h1>
        </div>
      </div>
    </div>
   <div>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special </h5> <p class="card-text">1 5268 $ </p>
        <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
        <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
        <a href="#" class="btn btn-primary">acheter</a>
        </div>
      </div>
    </div>
  </div>
  
 
  
    



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