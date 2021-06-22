<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php

	
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaAdmin']) ? $_POST['pesquisaAdmin'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='table table-hover'>";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th>Excluir</th>";
	$msg .="			<th>C&oacute;digo</th>";
	$msg .="			<th>Nome:</th>";
	$msg .="			<th>Usu&aacute;rio:</th>";
	$msg .="			<th>Senha:</th>";
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
				//requerimos a classe de conexão
				require_once('class/Conexao.class.php');
					try {
						$pdo = new Conexao(); 
						$resultado = $pdo->select("SELECT * FROM tb_funcionario WHERE nome LIKE '$parametro%' ORDER BY nome ASC");
						$pdo->desconectar();
								
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if(count($resultado)){
							foreach ($resultado as $res) {

	$msg .="				<tr>";
	$msg .="                    <td><a href='delete_funcionario.php?id=".$res['id']."'><img src='img/apagar.png'/></a></td>";
	$msg .="					<td>".$res['id']."</td>";
	$msg .="					<td>".$res['nome']."</td>";
	$msg .="					<td>".$res['usuario']."</td>";
	$msg .="					<td>".$res['senha']."</td>";
	$msg .="				</tr>";
							}	
						}else{
							$msg = "";
							$msg .="Nenhum resultado foi encontrado...";
						}
	$msg .="	</tbody>";
	$msg .="</table>";
	//retorna a msg concatenada
	echo $msg;
?>