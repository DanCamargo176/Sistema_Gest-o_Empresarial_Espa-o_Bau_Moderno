<?php

include 'conexao.php';
include 'ExecutaSQL.php';


$link=conectar();
$id = $_GET['id']; // Recebendo o valor enviado pelo link
$cmdSQL="DELETE FROM tb_administrador WHERE id='".$id."';"; // A instrução delete irá apagar todos os dados da id recebida
/*echo $cmdSQL;*/

$resul=executaSQL($cmdSQL, $link);


if($resul){
echo "<script> alert('Registro excluído com sucesso!')</script>";
echo "<script>window.location.href='lista_admin.php'</script>";

}
	else{
		echo "<script> alert(Falha ao deletar. Não encontrado!')</script>";
		echo "<script>window.location.href='lista_admin.php'</script>";
		
		
		
}; /*Fim do ELSE*/
?>
