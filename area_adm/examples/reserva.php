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
    <title>AgenSf - Reservar</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        .sidebar-wrapper {
            background-color: #3eac68;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a class="simple-text">
                        Olá, <?php echo $nome_user; ?>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="./perfil.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Perfil</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./gen_usuario.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Gerenciar Usuários</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./gen_reserva.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Gerenciar Reservas</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./agenda.php">
                            <i class="bi bi-calendar3"></i>
                            <p>Agenda</p>
                        </a>
                    </li>
                    <li class="active">
                        <a class="nav-link " href="./reserva.php">
                            <i class="bi bi-clipboard-plus"></i>
                            <p>Reservar</p>
                        </a>
                    </li>
                    <li class="nav-item ">
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
                    <a class="navbar-brand"> Fazer Reserva </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../../logout.php" >
                                    <span class="no-icon">Sair</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!--<iframe src="cadastroreserva.php" frameborder="0" width="100%" height="400"></iframe>-->

            <section class="conteinar row">
                <div class="col">
                    <h4 class="text-center mt-5">Realize seu Agendamento</h4>
                    <form action="../../cadastroreserva.php" style="background-color: #2eca6a; border-radius: 20px;" method="POST" class="mt-3 ms-5 p-3">
                        <div class="row">
                            <div class="col">
                                <label for="nome" class="ms-3"><strong>Nome do Evento</strong></label>
                                <input required type="text" name="nome" id="nome" placeholder="Digite o nome do evento" class="border border-black form-control ">
                            </div>
                        </div>
                        <input type="hidden" name='idusuario' id='idusuario' value="<?php echo $id; ?>">
                        <input type="hidden" name='idadministrador' id='idadministrador' value="<?php echo $id; ?>">

                        <div class="row mt-4">
                            <div class='col'>
                                <label for="data_inicio" class="ms-3"><strong>Início do Evento</strong></label>
                                <input required type="date" name="data_inicio" id="data_inicio" class="border border-black form-control">
                                <label for="horario_inicio" class="ms-3 mt-4"><strong>Hórario de Início</strong></label>
                                <input required type="time" name="horario_inicio" id="horario_inicio" class="border border-black form-control">
                            </div>
                            <div class='col'>
                                <label for="data_fim" class="ms-3"><strong>Fim do Evento</strong></label>
                                <input required type="date" name="data_fim" id="data_fim" class="border border-black form-control">
                                <label for="horario_fim" class="ms-3 mt-4"><strong>Hórario de Termino</strong></label>
                                <input required type="time" name="horario_fim" id="horario_fim" class="border border-black form-control">
                            </div>
                        </div>

                        <button class="w-100 btn btn-secondary border border-dark mt-4">Reservar</button>

                    </form>

                </div>
                <div class="col me-5">
                    <h4 class="text-center mt-5">Seus Agendamentos</h4>

                    <table class="table mb-5 border border-dark border-3">
                        <thead class="table-title table-dark">
                            <th class=""><strong>Evento</strong></th>
                            <th class=""><strong>Data</strong></th>
                            <th class=""></th>
                        </thead>
                        <tbody>
                            <?php
                            $sql_busc = "SELECT * FROM reserva WHERE idUsuario = '$id'";
                            $result_busc = mysqli_query($conecta, $sql_busc);

                            if (mysqli_num_rows($result_busc) > 0) {

                                while ($row_busc = mysqli_fetch_assoc($result_busc)) {

                            ?>
                                    <tr class="table-success">
                                        <td class=""><?php echo $row_busc['descricao']; ?></td>
                                        <td><?php echo $row_busc['data_inicio']; ?></td>
                                        <td>
                                            <button data-bs-toggle="modal" data-bs-target="#modal<?php echo $row_busc['idRESERVA']; ?>" class="btn border-2 border border-dark"><i class="bi bi-pencil-fill"></i></button>
                                            <button onclick="AlertEvent(<?php echo $row_busc['idRESERVA']; ?>)" class="btn border-2 border border-dark"><i class="bi bi-trash3-fill"></i></button>
                                        </td>
                                    </tr>

                                    <!-- Modal editar -->
                                    <div class="modal fade" id="modal<?php echo $row_busc['idRESERVA']; ?>" tabindex="-1" aria-labelledby="modal <?php echo $row_busc['idRESERVA']; ?>" aria-hidden="true">
                                        <div class="modal modal-dialog modal-dialog-centered">

                                            <div class="modal-content border border-dark border-2">
                                                <div class="modal-header border-bottom border-dark" style="background-color:#2eca6a;">
                                                    <h1 class="modal-title text-light fs-5" id="modal<?php echo $row_busc['idRESERVA']; ?>"> Editando Evento </h1>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="../../edit_event.php" method="POST" enctype='multipart/form-data'>

                                                        <div class="row">
                                                            <div class="col">
                                                                <label for="nome" class="ms-3"><strong>Nome do Evento</strong></label>
                                                                <input style="background-color: #ebebeb;" required type="text" name="nome" id="nome" placeholder="Digite o nome do evento" value="<?php echo $row_busc['descricao']; ?>" class="border border-black form-control ">
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name='idreserva' id='idreserva' value="<?php echo $row_busc['idRESERVA']; ?>">
                                                        <input type="hidden" name='idusuario' id='idusuario' value="<?php echo $row_busc['IdUsuario']; ?>">
                                                        <input type="hidden" name='idadministrador' id='idadministrador' value="<?php echo $id; ?>">


                                                        <div class="row mt-4">
                                                            <div class='col'>
                                                                <label for="data_inicio" class="ms-3"><strong>Início do Evento</strong></label>
                                                                <input style="background-color: #ebebeb;" required type="date" name="data_inicio" id="data_inicio" class="border border-black form-control" value="<?php echo $row_busc['data_inicio']; ?>">
                                                                <label for="horario_inicio" class="ms-3 mt-4"><strong>Hórario de Início</strong></label>
                                                                <input style="background-color: #ebebeb;" required type="time" name="horario_inicio" id="horario_inicio" class="border border-black form-control" value="<?php echo $row_busc['hora_inicio']; ?>">
                                                            </div>
                                                            <div class='col'>
                                                                <label for="data_fim" class="ms-3"><strong>Fim do Evento</strong></label>
                                                                <input style="background-color: #ebebeb;" required type="date" name="data_fim" id="data_fim" class="border border-black form-control" value="<?php echo $row_busc['data_fim']; ?>">
                                                                <label for="horario_fim" class="ms-3 mt-4"><strong>Hórario de Termino</strong></label>
                                                                <input style="background-color: #ebebeb;" required type="time" name="horario_fim" id="horario_fim" class="border border-black form-control" value="<?php echo $row_busc['hora_fim']; ?>">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn border text-light border-dark bg-success">Editar</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                            <?php
                                }
                            } else {
                                echo "<tr ><td colspan='3' class='text-center'>Nenhum evento encontrado.</td></tr>";
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
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
            text: "Reserva realizada com sucesso, bom evento!",
            icon: "success",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "reserva.php";

        });
    </script>
<?php } else if ($_GET['alert'] == 2) {

?>
    <script>
        Swal.fire({
            title: "Atenção!",
            text: "A data de início não pode ser anterior à data atual. Por favor, escolha outra data.",
            icon: "error",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "reserva.php";

        });
    </script>
<?php } else if ($_GET['alert'] == 3) {

?>
    <script>
        Swal.fire({
            title: "Atenção!",
            text: "Desculpe, o horário selecionado não está disponível. Por favor, escolha outro horário.",
            icon: "error",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "reserva.php";

        });
    </script>
<?php } else if ($_GET['alert'] == 4) {

?>
    <script>
        Swal.fire({
            title: "Atenção!",
            text: "A data de termino não pode ser anterior à data de início. Por favor, escolha outra data.",
            icon: "error",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "reserva.php";

        });
    </script>
<?php } else if ($_GET['alert'] == 5) {

?>
    <script>
        Swal.fire({
            title: "Atenção!",
            text: "O hórario de termino não pode ser anterior ao hórario de início. Por favor, escolha outro hórario.",
            icon: "error",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "reserva.php";

        });
    </script>
<?php } else if ($_GET['alert'] == 6) {

?>
    <script>
        Swal.fire({
            title: "Sucesso!",
            text: "O evento foi deletado com sucesso.",
            icon: "success",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "reserva.php";

        });
    </script>
<?php } else if ($_GET['alert'] == 7) {

?>
    <script>
        Swal.fire({
            title: "Atenção!",
            text: "Desculpe, o horário selecionado não está disponível. Por favor, escolha outro horário.",
            icon: "error",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "reserva.php";

        });
    </script>
<?php } else if ($_GET['alert'] == 8) {

?>
    <script>
        Swal.fire({
            title: "Sucesso!",
            text: "O evento foi editado com sucesso.",
            icon: "success",

            allowOutsideClick: true,
            allowEscapeKey: true,

            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {

            window.location.href = "reserva.php";

        });
    </script>
<?php } else if ($_GET['alert'] == 9) {
?>
    <script>
        // Código para o novo alerta 9
        Swal.fire({
            title: "Atenção!",
            text: "Você não tem permissão para editar este evento.",
            icon: "error",
            allowOutsideClick: true,
            allowEscapeKey: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {
            window.location.href = "reserva.php";
        });
    </script>
<?php } else if ($_GET['alert'] == 10) {
?>
    <script>
        // Código para o novo alerta 10
        Swal.fire({
            title: "Atenção!",
            text: "O horário de término não pode ser anterior ao horário de início. Por favor, escolha outro horário.",
            icon: "error",
            allowOutsideClick: true,
            allowEscapeKey: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {
            window.location.href = "reserva.php";
        });
    </script>
<?php } else if ($_GET['alert'] == 11) {
?>
    <script>
        // Código para o novo alerta 11
        Swal.fire({
            title: "Atenção!",
            text: "Desculpe, o horário selecionado não está disponível. Por favor, escolha outro horário.",
            icon: "error",
            allowOutsideClick: true,
            allowEscapeKey: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {
            window.location.href = "reserva.php";
        });
    </script>
<?php } else if ($_GET['alert'] == 12) {
?>
    <script>
        // Código para o novo alerta 12
        Swal.fire({
            title: "Atenção!",
            text: "Desculpe, já existe um evento que cobre o período selecionado. Por favor, escolha outra data ou horário.",
            icon: "error",
            allowOutsideClick: true,
            allowEscapeKey: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {
            window.location.href = "reserva.php";
        });
    </script>
<?php } else if ($_GET['alert'] == 13) {
?>
    <script>
        // Código para o novo alerta 13
        Swal.fire({
            title: "Atenção!",
            text: "A data de início não pode ser anterior à data atual. Por favor, escolha outra data.",
            icon: "error",
            allowOutsideClick: true,
            allowEscapeKey: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {
            window.location.href = "reserva.php";
        });
    </script>
<?php } else if ($_GET['alert'] == 14) {
?>
    <script>
        // Código para o novo alerta 14
        Swal.fire({
            title: "Atenção!",
            text: "A data de término não pode ser anterior à data de início. Por favor, escolha outra data.",
            icon: "error",
            allowOutsideClick: true,
            allowEscapeKey: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "OK"
        }).then((result) => {
            window.location.href = "reserva.php";
        });
    </script>
<?php } ?>


<script>
    function AlertEvent(id) {
        Swal.fire({
            title: 'Tem certeza?',
            text: 'Você não será capaz de reverter isso!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `../../delet_event.php?adm=1&id=${id}`;
            }
        });
    }
</script>

</html>