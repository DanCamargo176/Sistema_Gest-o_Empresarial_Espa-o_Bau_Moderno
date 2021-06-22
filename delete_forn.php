<?php

include 'conexao.php';
include 'Executasql.php';


$link=conectar();
$CODIGO = $_GET['id']; // Recebendo o valor enviado pelo link
$cmdSQL="DELETE FROM tb_fornecedor WHERE id=".$CODIGO.";"; // A instrução delete irá apagar todos os dados da id recebida
$resul=executaSQL($cmdSQL, $link);


if($resul){
echo "<script> alert('Registro excluído com sucesso!')</script>";
echo "<script>window.location.href='lista_forn.php'</script>";

}
	else{
		echo "<script> alert(Falha ao deletar. Não encontrado!')</script>";
		echo "<script>window.location.href='lista_forn.php'</script>";
		
		
		
}; /*Fim do ELSE*/
?>
