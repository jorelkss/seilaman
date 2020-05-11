<?php
	include 'config.php';
	include $GLOBALS["project_path"].'/Model/Connect.class.php';
	include $GLOBALS["project_path"].'/Model/Manager.class.php';
	include $GLOBALS["project_path"].'/Model/User.php';
	session_start();
	date_default_timezone_get('America/Sao_Paulo');

    $$response = "";

	$manager = new Manager();

	if(isset($_SESSION['bloody_user'])){
		//$nomec = $_SESSION['bloody_user']->getNome();

		$linha = $manager->select("SELECT * FROM invites, user_tb WHERE id_desafiado = ".$_SESSION['bloody_user']->getId()." AND id_desafiante = user_tb.user_id");

		$challenged = $manager->select("SELECT * FROM `user_tb`, `invites` WHERE status = 'online' AND id_desafiante = ".$_SESSION['bloody_user']->getId()." AND user_id != id_desafiante");

		$avl_users = $manager->select('SELECT * FROM user_tb WHERE user_tb.status = "online" AND user_tb.user_id != '.$_SESSION['bloody_user']->getId());

		$games = [];

		if(isset($_SESSION['bloody_condition'])){
			$games = $manager->select("SELECT * FROM game_tb, user_tb WHERE game_tb.status = 'playing' AND id_desafiado = ".$_SESSION['bloody_user']->getId()." AND id_desafiante = user_id");
		}else{
			$games = $manager->select("SELECT * FROM game_tb, user_tb WHERE game_tb.status = 'playing' AND id_desafiante = ".$_SESSION['bloody_user']->getId()." AND id_desafiado = user_id");
		}


		$non_available_users = [];
		if ($challenged) {
			foreach ($challenged as $key => $value) {
				$non_available_users[$key] = $value['user_id'];
			}
		}
		//$response .= "<p>Seja bem-vindo ".$nomec.", se beber não use o chat</p><br>";
		if($linha){
			$response .= '<a href="#waitingSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Waiting</a>';
			$response .= '<ul class="list-unstyled" id="waitingSubmenu">';
			foreach ($linha as $key => $value) {
				$nome = $value['nome'];
				$non_available_users[$key] = $value['user_id'];
				$response .= '<li><a href="#"><i class="fa fa-check" onclick="resolver('.$value['user_id'].', 1)"></i>  '.$nome.'   <i class="fa fa-times" onclick="resolver('.$value['user_id'].', 0)"></i></a></li>';
			}
			$response .= "</ul>";
		}

		if($games){
			$response .= '<a href="#playingSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Playing with...</a>';
			$response .= '<ul class="list-unstyled" id="playingSubmenu">';
			foreach ($games as $key => $value) {
				$nome = $value['nome'];
				$non_available_users[$key] = $value['user_id'];
				$response .= '<li><a onclick="loadGame('.$value['user_id'].')" href="#">'.$nome.'</a></li>';
			}
			$response .= "</ul>";
		}

		if($avl_users){
			//$response .= "Disponivel";
			$response .= '<a href="#onlineSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Online</a>';
			$response .= '<ul class="list-unstyled" id="onlineSubmenu">';
			foreach ($avl_users as $key => $value) {
				$nome = $value['nome'];
				$user_id = $value['user_id'];
				if(!in_array($user_id, $non_available_users)) $response .= '<li onclick="enviar('.$value['user_id'].')"><a href="#">'.$nome.'</a></li>';
			}
			$response .= "</ul>";
		}
	}

    echo $response;
?>