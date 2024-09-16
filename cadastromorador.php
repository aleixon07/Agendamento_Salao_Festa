<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $CPF = $_POST["cpf"];
    $bloco = $_POST["bloco"];
    $apartamento = $_POST["apartamento"];
    $senha = $_POST["senha"];

	 
    $select_email = "SELECT * FROM usuario WHERE email = '$email'";
    $busca_email = $conecta->query($select_email);

    $select_CPF = "SELECT * FROM usuario WHERE CPF = '$CPF'";
    $busca_CPF = $conecta->query($select_CPF);

    if(mysqli_num_rows($busca_email)){
        header("Location: cadastro.php?alert=1");
        exit();
    }

    if(mysqli_num_rows($busca_CPF)){
        header("Location: cadastro.php?alert=2");
        exit();
    }

     $sql = "INSERT INTO usuario (nome, email, tipo, numero, CPF, bloco, apartamento, senha)
      VALUES ('$nome', '$email','1', '$numero', '$CPF','$bloco', '$apartamento', '$senha')";

	$a = mysqli_query($conecta, $sql);

    if($a){
        header("Location: login.php?alert=1");
        exit();
    }else{
        header("Location: cadastro.php?erro_ao_cadastrar");
        exit();
    }
    
?>