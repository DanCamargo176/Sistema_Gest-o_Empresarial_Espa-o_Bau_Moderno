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
<form action="insert_user.php" method="post" id="" autocomplete="off">

<legend><center><h1>Cadastro de Usuários</h1></center></legend>
</br>

<table class="table table-striped table-bordered table-responsive table-hover">

<tr><td class="col-lg-4"><img src="img/user.png"></td><td><h1><legend>Dados do Usuário</legend></h1></td></tr>
<tr>
    <th scope="col" >Nome:</th>
	<td><input type="text" name="nome" size="50" required></td>
	</tr>
	<tr>
    <th scope="col" >Usuário:</th>
	<td><input type="text" name="usuario" size="50" required></td>
	</tr>
  <tr>
    <th scope="col">Senha:</th>
    <td><input type="password" name="senha" size="50" required></td>
  </tr>
  <tr>
    <th scope="col">Nível de Acesso:</th>
    <td><input type="radio" name="nivel" value="admin" size="50"> Administrador<br>
    <input type="radio" name="nivel" value="func" size="50"> Padrão</td>
  </tr>

</table>
<br> <!--Fim dos Dados Pessoais-->
<input type="submit" align="center" name="cadastrar" value="Cadastrar">
<input type="reset" align="center" name="Reset" value="Limpar">
<a href="tela_usuario.php">Cancelar</a>
</form>

</center>
<div class="rodape"></div>
</body>
</html>
