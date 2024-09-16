<?php

include "conexao.php";

session_start();

$email = $_POST['email'];   
$senha = $_POST['senha'];

$consulta = "SELECT * FROM usuario where email = '$email' AND senha = '$senha' LIMIT 1";
$conectar = mysqli_query($conecta, $consulta);

if(mysqli_num_rows($conectar) > 0){

    if($conectar){

        $row = mysqli_fetch_assoc($conectar);
        
        $_SESSION['idusuario'] = $row['idUSUARIO'];

        $tipo = $row['tipo'];

        if($tipo == 1){

            header("Location: perfil_usuario/examples/agenda.php");
            exit();
            
        }else{
            header("Location: area_adm/examples/gen_usuario.php");
            exit();
        }
    }

}else{
    header("Location: login.php?alert=2");
    exit();

}
