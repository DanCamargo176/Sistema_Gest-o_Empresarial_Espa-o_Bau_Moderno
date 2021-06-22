<?PHP $data=date("d/ m/ y"); ?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="cad.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta charset="utf-8">
<title>Baú Moderno Brechó</title>
</head>
<body>
<center>

<div class="tabelas">
<form action="insert_novidade.php" method="post" id="" autocomplete="off">

<legend><center><h1>Novidades do Dia</h1></center></legend>
</br>

<table class="table table-striped table-bordered table-responsive table-hover">

<tr><td class="col-lg-4"></td><td><h1><legend>Dados da Publicação</legend></h1></td></tr>
<tr>
    <th scope="col" >O Look do dia é:</th>
	<td><textarea  name="titulo" cols="40" rows="5" required></textarea></td>
	</tr>
  <tr>
    <th scope="col" >Imagem:</th>
	<td><input type="file" name="imgPublica" size="50" required></td>
  </tr>
  <tr>
    <th scope="col">Descrição:</th>
    <td><textarea  name="descricao" cols="40" rows="5" required></textarea></td>
  </tr>
  <tr>
    <th scope="col">Data da Postagem:</th>
    <td><input type="text" name="data" value="<?php echo $data ?>" size="50" required></td>
  </tr>
</table>
<br> <!--Fim dos Dados Pessoais-->
<input type="submit" align="center" name="publicar" value="Publicar" formenctype="multipart/form-data">
<input type="reset" align="center" name="Reset" value="Limpar">
<a href="tela_novidades.php">Cancelar</a>
</form>

</center>
<div class="rodape"></div>
</body>
</html>
