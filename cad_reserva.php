<?php
include "conexao.php";

if (isset($_POST['nome']) && isset($_POST['data']) && isset($_POST['hora'])) {
   
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];

    $consulta = "SELECT * FROM reserva WHERE
        (('$data' >= data AND '$data' < hora) OR
         ('$hora' > data AND '$hora' <= hora) OR
         ('$data' <= data AND '$hora' >= hora))";
    
    $resultado = mysqli_query($conecta, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<script language='javascript' type='text/javascript'>alert('Conflito de horário! Por favor, escolha outro horário.');window.location.href='formularioAgenda.php';</script>";
    } else {
        $inserir = "INSERT INTO reserva ( nome, data, hora) VALUES ('$nome', '$data', '$hora')";
        mysqli_query($conecta, $inserir);
        echo "<script language='javascript' type='text/javascript'>alert('Evento cadastrado com sucesso!');window.location.href='index.php';</script>";
    }
} else {
    echo "<script language='javascript' type='text/javascript'>alert('Algo está errado, verifique se suas informações estão corretas!');window.location.href='formularioAgenda.php';</script>";
}
?>