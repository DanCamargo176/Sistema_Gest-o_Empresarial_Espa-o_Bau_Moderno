<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Baú Moderno Brechó</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/logOut.js"></script>

  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; 
      margin: auto;
      min-height:200px;
  }

  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  .fb{
	  clear:both;}
  .wpp{
	  clear:both;}
	  
	  .rede_social{float:left;
	  clear:both;
	  margin: 1px 1px 1px 1px solid #FF0004;
	  margin-bottom:2px solid #261DFF;}
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <span class="" aria-hidden="true"></span>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index_adm.php">Baú Moderno Brechó</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index_adm.php">Inicio</a></li>
        <li><a href="tela_usuario.php">Usuários</a></li>
        <li><a href="tela_cliente.php">Clientes</a></li>
        <li><a href="tela_fornecedor.php">Fornecedores</a></li>
        <li><a href="tela_novidades.php">Novidades do Dia</a></li>
        <li><a href="tela_faleconosco.php">Fale Conosco</a></li>
        <li><a href="tela_servico_nota.php">Novo(s) Serviço(s)/Emissão de Nota(s)</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#"><span class="glyphicon glyphicon-user"></span>
			<?php if (isset($_SESSION['usuarioNome'])){
			 echo "<span>Olá, " .$_SESSION['usuarioNome'];
			 echo "</br><a id='logOut' href='logOut.php'>LogOut</a></li><span>";
			}
			
			else {return false;}
			
			?>
			
      </ul>
    </div>
  </div>
</nav>
<div class="index_adm_conteudo">
<fieldset class="center-block"><legend><center>Olá, seja Bem Vindo!</center></legend> <p> 

<center><h3>Utilize esta página para fazer o<br>Gerenciamento do Sistema e de sua Empresa!</h3></center>
</fieldset>
</div>

<div class="rodape_adm"></div>
