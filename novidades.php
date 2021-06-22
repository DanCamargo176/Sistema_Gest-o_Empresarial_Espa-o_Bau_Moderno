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
			
			 echo "</br><a href='login.html'>Área Administrativa</a></a>";
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
<?php 
include("conexao.php");
include("executaSQL.php");
?>

<?php
						
											
						
						$sql = "SELECT * FROM tb_novidades ORDER BY id DESC";
						$link = conectar();
						$result = executaSQL($sql, $link);
						$linhas = mysqli_num_rows($result);
						$campo = mysqli_fetch_array($result);
						$i = 1;

						echo ' <fieldset class="novidades_field"><legend>Novidade do Dia! </legend>
						
						<table width="400" border="0"  align="center" class="tabela_novidades">
  <tbody>
    <tr>
      <td colspan="2" align="center"><img src="upload/'.$campo['imagem'].'" disabled></td><td></td>
    </tr>
	<tr>
      <td></p>Look do Dia:</td><td><textarea  name="titulo" cols="40" rows="1" maxlength="500" disabled>'.$campo['titulo'].'</textarea></td>
    </tr>
    <tr>
      <td>Descrição:</td><td> &nbsp;&nbsp;&nbsp;<textarea  name="descricao" cols="40" rows="5" maxlength="500" disabled>'.$campo['descricao'].'</textarea> </td>
    </tr>
    <tr>
   <td>Data da Postagem:</td><td><input type="text"  size="8" value="'.$campo['data'].'" disabled> </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><br><a class="reserva_ja" href="https://www.facebook.com/baumodernomulhercompleta/?fref=ts" target="_new">Reserve já!</a><br></td><td></td>
    </tr>
  </tbody>
</table></fieldset>
						';
						
					?>
                    </center>

</div>
<div class="rodape_novidades"><center>Siga-nos nas Redes Sociais: <a href="https://www.facebook.com/baumodernomulhercompleta/?fref=ts" target="new">Facebook</a> / <a href="" target="new">Instagram</a></center> </div>


</body>
</html>


