<?php
	include 'include/protecao.php';
	include '../conexao.php';
	
	
	$id = $_GET['id']; // Recebendo o valor enviado pelo link
	
	$sql = mysql_query("DELETE FROM tb_usuario WHERE id_usuario='".$id."'"); // A instrução delete irá apagar todos os dados da id recebida

	
	if ($sql) {
		echo "Registro excluído com sucesso";
		echo "<a href='site.php'> Clique aqui para voltar</a>";
	}
	mysql_close($conexao); 
?>
