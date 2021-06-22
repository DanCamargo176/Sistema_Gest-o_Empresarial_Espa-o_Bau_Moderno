<?php
include "conexao.php";
include "Executasql.php";


$codigo=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$data_nasc=$_POST['data_nasc'];
$CPF=$_POST['cpf'];
$RG=$_POST['rg'];
$tel=$_POST['tel'];
$endereco=$_POST['endereco'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$cep=$_POST['cep'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$obs=$_POST['obs'];
$vip=$_POST['vip'];





$botao=$_POST['Cadastrar'];
	if ($botao=="Cadastrar")
	{ 
			$SQL="INSERT INTO tb_clientes VALUES('".$codigo."','".$nome."','".$email."','".$data_nasc."','".$CPF."','".$RG."','".$tel."','".$endereco."', '".$numero."', '".$bairro."', '".$cep."', '".$cidade."', '".$estado."', '".$obs."','".$vip."')";
	}
	else if($botao=="Atualizar")
	{
			$SQL="UPDATE tb_clientes SET nome='".$nome."', email='".$email."', data_nasc='".$data_nasc."', cpf='".$CPF."', rg='".$RG."', tel='".$tel."', endereco='".$endereco."', numero='".$numero."', bairro='".$bairro."', cep='".$cep."', cidade='".$cidade."', estado='".$estado."', obs='".$obs."', vip='".$vip."' WHERE id=".$codigo.";";
	}

/*echo $SQL;*/
$link=conectar();
$inserido = executasql($SQL, $link);//$inserido terá o valor "V" ou "F"
				if($inserido==true){
					echo "<script> alert ('Dados Gravados com Sucesso!'); </script>";
					echo "<script> window.location.href='tela_cliente.php'</script>";
				   }
				else{
					echo "<script> alert ('Erro ao gravar os dados!'); </script>";
					echo "<script> window.location.href='cad_cli.php'</script>";
					}
?>