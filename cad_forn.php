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
	   $sql="SELECT * FROM tb_fornecedor ".$criterio;
	   $busca= mysqli_query($link, $sql) or die (mysqli_error());
	   $campo= mysqli_fetch_array($busca);

	 }else{
		   $campo['id']="";
		   $campo['nome']="";
		   $campo['cnpj']="";
		   $campo['i_e']="";
		   $campo['tel']="";
		   $campo['endereco']="";
		   $campo['cep']="";
		   $campo['bairro']="";
		   $campo['cidade']="";
		   $campo['estado']="";
		   $campo['contato']="";
		   $campo['email']="";
	 }
	?>

<center>

<div class="tabelas">
<form action="insert_forn.php" method="post" id="" autocomplete="off">

<legend><center><h1>Cadastro de Fornecedores</h1></center></legend></br><br>


<table class="table table-responsive table-bordered table-hover">

<tr><td class="col-lg-4"><img src="img/64x64/1466474466_add_user.png"></td><td><h3><legend>Dados do Fornecedor</legend></h3></td></tr>
  <tr>
  <tr>
    <th scope="row">Código:</th>
	<td><input type="text" readonly name="id" size="50" value="<?php echo $campo['id'];?>"></td>
	</tr>
    <th scope="col">Nome Fantasia:</th>
    <td><input type="text" name="nome" size="50" required value="<?php echo $campo['nome'];?>"></td>
  </tr>
  <tr>
    <th scope="row">Inscrição Estadual:</th>
    <td><input type="text" name="i_e" size="50" required value="<?php echo $campo['i_e'];?>"></td>
  </tr>
  <tr>
    <th scope="row" align="center">CNPJ:</th>
    <td><input type="text" name="cnpj" size="50" required value="<?php echo $campo['cnpj'];?>"></td>
  </tr>
<br> <!--Fim dos Dados Pessoais-->
<tr><td><img src="img/64x64/1466474663_phone-book.png"</td><td><h3><legend>Contato</legend></h3></td></tr>
  <tr>
    <th scope="col">E-mail:</th>
    <td ><input type="text" name="email" size="50" required value="<?php echo $campo['email'];?>"></td>
  </tr>
  <tr>
    <th scope="col">Telefone:</th>
    <td><input type="text" name="contato" size="50" required value="<?php echo $campo['contato'];?>"></td>
  </tr>
<br>
<td><img src="img/64x64/1466475752_home.png"></td><td><h3><legend>Endereço</legend></h3></td></tr>
  <tr>
    <th scope="col">Endereço:</th>
    <td ><input type="text" name="endereco" size="50" required value="<?php echo $campo['endereco'];?>"></td>
  </tr>
  <tr>
    <th scope="col">CEP:</th>
    <td><input type="text" name="cep" size="50" required value="<?php echo $campo['cep'];?>"></td>
  </tr>
  <tr>
    <th scope="col" align="center">Bairro:</th>
    <td><input type="text" name="bairro" size="50" required value="<?php echo $campo['bairro'];?>"></td>
  </tr>
    <tr>
    <th scope="col" align="center">Cidade:</th>
    <td><input type="text" name="cidade" size="50" required value="<?php echo $campo['cidade'];?>"></td>
  </tr>
    <tr>
    <th scope="col" align="center">Estado:</th>
    <td><select name="estado" required value="<?php echo $campo['estado'];?>">
    <option value="ac">Acre</option> 
    <option value="al">Alagoas</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amapá</option> 
    <option value="ba">Bahia</option> 
    <option value="ce">Ceará</option> 
    <option value="df">Distrito Federal</option> 
    <option value="es">Espírito Santo</option> 
    <option value="go">Goiás</option> 
    <option value="ma">Maranhão</option> 
    <option value="mt">Mato Grosso</option> 
    <option value="ms">Mato Grosso do Sul</option> 
    <option value="mg">Minas Gerais</option> 
    <option value="pa">Pará</option> 
    <option value="pb">Paraíba</option> 
    <option value="pr">Paraná</option> 
    <option value="pe">Pernambuco</option> 
    <option value="pi">Piauí</option> 
    <option value="rj">Rio de Janeiro</option> 
    <option value="rn">Rio Grande do Norte</option> 
    <option value="ro">Rondônia</option> 
    <option value="rs">Rio Grande do Sul</option> 
    <option value="rr">Roraima</option> 
    <option value="sc">Santa Catarina</option> 
    <option value="se">Sergipe</option> 
    <option value="sp">São Paulo</option> 
    <option value="to">Tocantins</option> 
   </select></td>
  </tr>
    
</table>
<br>
<br>
<input type="submit" align="center" name="Cadastrar" value="Cadastrar">
<input type="submit" align="center" name="Cadastrar" value="Atualizar">
<input type="reset" align="center" name="Cadastrar" value="Limpar">
<a href="tela_fornecedor.php">Cancelar</a>
</form>
</div>
</center>
<div class="rodape"> </div>
</body>
</html>
