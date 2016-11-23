<html lang="pt-br">
<head>
	
	
	
  
<meta charset="utf-8">
<title>Lista de Questões</title>

<!--  Nucleo do jquery -->
<link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>
	<div class="container-fluid">
		<section class="container">
			
			<?php
				include 'include/protecao.php';
				echo" Bem vindo $logado";
			?>
				
			<a href='listar-questoes.php'> Clique aqui para gerenciar questões</a>
			<br />
			<a href='listar-usuario.php'> Clique aqui para gerenciar usuários</a>
			<br />
			<a href="logout.php">Sair</a>
			<br />	
			
		</section>
		

	</div>


</body>
</html>