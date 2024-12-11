<?php
//conexão com o banco de dados
$servername = "localhost";
$username = "nildosantos";
$passoword = "Unama@2024";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $passoword, $db_name);
if (mysqli_connect_error()):
  echo "Erro na conexão: " . mysqli_connect_error();
endif;
