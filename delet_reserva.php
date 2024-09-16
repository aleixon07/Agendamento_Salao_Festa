<?php

include_once "conexao.php";

$id_reserva = $_GET['id'];

$sql = "DELETE FROM reserva WHERE idRESERVA = '$id_reserva'";
$result = mysqli_query($conecta,$sql);

if($result){

    header("Location: area_adm/examples/gen_reserva.php?alert=1");
    exit();

}
?>