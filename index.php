<?php
session_start();
if (isset($_SESSION['logado'])) {
  header('Location: home.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Estilos para centralizar */
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
    }

    .container {
      text-align: center;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    h1 {
      margin-bottom: 20px;
      font-weight: bold;
      color: #660066;
    }

    form input {
      display: block;
      margin: 10px auto;
      padding: 10px;
      width: 80%;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    form button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    form button:hover {
      background-color: #0056b3;
    }

    ul {
      color: red;
      list-style: none;
      padding: 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Login</h1>
    <?php
    if (!empty($erros)):
      foreach ($erros as $erro):
        echo $erro;
      endforeach;
    endif;
    ?>
    <hr>
    <form action="php_action/login_action.php" method="POST">
      <input type="text" name="usuario" placeholder="Usuário" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit" name="btn-login">Entrar</button>
    </form>
  </div>
</body>

</html>