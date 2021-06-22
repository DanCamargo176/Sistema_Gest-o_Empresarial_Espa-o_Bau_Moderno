<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança 
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
  <script src="logOut.js"></script>

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
      width: 100%; /* Set width to 100% */
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
      <a class="navbar-brand" href="index.php">Baú Moderno Brechó</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Inicio</a></li>
        <li><a href="aloja.php">A Loja</a></li>
        <li><a href="novidades.php">Novidades do Dia</a></li>
        <li><a href="faleconosco.php">Fale Conosco</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><span class="glyphicon glyphicon-user"> </span>
			<?php if (isset($_SESSION['usuarioNome'])){
			echo "Olá, " .$_SESSION['usuarioNome'];
			echo "</br><a href='logOut.php'>LogOut</a></a></li>";
			
			}
			
			else echo "Área Administrativa";
			
			?>
            </a>
			
      </ul>
    </div>
  </div>
</nav>

<div id="produtos"><center>
<fieldset class="aloja"><legend><center><h2>Sobre nós:</h2></center></legend><center><h3><p>O Baú Moderno Brechó é um sonho antigo da proprietária Elisangela Fernandes.</br><p>Iniciou-se em maio de 2012, em uma conversa com sua amiga sobre o sonho de ter um brechó diversificado, diferente e moderno, onde atendesse todas as pessoas de diferentes idades, todos os gostos e interesses.</br><p>A amiga para quem contou o antigo sonho, disse que tinha um lugar e que era só colocar o plano em pratica.</br><p>Em 2017 o Brechó completa 5 anos e é um dos mais renomados da cidade de Pirassununga, São Paulo.</h3>
</br>
<legend><center><h2>Localização:</h2></center></legend></br>                       
<center><h3>Brechó Baú Moderno: Rua José Bonifacio, nº 583, Centro, Pirassununga - SP<h5>( ao lado da Bia cosméticos).</h5></br>
<h3>Espaço Baú Moderno: Rua Coronel Franco- 1312- Centro</h3> <h5>(Antigo Casarao das Noivas)</h5></center><br><br></fieldset>
</div>
<div class="footer">	
<div class="rodape_novidades"><center>Siga-nos nas Redes Sociais: <a href="" target="new">Facebook</a> / <a href="" target="new">Instagram</a></center> </div>
</div>

</body>
</html>


