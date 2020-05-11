<?php
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';
	include 'Model/User.php'; 
	session_start();
	$manager = new Manager();
	$data = [];

	$_SESSION['q_time'] = time();

	if(isset($_SESSION['bloody_user']) && isset($_POST['l'])){
		$_SESSION['l'] = $_POST['l'];
		if(isset($_SESSION['bloody_condition'])){
			$data = $manager->select("SELECT * FROM game_tb WHERE status = 'playing' AND id_desafiado = ".$_SESSION['bloody_user']->getId()." AND id_desafiante = ".$_POST['l']);
		}else{
			$data = $manager->select("SELECT * FROM game_tb WHERE status = 'playing' AND id_desafiado = ".$_POST['l']." AND id_desafiante = ".$_SESSION['bloody_user']->getId());
		}
	}
	$_SESSION['letra_escolhida'] = $data[0]['letra_escolhida'];
	echo "A letra escolhida foi ".$data[0]['letra_escolhida'];

?>

<form id="form" method="post" onsubmit="loadResult()">
	<input type="text" name="fruta" placeholder="Digite sua fruta..." maxlength="50" autocomplete="off" required>
	<input type="text" name="objeto" placeholder="Digite seu Pokémon..." maxlength="50" autocomplete="off" required>
	<input type="submit" name="" value="Enviar" onclick="loadResult()">
</form>