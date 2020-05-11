<?php
	include 'config.php';
	include $GLOBALS["project_path"].'/Model/Connect.class.php';
	include $GLOBALS["project_path"].'/Model/Manager.class.php';
	include $GLOBALS["project_path"].'/Model/User.php';
	session_start();

	$manager = new Manager();

	if(isset($_SESSION['bloody_user']) && isset($_POST['l'])){
		$id1 = $_SESSION['bloody_user']->getId();
		$id2 = $_POST['l'];

		$manager->operation("INSERT INTO invites (id_desafiante, id_desafiado) VALUES(".$id1.", ".$id2.")");
	}
?>