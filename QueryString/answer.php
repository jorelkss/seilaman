<?php  
	echo "Sua 1ª resposta foi ".$_GET['q1']."<br>";
	echo "Sua 2ª resposta foi ".$_GET['q2']."<br>";
	echo "Sua 3ª resposta foi ".$_GET['q3']."<br>";
	echo "Sua 4ª resposta foi ".$_GET['q4']."<br>";

	$nota = 0;

	if($_GET["q1"] == "Dois") $nota += 2.5;
	if($_GET["q2"] == "Quatro") $nota += 2.5;
	if($_GET["q3"] == "Três") $nota += 2.5;
	if($_GET["q4"] == "Cinco") $nota += 2.5;

	echo "Sua nota foi ".$nota;

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