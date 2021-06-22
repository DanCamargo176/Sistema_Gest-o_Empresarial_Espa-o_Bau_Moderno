<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php

	
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaForn']) ? $_POST['pesquisaForn'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='table table-hover'>";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th>C&oacute;digo:</th>";
	$msg .="			<th>Nome:</th>";
	$msg .="			<th>CNPJ:</th>";
	$msg .="			<th>Inscri&ccedil;&atilde;o<br>Estadual:</th>";
	$msg .="			<th>Endere&ccedil;o:</th>";
	$msg .="			<th>CEP:</th>";
	$msg .="			<th>Bairro:</th>";
	$msg .="			<th>Cidade:</th>";
	$msg .="			<th>Estado:</th>";
	$msg .="			<th>Contato:</th>";
	$msg .="			<th>E-mail:</th>";
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
				//requerimos a classe de conexão
				require_once('class/Conexao.class.php');
					try {
						$pdo = new Conexao(); 
						$resultado = $pdo->select("SELECT * FROM tb_fornecedor WHERE nome LIKE '$parametro%'");
						$pdo->desconectar();
								
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if(count($resultado)){
							foreach ($resultado as $res) {

	$msg .="				<tr>";
	$msg .="					<td>".$res['id']."</td>";
	$msg .="					<td>".$res['nome']."</td>";
	$msg .="					<td>".$res['cnpj']."</td>";
	$msg .="					<td>".$res['i_e']."</td>";
	$msg .="					<td>".$res['endereco']."</td>";
	$msg .="					<td>".$res['cep']."</td>";
	$msg .="					<td>".$res['bairro']."</td>";
	$msg .="					<td>".$res['cidade']."</td>";
	$msg .="					<td>".$res['estado']."</td>";
	$msg .="					<td>".$res['contato']."</td>";
	$msg .="					<td>".$res['email']."</td>";
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