<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
?>
<?php

	
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='table table-hover'>";
	$msg .="	<thead>";
	$msg .="		<tr>";
	$msg .="			<th>C&oacute;digo</th>";
	$msg .="			<th>Nome:</th>";
	$msg .="			<th>E-mail:</th>";
	$msg .="			<th>Data de Nascimento:</th>";
	$msg .="			<th>CPF:</th>";
	$msg .="			<th>RG:</th>";
	$msg .="			<th>Telefone:</th>";
	$msg .="			<th>Endere&ccedil;o:</th>";
	$msg .="			<th>N&deg;:</th>";
	$msg .="			<th>CEP:</th>";
	$msg .="			<th>Cidade:</th>";
	$msg .="			<th>Estado:</th>";
	$msg .="			<th>Observa&ccedil;&atilde;o:</th>";
	$msg .="			<th>VIP:</th>";
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
				//requerimos a classe de conexão
				require_once('class/Conexao.class.php');
					try {
						$pdo = new Conexao(); 
						$resultado = $pdo->select("SELECT * FROM tb_clientes WHERE nome LIKE '$parametro%' ORDER BY nome ASC");
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
	$msg .="					<td>".$res['email']."</td>";
	$msg .="					<td>".$res['data_nasc']."</td>";
	$msg .="					<td>".$res['cpf']."</td>";
	$msg .="					<td>".$res['rg']."</td>";
	$msg .="					<td>".$res['tel']."</td>";
	$msg .="					<td>".$res['endereco']."</td>";
	$msg .="					<td>".$res['numero']."</td>";
	$msg .="					<td>".$res['cep']."</td>";
	$msg .="					<td>".$res['cidade']."</td>";
	$msg .="					<td>".$res['estado']."</td>";	
	$msg .="					<td>".$res['obs']."</td>";
	$msg .="					<td>".$res['vip']."</td>";



	
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