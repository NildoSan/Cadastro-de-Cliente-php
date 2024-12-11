<?php
session_start();
require_once 'db_connect.php';

if (isset($_POST['btn-login'])) {
  // Recebe os dados do formulário
  $usuario = mysqli_escape_string($connect, $_POST['usuario']);
  $senha = md5($_POST['senha']); // Aplica MD5 na senha recebida

  // Consulta o banco de dados
  $sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ?";
  $stmt = $connect->prepare($sql);
  $stmt->bind_param("ss", $usuario, $senha);
  $stmt->execute();
  $resultado = $stmt->get_result();

  if ($resultado->num_rows === 1) {
    // Autenticação bem-sucedida
    $dados = $resultado->fetch_assoc();
    $_SESSION['logado'] = true;
    $_SESSION['id_usuario'] = $dados['id'];
    header('Location: ../home.php');
    exit();
  } else {

    echo "<script>alert('Usuário ou senha incorretos!');</script>";
  }
} else {

  echo "<script>alert('Erro ao enviar os dados.');</script>";
}
