<?php  

	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';
	include 'Model/User.php'; 
	session_start();

	$manager = new Manager();
	$data = [];

	if(isset($_SESSION['bloody_user']) && isset($_SESSION['game'])){
		$data = $manager->select("SELECT nome, p_desafiante FROM user_tb, game_tb WHERE game_tb.game_id = ".$_SESSION['game']." AND user_tb.user_id = game_tb.id_desafiante");
		$desafiante = ["nome" => $data[0]['nome'], "pontos" => $data[0]['p_desafiante']];
		$data = $manager->select("SELECT nome, p_desafiado FROM user_tb, game_tb WHERE game_tb.game_id = ".$_SESSION['game']." AND user_tb.user_id = game_tb.id_desafiado");
		$desafiado = ["nome" => $data[0]['nome'], "pontos" => $data[0]['p_desafiado']];

		if($desafiante['pontos'] > $desafiado['pontos']){
			echo "<p>1º lugar: ".$desafiante['nome']." com ".$desafiante['pontos']." pontos</p>";
			echo "<p>2º lugar: ".$desafiado['nome']." com ".$desafiado['pontos']." pontos</p>";
		}else{
			echo "<p>1º lugar: ".$desafiado['nome']." com ".$desafiado['pontos']." pontos</p>";
			echo "<p>2º lugar: ".$desafiante['nome']." com ".$desafiante['pontos']." pontos</p>";
		}

	}



?>