<?php
	session_start();

	include_once 'config.php';  
	include_once $GLOBALS["project_path"].'/Model/Connect.class.php';
	include_once $GLOBALS["project_path"].'/Model/Manager.class.php';
	include_once $GLOBALS["project_path"].'/Model/User.php';
	
	$val = $_POST;
	$data = new Manager();
	$dados = $data->select("SELECT * FROM user_tb"); // Carrega os usuarios
	
	foreach ($dados as $dat) {
		if($dat['nome'] == $val['nome']){ // Verifica se encontra um usuario com o nome
			if(password_verify($val['password'], $dat['password'])){ // Verifica se a senha está correta
				$user = new User($dat['user_id'], $dat['nome']);
				$_SESSION['bloody_user'] = $user; // Coloca os dados do usuário da sessão
				$data->operation("UPDATE user_tb SET status = 'online' WHERE user_id = ".$_SESSION['bloody_user']->getId());
				header("location: ".$GLOBALS['project_index']);
			}
		}
	}
	header("location: ".$GLOBALS['project_index']);
?>