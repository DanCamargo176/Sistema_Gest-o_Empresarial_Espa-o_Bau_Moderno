<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="cad.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<meta charset="utf-8">
<title>Baú Moderno Brechó</title>
</head>
<body>

<?php
	 $valor="";
	 
	 if(isset($_GET["id"]))
	 { $valor=$_GET["id"];
	   $criterio="WHERE id= $valor";
	   include "conexao.php";
	   
	   $link=conectar();
	   $sql="SELECT * FROM tb_clientes ".$criterio;
	   $busca= mysqli_query($link, $sql) or die (mysqli_error());
	   $campo= mysqli_fetch_array($busca);

	 }else{
		   $campo['id']="";
		   $campo['nome']="";
		   $campo['email']="";
		   $campo['data_nasc']="";
		   $campo['cpf']="";
		   $campo['rg']="";
		   $campo['tel']="";
		   $campo['endereco']="";
		   $campo['numero']="";
		   $campo['bairro']="";
		   $campo['cep']="";
		   $campo['cidade']="";
		   $campo['estado']="";
	 	   $campo['obs']=""; 
		   $campo['vip']=""; 
   
	 }
	?>


<center>

<div class="tabelas">
<form action="insert_cli.php" method="post" id="" autocomplete="off">

<legend><center><h1>Cadastro de Clientes</h1></center></legend>
</br>
<!--Tabela Dados Pessoais-->
<table class="table table-striped table-bordered table-responsive table-hover">

<tr><td colspan="2"><center><h3><legend>Dados Pessoais</legend></h3></center></td></tr>
	<tr>
    <th scope="col" >Código:</th>
	<td><input type="text" name="id" size="50" readonly value="<?php echo $campo['id'];?>"></td>
	</tr>
  <tr>
    <th scope="col">Nome:</th>
    <td><input type="text" name="nome" size="50" required value="<?php echo $campo['nome'];?>"></td>
  </tr>
  <tr>
    <th scope="col">Data de Nascimento:</th>
    <td><input type="date" name="data_nasc" size="50" required value="<?php echo $campo['data_nasc'];?>"></td>
  </tr>
  <tr>
    <th scope="col">CPF:</th>
    <td><input type="text" name="cpf" size="50" required value="<?php echo $campo['cpf'];?>"></td>
  </tr>
  <tr>
    <th scope="col">RG:</th>
    <td><input type="text" name="rg" size="50" required value="<?php echo $campo['rg'];?>"></td>
  </tr>

<!--Tabela Contato-->
<tr><td colspan="2"><center><h3><legend>Contato</legend></h3></center></td></tr>
<th scope="col">E-mail:</th>
    <td><input type="email" name="email" size="50" required value="<?php echo $campo['email'];?>"></td>
  </tr>
  <tr>
    <th scope="col">Telefone:</th>
    <td><input type="text" name="tel" size="50" required value="<?php echo $campo['tel'];?>"></td>
  </tr>
   <tr>
    <th scope="col">Endereço:</th>
    <td><input type="text" name="endereco" size="50" required value="<?php echo $campo['endereco'];?>"></td>
  </tr>
  <tr>
    <th scope="col">Numero:</th>
    <td><input type="text" name="numero" size="50" required value="<?php echo $campo['numero'];?>"></td>
  </tr>
  <tr>
    <th scope="col">Bairro:</th>
    <td><input type="text" name="bairro" required size="50" value="<?php echo $campo['bairro'];?>"></td>
  </tr>
  <tr>
    <th scope="col">CEP:</th>
    <td><input type="text" name="cep" size="50" required value="<?php echo $campo['cep'];?>"></td>
  </tr>
  <tr>
    <th scope="col">Cidade:</th>
    <td><input type="text" name="cidade" size="50" required value="<?php echo $campo['cidade'];?>"></td>
  </tr>
  <tr>
    <th scope="col">Estado:</th>
    <td><input type="text" name="estado" size="50" required value="<?php echo $campo['estado'];?>"></td>
    
    </tr>
    <tr><td colspan="2"><center><h3><legend>Anotaçoes Adicionais</legend></h3></center></td></tr>
    <tr>
    <th scope="col">Cliente Vip:</th>
    <td>
    <input type="text" name="vip" value="<?php echo $campo['vip'];?>" size="50" required placeholder="Preencher com SIM ou NÃO" >
    </td>
  </tr>
    <tr>
    <th scope="col" class="col-lg-4">Anotações:</th>
    <td ><textarea id="obs" name="obs" cols="100" rows="8" required><?php echo $campo['obs'];?></textarea></td>
  </tr>
</table>
<br>
<input type="submit" align="center" name="Cadastrar" value="Cadastrar">
<input type="reset" align="center" name="reset" value="Limpar">
<a href="tela_cliente_func.php">Cancelar</a>
</form>
</div>
</center>
<div class="rodape"></div>
</body>
</html>
