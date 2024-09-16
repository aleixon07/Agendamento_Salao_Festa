<?php

include_once "conexao.php";

$id_usuario = $_GET['id'];

$sql_busc = "DELETE FROM reserva WHERE IdUsuario = '$id_usuario'";
$resultado_busca = mysqli_query($conecta, $sql_busc);

$sql = "DELETE FROM usuario WHERE idUSUARIO = '$id_usuario'";
$result = mysqli_query($conecta,$sql);

if($result){

    header("Location: area_adm/examples/gen_usuario.php?alert=1");
    exit();

}
?>