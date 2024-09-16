<?php

// incluindo a sessão e a conexão do Banco de Dados
include_once 'conexao.php';
session_start();

// Verifique se os dados necessários foram recebidos via POST
if (isset($_POST['nome']) && isset($_POST['data_inicio']) && isset($_POST['data_fim']) && isset($_POST['horario_inicio']) && isset($_POST['horario_fim']) && isset($_POST['idusuario']) && isset($_POST['idreserva'])) {

  $nome = $_POST['nome'];
  $data_inicio = $_POST['data_inicio'];
  $data_fim = $_POST['data_fim'];
  $horario_inicio = $_POST['horario_inicio'];
  $horario_fim = $_POST['horario_fim'];
  $idusuario = $_POST['idusuario'];
  $id_evento = $_POST['idreserva']; // ID do evento que está sendo editado

  $data_atual = date("Y-m-d");

  // Verifique se o evento pertence ao usuário atual
  $verifica_proprietario = "SELECT IdUsuario FROM reserva WHERE idRESERVA = '$id_evento' LIMIT 1";
  $resultado_proprietario = mysqli_query($conecta, $verifica_proprietario);
  $row_proprietario = mysqli_fetch_assoc($resultado_proprietario);

  if ($row_proprietario['IdUsuario'] != $idusuario) {
    // O evento não pertence ao usuário atual
    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=9");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=9");
      exit();
    }
  }

  if ($data_inicio < $data_atual) {
    // A data de início é no passado
 
    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=13");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=13");
      exit();
    }
  }

  if ($data_fim < $data_inicio) {
    // A data de fim não pode ser menor que a data inicial
    
    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=14");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=14");
      exit();
    }
  }

  if ($data_inicio == $data_fim && $horario_fim <= $horario_inicio) {
    // Duração zero ou negativa

    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=10");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=10");
      exit();
    }
  }

  // Verificar se há eventos já agendados durante o período
  $verifica_disponibilidade = "SELECT COUNT(*) AS count FROM reserva 
  WHERE idRESERVA <> '$id_evento' 
  AND (data_inicio <= '$data_fim' AND data_fim >= '$data_inicio') 
  AND (hora_inicio <= '$horario_fim' AND hora_fim >= '$horario_inicio')";

  $resultado = mysqli_query($conecta, $verifica_disponibilidade);
  $row = mysqli_fetch_assoc($resultado);
  if ($row['count'] > 0) {
    // Já existe um evento agendado para o mesmo período
 
    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=11");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=11");
      exit();
    }
  }

  // Agora você pode prosseguir com a edição do evento, pois não há conflitos
  $sql = "UPDATE reserva SET 
  data_inicio = '$data_inicio', 
  data_fim = '$data_fim', 
  hora_inicio = '$horario_inicio', 
  hora_fim = '$horario_fim', 
  descricao = '$nome'
  WHERE idRESERVA = '$id_evento'";

  $resultado = mysqli_query($conecta, $sql);

  if ($resultado) {
    
    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=8");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=8");
      exit();
    }
  }
} else {
  echo "sem post";
  exit();
}
