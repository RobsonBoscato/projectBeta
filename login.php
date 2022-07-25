<?php
include_once('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {
  //verificacao se os campos digitas não estão vazios
  if (strlen($_POST['email']) == 0) {
    echo "Preencha seu e-mail";
  }else if (strlen($_POST['password']) == 0) {
    echo "Preencha sua senha";
  }else {
        // resetar as variaveis para evitar sql Injection
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['password']);

    $sqlCode= "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sqlQuery = $mysqli->query($sqlCode) or die("Erro ao executar o código SQL: ". $mysqli->error);

    $users = $sqlQuery->num_rows; //caso a info bata com o DB, retorna 1

    if ($users == 1) {
      
      $usuario = $sqlQuery->fetch_assoc(); // joga os dados do array na variavel
      if (!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      header("Location: Painel.php");

    } else {
      echo "Falha ao logar. E-mail ou senha inválidos.";
    }
  }
}

?>

<link rel="stylesheet" href="style.css">

<form id="form" action="" method="post">
  <h2>Acesse a sua conta</h2>

  <fieldset>
    <p>
    <label for="email">Insira seu E-mail de acesso</label>
    <input type="email" name="email" id="email">
    </p>
    <p>
    <label for="password">Insira sua senha</label>
    <input type="password" name="password" id="password">
    </p>
    <input type="submit" value="Entrar">
    <br>
    
    <p>
  </fieldset>
  
  Caso esteja efetuando seu acesso pela 1ª vez, acesse o link:
  <a href="cadastro.php">Cadastrar acesso</a>
</p>

  </form>
  