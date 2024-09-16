<?php
// incluindo a sessão e a conexão do Banco de Dados
include_once 'conexao.php';
session_start();

// verificando se estou recebendo todos os POST necessario
if (isset($_POST['nome']) && isset($_POST['data_inicio']) && isset($_POST['data_fim']) && isset($_POST['horario_inicio']) && isset($_POST['horario_fim']) && isset($_POST['idusuario'])) {

  $nome = $_POST['nome'];
  $data_inicio = $_POST['data_inicio'];
  $data_fim = $_POST['data_fim'];
  $horario_inicio = $_POST['horario_inicio'];
  $horario_fim = $_POST['horario_fim'];
  $idusuario = $_POST['idusuario'];

  $data_atual = date("Y-m-d");



  if ($data_inicio < $data_atual) {
    // A data de início é no passado
    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=2");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=2");
      exit();
    }
  }

  if ($data_fim < $data_inicio) {
    // A data de fim não pode ser menor que a data inicial
    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=4");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=4");
      exit();
    }
  }

  if ($data_inicio == $data_fim && $horario_fim <= $horario_inicio) {
    // Duração zero ou negativa
    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=5");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=5");
      exit();
    }
  }

  // Verificar se há eventos já agendados durante o período
  $verifica_disponibilidade = "SELECT COUNT(*) AS count FROM reserva 
WHERE (data_inicio <= '$data_fim' AND data_fim >= '$data_inicio') 
AND (hora_inicio <= '$horario_fim' AND hora_fim >= '$horario_inicio')";

  $resultado = mysqli_query($conecta, $verifica_disponibilidade);
  $row = mysqli_fetch_assoc($resultado);
  if ($row['count'] > 0) {
    // Já existe um evento agendado para o mesmo período

    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=3");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=3");
      exit();
    }
  }

  

  // Agora você pode prosseguir com a inserção do evento, pois não há conflitos
  $sql = "INSERT reserva (data_inicio, data_fim, hora_inicio, hora_fim, descricao, IdUsuario)
  VALUES ('$data_inicio','$data_fim','$horario_inicio','$horario_fim','$nome','$idusuario')";

  $resutl = mysqli_query($conecta, $sql);

  if ($resutl) {
    if (isset($_POST['idadministrador'])) {
      header("Location: area_adm/examples/reserva.php?alert=1");
      exit();
    } else {
      header("Location: perfil_usuario/examples/reserva.php?alert=1");
      exit();
    }
  }
} else {
  echo "sem post";
  exit();
}
