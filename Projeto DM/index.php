<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "estilo.css">
    <title>Document</title>
</head>
<body>
<center>
    <div class="inicio">
    <div class="Meio">    
OLÁ, SEJA BEM VINDO 


<?php 
if(isset($_SESSION['nome'])== null){
?>
  VISITANTE<br>

  <a href="cadastro.php">Cadastrar</a><br>

  <a href ="login.php">login</a>
<?php } else {
    echo $_SESSION['nome'];?>
    <br>
<a href="sair.php">Sair</a>
<a href="alterarsenha.php">alterarsenha</a>
<?php } ?>
</center>

</body>
</html>