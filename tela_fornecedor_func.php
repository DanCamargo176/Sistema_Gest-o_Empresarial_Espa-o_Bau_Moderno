<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>


<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Baú Moderno Brechó</title> 
<link rel="stylesheet" type="text/css" href="css/style6.css" />
<script src="js/modernizr.custom.63321.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="tela_cliente.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="logOut.js"></script>

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
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
      <a class="navbar-brand" href="index_func.php">Baú Moderno Brechó</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index_func.php">Inicio</a></li>
        <li class="disabled"><a href="#">Usuários</a></li>
        <li><a href="tela_cliente_func.php">Clientes</a></li>
        <li><a href="tela_fornecedor_func.php">Fornecedores</a></li>
        <li><a href="tela_novidades_func.php">Novidades do Dia</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#"><span class="glyphicon glyphicon-user"> </span>
			<?php if (isset($_SESSION['usuarioNome'])){
			echo "Olá, " .$_SESSION['usuarioNome'];
			 echo "</br><a id='logOut' href='logOut.php'>LogOut</a></li><span>";
			
			}
			
			else {return false;}
			
			?>
			
      </ul>
    </div>
  </div>
</nav>
<div class="col-lg-6 col-md-6 affix tela_cliente">

<label class="titulo_cliente"><h1><center>Consulta/Cadastro de Fornecedores</center></h1></label>
    <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">O que deseja fazer?
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="cad_forn_func.php">Novo Fornecedor</a></li>
    <li><a href="lista_forn_func.php">Consultar Fornecedor(es)</a></li>
    <li><a href="index_func.php">Voltar</a></li>
  </ul>
</div>
</div>
<fieldset class="tutorial"><legend class="legenda_tutorial"><center><h2>Precisa de Ajuda?</h2></center></legend><center><h3>Para utilizar as funções do Sistema de Gerenciamento basta seguir estes passos:</br></br>Clique no botão "O que deseja fazer?", em seguida,</br>escolha dentre as opçoes exibidas, aquela que mais se adequa</br> a sua necessidade no momento do uso,</br>e pronto, é rápido, prático e muito simples!!</h3></center></fieldset>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.dropdown.js"></script>
		<script type="text/javascript">
			
			$( function() {
				
				$( '#cd-dropdown' ).dropdown( {
					gutter : 5,
					stack : false,
					delay : 100,
					slidingIn : 100
				} );

			});

		</script>

</body>
</html>