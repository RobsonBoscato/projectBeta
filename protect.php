<?php

if (!isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION['id'])) {
  die("Acesso negado! Você precisar estar logado. <p> <a href=\"login.php\">Entrar</a></p>");
}
?>