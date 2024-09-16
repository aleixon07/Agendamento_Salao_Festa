
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AgenSf - Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fvc.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

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
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-absolute">
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
            <a class="nav-link active" href="login.php">Login</a>
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


  </main><!-- End #main -->

 

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

   <!-- ======= Footer ======= -->
   


  <!-- main --> 
	<div class="main-agileinfo slider ">
		<div class="items-group">
			<div class="item agileits-w3layouts">
				<div class="block text main-agileits"> 
					<span class="circleLight"></span> 
					
						<!-- login form -->
            <h2 class='text-center mt-3'>Loge-se no sistema</h2>
					<form method="POST" class='p-4 mt-3' style='background-color: #2eca6a; margin-left:500px; margin-right: 500px; border-radius: 20px;' action="sessao.php">

          <div class='row' >

              <div class='col'>
                <h6 style='color: #555555;' for="" class=' text-center'><strong>Email</strong></h6 style='color: #555555;'>
                <input class='form-control border border-dark mb-3' placeholder='Digite seu email' type="email" name="email" id="email">

                <h6 style='color: #555555;' for="" class=' text-center'><strong>Senha</strong></h6 style='color: #555555;'>
                <input class='form-control border border-dark mb-3' placeholder='Digite sua senha' type="password" name="senha" id="senha">
                
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
            title: "Sucesso!",
            text: "Você foi cadastrado!",
            icon: "success",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "login.php";

        });
    </script>
<?php } else if ($_GET['alert'] == 2) {

?>
    <script>
        Swal.fire({
            title: "Atencao!",
            text: "Usuário não encontrado!",
            icon: "error",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "login.php";

        });
    </script>
<?php } ?>


</html>
