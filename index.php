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
	<div class="section-login">
		<h1>Loja Gabriel Henrique</h1>
		<form method="POST">
			<h2>Faça seu login</h2>
			<div class="span">Login</div>
			<input type="email" name="login" placeholder="Seu e-mail" required>
			<div class="span">Senha</div>
			<input type="password" name="senha" placeholder="Sua senha" required>
			<input type="submit" name="logar" value="Logar">
			<p>Não possui cadastro? <a href="cadastro.php">Cadastre-se</a></p>
		</form>
	</div><!--section-login-->
	<?php
		if(isset($_POST['logar'])){
			$login = $_POST['login'];
			$senha = $_POST['senha'];
			$user->logar($login, $senha);
			if(!empty($login) && !empty($senha)){
				if($user->logar($login, $senha)){
					echo "Login feito com success";	
				}else{
					echo "Login e/ou senha inválidos";	
				}	
			}
		}
	?>

	<footer>
		<p>All rights reserved by Gabriel Hanrique</p>
	</footer>
</body>
</html>