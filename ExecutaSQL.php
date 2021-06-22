<?php
function executaSQL($cmdSQL, $link){
	if(empty($cmdSQL) or !($link)){     //verifica se tem cmd SQL ou se tem conexão c/ BD.
		return 0;
	}elseif(!($result=mysqli_query($link, $cmdSQL))){   //executa o cmd SQL no BD.
		
		echo "<script> alert('Erro ao executar dados. \\n
		     Por favor avise o responsável') </script>";    //aviso caso conexão não consiga executar cmd SQL
		exit;
		
	}
	return $result;     //devolve o resultado do cmd SQL
}


?>