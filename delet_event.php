<?php

include_once "conexao.php";

$id_reserva = $_GET['id'];

$sql = "DELETE FROM reserva WHERE idRESERVA = '$id_reserva'";
$result = mysqli_query($conecta,$sql);

if($result){
    if(isset($_GET['adm'])){
        header("Location: area_adm/examples/reserva.php?alert=6");
        exit();
    }else{
        header("Location: perfil_usuario/examples/reserva.php?alert=6");
        exit();
    }
   
}
?>