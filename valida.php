<?php
// Inclui o arquivo com o sistema de segurança
require_once("seguranca.php");
// Verifica se um formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Salva duas variáveis com o que foi digitado no formulário
  // Detalhe: faz uma verificação com isset() pra saber se o campo foi preenchido
  $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
  $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
 
 
 
  // Utiliza uma função criada no seguranca.php pra validar os dados digitados
 // if (validaUsuario($usuario, $senha) == true) {
    // O usuário e a senha digitados foram validados, manda pra página interna
	
	$botao=$_POST['nivel'];
	
	/*echo $botao; --> Ta Funcionando!*/
	
	if ($botao=="administrador")
	{ 
	
		if (validaUsuario($usuario, $senha, 'tb_administrador') == true){
			header("Location: index_adm.php");}
			
				else {
					header("Location: login.html");}
	}
	else if($botao=="funcionario")
	{
		if (validaUsuario($usuario, $senha, 'tb_funcionario') == true){
			header("Location: index_func.php");}
			
				else {
					header("Location: login.html");}
//  } else {
    // O usuário e/ou a senha são inválidos, manda de volta pro form de login
    // Para alterar o endereço da página de login, verifique o arquivo seguranca.php
//    expulsaVisitante();
//  }
 	}
 
}
 
 
