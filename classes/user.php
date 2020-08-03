<?php
	
	class User {

		public function logar($login, $senha) {
			$pdo = new PDO("mysql:host=localhost;dbname=loja",'root','');
			$sql = $pdo->prepare("SELECT * FROM `usuario` WHERE email=? AND senha=?");
			$sql->execute(array($login, md5($senha)));
			if ($sql->rowCount() > 0){
				$dado = $sql->fetch();
				session_start();
				$_SESSION['id'] = $dado['id'];
				return true;
			}else{
				return false;
			}
		}

		public function cadastrar($nome, $fone, $endereco, $login, $senha){
			$pdo = new PDO("mysql:host=localhost;dbname=loja",'root','');
			$sql = $pdo->prepare("INSERT INTO `usuario` VALUES(null,?,?,?,?,?)");
			$sql->execute(array($nome, $fone, $endereco, $login, md5($senha)));
		}
	}
?>




