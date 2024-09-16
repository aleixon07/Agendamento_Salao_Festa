<?php

include_once 'conexao.php';
session_start();

if(isset($_POST['aviso']) && isset($_POST['idaviso'])){

    $mensagem = $_POST['aviso'];
    $idavisos = $_POST['idaviso'];
    $data = date('y-m-d');

    $sql = "UPDATE avisos SET descricao = '$mensagem', data_publicacao = '$data' WHERE idAVISO = '$idavisos'";
    $result = mysqli_query($conecta,$sql);

    if($result){
        header("Location: area_adm/examples/gen_avisos.php?alert=3");
        exit();
    }
}else{
    echo "sem post";
}
?>