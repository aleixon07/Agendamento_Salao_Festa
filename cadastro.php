<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AgenSf - cadastro</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="assets/img/fvc.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
            <a class="nav-link active" href="cadastro.php">Cadastre-se</a>
          </li>

          <li class="nav-item">
          <a class="nav-link " href="alertas.php">Avisos</a>
          </li>
        </ul>
      </div>

    </div>
  </nav><!-- End Header/Navbar -->

  <main id="main">

  </main><!-- End #main -->

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
          <div class="widget-a">
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- main --> 
	<div class="main-agileinfo slider ">
		<div class="items-group">
			<div class="item agileits-w3layouts">
				<div class="block text main-agileits"> 
					<span class="circleLight"></span> 
					
					<!-- login form -->
          <h2 class='text-center mt-3'>Cadastre-se no sistema</h2>
					<form method="POST" class='p-4 mt-3' style='background-color: #2eca6a; margin-left:350px; margin-right: 350px; border-radius: 20px;' action="cadastromorador.php">

          <div class='row' >

              <div class='col'>
                <label for="" class='ms-3'><strong>Nome</strong></label>
                <input class='form-control border border-dark mb-3' placeholder='Digite seu nome' type="text" name="nome" id="nome" required>

                <label for="" class='ms-3'><strong>Email</strong></label>
                <input class='form-control border border-dark mb-3' placeholder='Digite seu email' type="email" name="email" id="email" required>

                <label for="" class='ms-3'><strong>Numero</strong></label>
                <input class='form-control border border-dark mb-3' placeholder='Digite seu numero' type="text" name="numero" id="numero" required>

                <label for="" class='ms-3'><strong>Cpf</strong></label>
                <input class='form-control border border-dark mb-3' placeholder='Digite seu cpf' type="text" name="cpf" id="cpf" required>
              </div>

              <div class='col'>
              <label for="" class='ms-3'><strong>Bloco</strong></label>
                <input class='form-control border border-dark mb-3' placeholder='Digite seu bloco' type="text" name="bloco" id="bloco" required>

                <label for="" class='ms-3'><strong>Apartamento</strong></label>
                <input class='form-control border border-dark mb-3' placeholder='Digite seu apartamento' type="text" name="apartamento" id="apartamento" required>

                <label for="" class='ms-3'><strong>Senha</strong></label>
                <input class='form-control border border-dark mb-3' placeholder='Digite seu senha' type="password" name="senha" id="senha" required>

                <button class='btn w-100 mt-4 btn-secondary border border-dark' type='submit'>Acessar</button>
              </div>
          </div>

          </form> 
				</div>
				 
			</div>   
		</div>
	</div>	 
	<!-- //main -->

</body>
<?php if (!isset($_GET['alert'])) {
} else if ($_GET['alert'] == 1) {

?>
    <script>
        Swal.fire({
            title: "Atencao!",
            text: "Esse email já esta cadastrado!",
            icon: "error",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "cadastro.php";

        });
    </script>
<?php } else if ($_GET['alert'] == 2) {

?>
    <script>
        Swal.fire({
            title: "Atencao!",
            text: "Esse cpf já esta cadastrado!",
            icon: "error",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "cadastro.php";

        });
    </script>
<?php } ?>

</html>