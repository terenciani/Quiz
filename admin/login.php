<?php 
	// session_start inicia a sessão
	session_start();
	// as variáveis login e senha recebem os dados digitados na página anterior
	$login = $_POST['login'];
	// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
	$camposenha = md5($_POST['senha']);
	include '../conexao.php';

	$sql = "SELECT * FROM tb_usuario WHERE login = '$login' AND senha = '$camposenha'";

	// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
	$result = mysql_query($sql) or die("erro ao selecionar");
      /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
	
	if (mysql_errno()) {
		$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n$sql\n<br>";
		echo $error;
	} 

	if(mysql_num_rows ($result) > 0 )
	{
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $camposenha;
		header('location:site.php');
	}
	else{
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		header('location:index.html');
		
	}

?>