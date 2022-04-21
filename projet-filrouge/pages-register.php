<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://projet-filrouge.com.gp/assets/img/favicon.png" rel="icon">
  <link href="https://projet-filrouge.com.gp/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://projet-filrouge.com.gp/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://projet-filrouge.com.gp/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://projet-filrouge.com.gp/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://projet-filrouge.com.gp/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="https://projet-filrouge.com.gp/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="https://projet-filrouge.com.gp/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="https://projet-filrouge.com.gp/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="https://projet-filrouge.com.gp/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <!-- <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center ">
                  <img src="/image/logoAAPME.png" alt="logo" width="150%">
                  <span class="d-none d-lg-block">Aapme</span>
                </a>
              </div>End Logo -->

              <div class="d-flex justify-content-center">
                <a href="index.php">
                  <img src="/image/logoAAPME.png" alt="logo" width="50%">
                    <!-- <span>Aapme</span> -->
                </a>
                
                </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Créer un compte</h5>
                    <p class="text-center small">Information personnelle</p>
                  </div>

                  <form method="POST" action="validation.php" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nom : </label>
                      <input type="text" name="frmNom" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Indiquer votre nom!</div>

                      <label for="prenom" class="form-label">Prénom : </label>
                      <input type="text" name="frmPrenom" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Indiquer votre prénom!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="frmEmail" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">indiquer votre email!</div>
                    </div>

                    

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="frmPasse" class="form-control" id="yourPassword" maxlenght="10" minlenght="10" required>
                      <div class="invalid-feedback">Indique un mot de passe de 10 carractere !</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="frmTermes" type="checkbox" value="1" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Accepter les <a href="#">termes et condition.</a></label>
                        <div class="invalid-feedback">Champ obligatoire.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="frmC" value="creer" type="submit">Créer un compte</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous possédez déjà un compte ? <a href="pages-login.html">Connection</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://projet-filrouge.com.gp/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="https://projet-filrouge.com.gp/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://projet-filrouge.com.gp/assets/vendor/chart.js/chart.min.js"></script>
  <script src="https://projet-filrouge.com.gp/assets/vendor/echarts/echarts.min.js"></script>
  <script src="https://projet-filrouge.com.gp/assets/vendor/quill/quill.min.js"></script>
  <script src="https://projet-filrouge.com.gp/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="https://projet-filrouge.com.gp/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="https://projet-filrouge.com.gp/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="https://projet-filrouge.com.gp/assets/js/main.js"></script>

</body>

</html>