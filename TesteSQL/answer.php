<?php
	echo "Sua 1ª resposta foi ".$_SESSION['q1']."<br>";
	echo "Sua 2ª resposta foi ".$_SESSION['q2']."<br>";
	echo "Sua 3ª resposta foi ".$_SESSION['q3']."<br>";
	echo "Sua 4ª resposta foi ".$_SESSION['q4']."<br>";

	echo "Sua nota foi ".$_SESSION['nota'];

	/*include_once 'Model/Connect.class.php';
	include_once 'Model/Manager.class.php';

	$gerente = new Manager(); // piada horrível feita por alguém com o intelecto tão falho quanto o roteiro de JoJo
	try{
		$gerente->operation("INSERT INTO tb_alunos (nome, nota) VALUES('".$_SESSION['nome']."', ".$nota.")");
	} catch(PDOException $e){
		echo $e->getMessage();
	}*/
?>
<style type="text/css">
	.botao {
	    font-size: 1.5em;
	    background: #F90;
	    border: 0;
	    margin-bottom: 1em;
	    color: #FFF;
	    padding: 0.2em 0.6em;
	    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
	    text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
	}

	.botao:hover {
	    background: #FB0;
	    box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
	    text-shadow: none;
	}

	.botao, select, label.checkbox {
	    cursor: pointer;
	}
</style>
<br>
<br>
<a href="index.php" class="botao">Botão desgarrado para levá-lo de volta à página principal</a>