<?php  

	include 'config.php';
	include $GLOBALS["project_path"].'/Model/Connect.class.php';
	include $GLOBALS["project_path"].'/Model/Manager.class.php';
	include $GLOBALS["project_path"].'/Model/User.php';
	session_start();
	date_default_timezone_get('America/Sao_Paulo');

	$manager = new Manager();

	if(isset($_SESSION['bloody_user']) && isset($_POST['l']) && isset($_POST['res'])){
		$id1 = $_SESSION['bloody_user']->getId();
		$id2 = $_POST['l'];

		if ($_POST['res'] == 1) {
			$alfabeto = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
			$_SESSION['bloody_condition'] = "desafiado";
			
			$manager->operation("INSERT INTO game_tb (letra_escolhida, status, id_desafiante, id_desafiado) VALUES('".$alfabeto[rand(0, 25)]."', 'playing', ".$id2.", ".$id1.")");
			$manager->operation("DELETE FROM invites WHERE id_desafiante = ".$id2." AND id_desafiado = ".$id1);
		}else{
			$manager->operation("DELETE FROM invites WHERE id_desafiante = ".$id2." AND id_desafiado = ".$id1);
		}
	}

?>