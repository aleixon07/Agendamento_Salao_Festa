<?php

include_once "conexao.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AgenSf - alertas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fvc.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .a.b {
      background-color: #d4edda;
      /* Cor de fundo */
      border: 1px solid #c3e6cb;
      /* Cor da borda */
      color: #185428;
      /* Cor do texto */
    }
  </style>

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Agen<span class="color-b">Sf</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="login.php">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="cadastro.php">Cadastre-se</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="alertas.php">Avisos</a>
          </li>
        </ul>
      </div>

    </div>
  </nav><!-- End Header/Navbar -->

  <main id="main">



    <!-- ======= Footer ======= -->
    <section class="section-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="widget-a">
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">
              <div class="w-body-a">
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
          </div>
        </div>
      </div>
    </section>
    <section>
      <?php
      $sql_busc = "SELECT * FROM avisos";
      $result_busc = mysqli_query($conecta, $sql_busc);
      if (mysqli_num_rows($result_busc) > 0) {


        while ($row_busc = mysqli_fetch_assoc($result_busc)) {

      ?>
          <div class="mx-5">
            <p style="font-size: 12px;" class="text-end mt-3"><strong>Publicação: <?php echo $row_busc['data_publicacao']; ?></strong></p>
            <div class='a b text-dark px-4 row text-center' style="border-radius: 10px; padding-top: 12px;">
              <p class="pt-2" style=" font-size: 16px;"><?php echo $row_busc['descricao']; ?></p>
            </div>
          </div>
      <?php
        }
      } else {
        echo "
        <div class='mx-5'>
       <div class='a b text-dark px-4 row text-center text-dark text-center' style='border-radius: 10px; padding-top: 12px;'>
         <strong class='pt-2' style=' font-size: 16px;'>Nenhum aviso cadastrado !</strong>
        </div>
        </div>";
      }

      ?>
    </section>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>