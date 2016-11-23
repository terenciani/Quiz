<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Lista de Usuários</title>

<!--  Nucleo do jquery -->
<link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />

</head>
<body>
	<div class="container-fluid">


		<section class="container">
			<h1 id="admin">Listar Usuários</h1>
			<div class="thumbnail" id="conteudo">
				<form id="mainform" action="">
					<table width="100%" class="table-striped" id="product-table">
						<thead>
							<tr>
								
								<th>Nome</th>
								<th>Login</th>
							</tr>
						</thead>
						<tbody>
								<?php
								include 'include/protecao.php';
								include '../conexao.php';
								
								// Corrige a codificação
								mysql_query ( "SET NAMES 'utf8'" );
								mysql_query ( 'SET character_set_connection=utf8' );
								mysql_query ( 'SET character_set_client=utf8' );
								mysql_query ( 'SET character_set_results=utf8' );
								
								$sql = mysql_query ( "SELECT * FROM tb_usuario" );
								while ( $resultado = mysql_fetch_array ( $sql ) ) {
									$id_usuario = $resultado ['id_usuario'];
									$nome = $resultado ['nome'];
									$login = $resultado ['login'];
									
									
									echo "<tr>
												<td>" . $nome . "</td>
												<td>" . $login . "</td>
												<td>
													<a href='deletar-usuario.php?id=".$id_usuario."' id='link-delete' title='Deletar' class='glyphicon glyphicon-minus-sign options-delet' data-title='Exclusão'></a>
												</td>
											  </tr>";
								}
								
								?>
							</tbody>
					</table>
				</form>
			</div>
			<footer class="row footer">
				<a href="cadastro-usuario.php"> Clique aqui para cadastrar uma novo usuario</a>
				<br />
				<a href="site.php">Voltar para a página inicial</a>
				<br />	
			</footer>
		</section>
		

	</div>


</body>
</html>
