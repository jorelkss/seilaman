<?php  

	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';

	try {
		$gerente = new Manager();

		$pessoal = $gerente->select("SELECT nome FROM alunos_tb WHERE nome = '".$_POST['namae']."'");

		if ($pessoal[0]['nome']) {
			echo '1';
		} else{
			echo '0';
		}
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	

?>