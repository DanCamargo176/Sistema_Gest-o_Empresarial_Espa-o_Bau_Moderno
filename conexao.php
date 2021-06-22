<?php

function conectar(){//a function faz conectar o banco de dados 
	$caminhodb='localhost';//local onde esta o banco de dados
	$nomebd='DB_BAUMODERNO';
	$usuariobd='root';//usuario do banco 
	$senhabd='';//senha do usiario
	
	if($cnx=(mysqli_connect($caminhodb, $usuariobd, $senhabd) )){//abriu o if para conectar os elementos do banco para cada usuario com o caminho em que esta o banco, o seu usuario e sua senha
		mysqli_select_db($cnx, $nomebd) or die ("<script> alert('Erro ao selecionar Banco de Dados!') </script>");
		mysqli_query($cnx, "SET NAMES 'utf8'");
		mysqli_query($cnx, 'caracter_set_conection=utf8');
		mysqli_query($cnx, 'caracter_set_client=utf8');
		mysqli_query($cnx, 'caracter_set_results=utf8');
		return $cnx;
	}else
	{
		return 0;
	}
}

?>