<?php
	require_once('classes/user.php');
	$user = new User;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/style.css">
	<title>Loja Gabriel Henrique</title>
</head>
<body>
	<div class="section-cadastro">
		<h1>Loja Gabriel Henrique</h1>
		<form method="POST" class="form-cadastro">
			<h2>Faça seu cadastro</h2>
			<div class="span">Nome*</div>
			<input type="text" name="nome" required>
			<div class="span">fone*</div>
			<input type="text" name="fone" required>
			<div class="span">Endereço*</div>
			<input type="text" name="adress" required>
			<div class="span">E-mail*</div>
			<input type="email" name="email" required>
			<div class="span">Senha*</div>
			<input type="password" name="senha" required>
			<div class="span">Confirmar senha*</div>
			<input type="password" name="confSenha" required>
			<input type="submit" name="cadastro" value="Cadastrar">
		</form>
	</div><!--section-cadastro-->
	<?php
		if(isset($_POST['cadastro'])){
			$nome = $_POST['nome'];
			$fone = $_POST['fone'];
			$endereco = $_POST['adress'];
			$login = $_POST['email'];
			$senha = $_POST['senha'];
			$confSenha = $_POST['confSenha'];
			if(!empty($nome) && !empty($fone) && !empty($endereco) && !empty($login) && !empty($senha) && !empty($confSenha)){
				if ($senha == $confSenha){
					if($user->cadastrar($nome, $fone, $endereco, $login, $senha)){
						
					}else{
						echo "Dados cadastrados com sucesso";
					}
				}else{
					echo "Senha e senhe confirmada não correspondem";
				}
			}else{
				echo "Preencha todos os campos";
			}
		}
	?>

	<footer>
		<p>All rights reserved by Gabriel Hanrique</p>
	</footer>
</body>
</html>



