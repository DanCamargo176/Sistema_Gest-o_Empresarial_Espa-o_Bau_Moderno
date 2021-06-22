
<?php
include "conexao.php";
include "ExecutaSQL.php";

$id=$_POST['id'];
$nome=$_POST['nome'];
$cnpj=$_POST['cnpj'];
$Ie=$_POST['i_e'];
$endereco=$_POST['endereco'];
$cep=$_POST['cep'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$contato=$_POST['contato'];
$email=$_POST['email'];


$botao=$_POST['Cadastrar'];

if($botao=="Cadastrar"){
$SQL=" INSERT INTO tb_fornecedor VALUES('".$id."','".$nome."','".$cnpj."','".$Ie."','".$endereco."','".$cep."','".$bairro."','".$cidade."','".$estado."','".$contato."','".$email."');";}

else  if($botao=="Atualizar"){
$SQL=" UPDATE tb_fornecedor SET nome='".$nome."',cnpj='".$cnpj."',i_e='".$Ie."', endereco='".$endereco."',cep='".$cep."',bairro='".$bairro."',cidade='".$cidade."',estado='".$estado."', contato='".$contato."', email='".$email."' WHERE id='".$id."';";	
}

/*echo $SQL;*/

$link= conectar();
$inserido= executaSQL($SQL,$link);//$inserido terao valor "v" ou "f".

if($inserido==true){
	echo"<script> alert('Gravado com sucesso');</script>";
	echo"<script> window.location.href='tela_fornecedor.php'</script>";
	}else{
	echo"<script> alert('Erro ao gravar, tente novamente');</script>";
	echo"<script> window.location.href='cad_forn.php'</script>";
	}
?>