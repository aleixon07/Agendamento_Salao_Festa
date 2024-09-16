<?php

include_once 'conexao.php';

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['apartamento']) && isset($_POST['bloco']) && isset($_POST['cpf']) && isset($_POST['telefone']) && $_POST['iduser']){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $apartamento = $_POST['apartamento'];
    $bloco = $_POST['bloco'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $id = $_POST['iduser'];

    $sql =" UPDATE usuario SET
    nome = '$nome',
    email = '$email',
    apartamento = '$apartamento',
    bloco = '$bloco',
    cpf = '$cpf',
    numero = '$telefone'
    WHERE idUSUARIO = '$id'";

    $result = mysqli_query($conecta,$sql);

    if($result){
        if (isset($_POST['idadministrador'])) {
            header("Location: area_adm/examples/perfil.php?alert=1");
            exit();
          } else {
            header("Location: perfil_usuario/examples/perfil.php?alert=1");
            exit();
          }
    }

}else{
    echo "sem post";
}

?>
