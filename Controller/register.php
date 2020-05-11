<?php 
	include_once 'config.php';  
	include_once $GLOBALS["project_path"].'/Model/Connect.class.php';
	include_once $GLOBALS["project_path"].'/Model/Manager.class.php';

	//Recebe os valores e os insere no banco de dados
	$val = $_POST;
	$nome = strip_tags($val['nome']);
	$data = new Manager();
	try {
		$data->operation("INSERT INTO user_tb (nome, password, status) VALUES ('".$nome."','".password_hash($val['password'], PASSWORD_DEFAULT)."', 'offline')");
		header("location: ".$GLOBALS['project_index']);
	} catch (PDOException $e) {
		header("location: ".$GLOBALS['project_index']."/registerForm.php?script=nop");
	}
?>