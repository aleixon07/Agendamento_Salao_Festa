<?php

include_once "../../conexao.php";
session_start();

if (!isset($_SESSION['idusuario'])) {

    header("Location: ../../index.php");
    exit();
} else {
    $id = $_SESSION["idusuario"];

    $sql_user = "SELECT * FROM usuario WHERE idUSUARIO = '$id' LIMIT 1";
    $result_user = mysqli_query($conecta, $sql_user);

    if (mysqli_num_rows($result_user) > 0) {

        $row_user = mysqli_fetch_assoc($result_user);

        $nome_user = $row_user['nome'];
    } else {
        header("Location: ../../index.php");
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/fvc.png">
    <link rel="icon" type="image/png" href="../assets/img/fvc.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>AgenSf - Perfil Usuário</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .sidebar-wrapper {
            background-color: #3eac68;
        }

        /* Animação de impressão (de cima para baixo) */
        @keyframes printAnimation {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .print-in {
            animation: printAnimation 1.0s ease-in-out;
            display: block;
        }

        .a.b {
            background-color: #d4edda;
            /* Cor de fundo */
            border: 1px solid #c3e6cb;
            /* Cor da borda */
            color: #185428;
            /* Cor do texto */
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a class="simple-text">
                        Olá, <?php echo $nome_user; ?>
                    </a>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a class="nav-link" href="./perfil.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Perfil</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./gen_usuario.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Gerenciar Usuários</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./gen_reserva.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Gerenciar Reservas</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./agenda.php">
                            <i class="bi bi-calendar3"></i>
                            <p>Agenda</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./reserva.php">
                            <i class="bi bi-clipboard-plus"></i>
                            <p>Reservar</p>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="./gen_avisos.php">
                            <i class="bi bi-exclamation-triangle"></i>
                            <p>Gerenciar Avisos</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand"> Perfil </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../logout.php">
                                    <span class="no-icon">Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section class="p-5">
                <form action="../../edit_perfil.php" method="POST">
                <div class="row">
                    <div class="col">
                        <label class="ms-3 mt-3" for=""><strong>Nome</strong></label>
                        <input required value="<?php echo $row_user['nome']; ?>" placeholder="Digite seu nome" type="text" class="form-control border border-dark" name="nome" id="">
                        <label class="ms-3 mt-3" for=""><strong>Apartamento</strong></label>
                        <input required value="<?php echo $row_user['apartamento']; ?>" placeholder="Digite o numero do seu apartamento" type="number" class="form-control border border-dark" name="apartamento" id="">
                        <label class="ms-3 mt-3" for=""><strong>CPF</strong></label>
                        <input required value="<?php echo $row_user['CPF']; ?>" placeholder="Digite seu cpf" type="text" class="form-control border border-dark" name="cpf" id="">

                    </div>
                    <div class="col">
                        <label class="ms-3 mt-3" for=""><strong>Email</strong></label>
                        <input required value="<?php echo $row_user['email']; ?>" placeholder="Digite seu email" type="text" class="form-control border border-dark" name="email" id="">
                        <label class="ms-3 mt-3" for=""><strong>Bloco</strong></label>
                        <input required value="<?php echo $row_user['bloco']; ?>" placeholder="Digite seu bloco" type="text" class="form-control border border-dark" name="bloco" id="">
                        <label class="ms-3 mt-3" for=""><strong>Telefone</strong></label>
                        <input required value="<?php echo $row_user['numero']; ?>" placeholder="Digite seu telefone" type="text" class="form-control border border-dark" name="telefone" id="">
                        <input type="hidden" name="iduser" value="<?php echo $id; ?>" >

                    </div>
                </div>
                <input type="hidden" name="idadministrador" value="<?php echo $id; ?>" >
                <button class="w-100 mt-4 btn btn-success">Editar</button>
                </form>
            </section>
            <!-- End Navbar -->
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<?php if (!isset($_GET['alert'])) {
} else if ($_GET['alert'] == 1) {

?>

    <script>
        Swal.fire({
            title: "Sucesso!",
            text: "Perfil editado com sucesso!",
            icon: "success",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "perfil.php";

        });
    </script>

<?php } ?>

</html>