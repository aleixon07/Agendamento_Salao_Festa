<?php

include_once "conexao.php";

$id_aviso = $_GET['id'];

$sql = "DELETE FROM avisos WHERE idAVISO ='$id_aviso'";
$result = mysqli_query($conecta,$sql);

if($result){
        header("Location: area_adm/examples/gen_avisos.php?alert=2");
        exit();
}
?>