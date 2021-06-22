<?php
include "conexao.php";
include "ExecutaSQL.php";

$id=$_POST[''];
$nome=$_POST['nome'];
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

$botao=$_POST['nivel'];

if($botao=="admin"){
$SQL="INSERT INTO tb_administrador VALUES('".$id."','".$nome."', '".$usuario."', '".$senha."')";
}else  if($botao=="func"){
$SQL="INSERT INTO tb_funcionario VALUES('".$id."','".$nome."', '".$usuario."', '".$senha."')";	
}

$link= conectar();
$inserido= executaSQL($SQL,$link);//$inserido terao valor "v" ou "f".

if($inserido==true){
	echo"<script> alert('Gravado com sucesso');</script>";
	echo"<script> window.location.href='index.php'</script>";
	}else{
	echo"<script> alert('Erro ao gravar, tente novamente!');</script>";
	echo"<script> window.location.href='cad_user.php'</script>";
	}
?>