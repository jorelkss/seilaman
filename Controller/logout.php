<?php 
	include_once 'config.php';  
	include_once $GLOBALS["project_path"].'/Model/Connect.class.php';
	include_once $GLOBALS["project_path"].'/Model/Manager.class.php';
	include_once $GLOBALS["project_path"].'/Model/User.php';
	session_start();
	$gerente = new Manager();
	$gerente->operation("UPDATE user_tb SET status = 'offline' WHERE user_id = ".$_SESSION['bloody_user']->getId());
	
	session_unset();
	session_destroy();
	header("location: ".$GLOBALS['project_index']);

	//Finaliza a sessão
?>