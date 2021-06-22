<?php
include "conexao.php";
include "ExecutaSQL.php";

$id=$_POST[''];
$titulo=$_POST['titulo'];
$data=date("j/ n/ Y");
$imgPublica=$_FILES['imgPublica']['name'];
$tmp_imagem=$_FILES['imgPublica'] ['tmp_name'];
$descricao=$_POST['descricao'];

$botao=$_POST['publicar'];

if($botao=="Publicar"){
$SQL="INSERT INTO tb_novidades VALUES('".$id."','".$titulo."', '".$imgPublica."', '".$descricao."', '".$data."')";
}else{ return false;}

$link= conectar();
$inserido= executaSQL($SQL,$link);//$inserido terao valor "v" ou "f".
move_uploaded_file($tmp_imagem, 'upload/'.$imgPublica);
if($inserido==true){
	echo"<script> alert('Gravado com sucesso');</script>";
	echo"<script> window.location.href='tela_novidades.php'</script>";
	}else{
	echo"<script> alert('Erro ao gravar, tente novamente!');</script>";
	echo"<script> window.location.href='tela_novidades.php'</script>";
	}
?>