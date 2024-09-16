<?php

include_once "conexao.php";
session_start();

if(isset($_POST['aviso'])){

$aviso = $_POST['aviso'];

$data = date('y-m-d');

$sql = "INSERT INTO avisos(descricao,data_publicacao) VALUES ('$aviso','$data')";
$result = mysqli_query($conecta,$sql);

    if($result){
        header("Location: area_adm/examples/gen_avisos.php?alert=1");
        exit();
    }
}else{
    header("Location: area_adm/examples/gen_avisos.php");
    exit();
}
    