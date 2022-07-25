<?php

$hostname = "localhost";
$user = "root";
$senha = "";
$database = "login";

$mysqli = new mysqli($hostname, $user, $senha, $database);

if($mysqli->errno) {
  die("Falha ao conectar ao Banco de Dados: " . $mysqli->errno);
}

if (isset($_POST['user'])) {
  $sql = $mysqli->prepare("INSERT INTO usuarios VALUES (null,?,?,?)");

  $sql->execute(array($_POST['user'],$_POST['mail'],$_POST['senha']));

  echo "Usuário cadastrado com sucesso.";

}


?>

<link rel="stylesheet" href="style.css">

<form method="post">

<h2>Cadastro de novo usuário(a)</h2>

<fieldset>
  <p>
    <label for="user">Nome de Usuário</label>
    <input type="text" name="user">
  </p>
  <p>
    <label for="mail">Informe seu E-mail</label>
    <input type="email" name="mail">
  </p>
  <p>
    <label for="senha">Senha</label>
    <input type="password" name="senha">
  </p>
  
  <input type="submit" value="Cadastrar">
</fieldset>

</form>

<a href="index.php">Retornar ao Home</a>
<br>
<a href="login.php">Acessar a página de Login</a>