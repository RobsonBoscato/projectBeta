<?php

$hostname = "localhost";
$user = "root";
$senha = "";
$database = "login";

$mysqli = new mysqli($hostname, $user, $senha, $database);

if($mysqli->errno) {
  die("Falha ao conectar ao Banco de Dados: " . $mysqli->errno);
}



