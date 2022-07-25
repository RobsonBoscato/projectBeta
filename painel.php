<?php
include_once("protect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Painel do Usuário</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  
  Seja bem vindo ao seu painel, <?php if ($_SESSION['nome'] == "") {
    echo "usuário ID: " . $_SESSION['id'];
  } else {
    echo $_SESSION['nome'] . "!";
  } ?>

  <p>
    <a href="logout.php">Encerrar acesso</a>
  </p>

</body>
</html>
