<?php
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';
	include 'Model/User.php'; 
	session_start();
	if(isset($_SESSION['bloody_user'])){
		$perca = time() - $_SESSION['q_time'];
		$pontuacao = 0;

		$manager = new Manager();

		$data = $manager->select("SELECT * FROM palavras WHERE categoria = 'fruta' AND palavra LIKE '".$_SESSION['letra_escolhida']."%'");
		foreach ($data as $key => $value) {
			if($value['palavra'] == strtoupper($_POST['fruta'])){
				$pontuacao += 250;
				break;
			}
		}

		$data = $manager->select("SELECT * FROM palavras WHERE categoria = 'pokemon' AND palavra LIKE '".$_SESSION['letra_escolhida']."%'");
		foreach ($data as $key => $value) {
			if($value['palavra'] == strtoupper($_POST['objeto'])){
				$pontuacao += 250;
				break;
			}
		}

		$pontuacao -= $perca;
		//echo $pontuacao;

	
		if(isset($_SESSION['bloody_condition'])){
			unset($_SESSION['bloody_condition']);
			$data = $manager->select("SELECT * FROM game_tb WHERE status = 'playing' AND id_desafiado = ".$_SESSION['bloody_user']->getId()." AND id_desafiante = ".$_SESSION['l']);
			if($data[0]['status_desafiante'] == 'ok'){
				$manager->operation("UPDATE game_tb SET status = 'finished', status_desafiado = 'ok', p_desafiado = ".$pontuacao." WHERE game_id = ".$data[0]['game_id']);
			}else{
				$manager->operation("UPDATE game_tb SET status_desafiado = 'ok', p_desafiado = ".$pontuacao." WHERE game_id = ".$data[0]['game_id']);
			}
		}else{
			$data = $manager->select("SELECT * FROM game_tb WHERE status = 'playing' AND id_desafiado = ".$_SESSION['l']." AND id_desafiante = ".$_SESSION['bloody_user']->getId());
			if($data[0]['status_desafiado'] == 'ok'){
				$manager->operation("UPDATE game_tb SET status = 'finished', status_desafiante = 'ok', p_desafiante = ".$pontuacao." WHERE game_id = ".$data[0]['game_id']);
			}else{
				$manager->operation("UPDATE game_tb SET status_desafiante = 'ok', p_desafiante = ".$pontuacao." WHERE game_id = ".$data[0]['game_id']);
			}
		}
	}

	$_SESSION['game'] = $data[0]['game_id'];
	//header("location: check_result.php?game=".$data[0]['game_id']);
	//echo '';
?>