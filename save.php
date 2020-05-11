<?php
    session_start();
    //error_reporting(0);
	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';
	$_SESSION['q4'] = $_GET['q4'];
	$nota = 0;
	if($_SESSION["q1"] == "Dois") $nota += 2.5;
	if($_SESSION["q2"] == "Quatro") $nota += 2.5;
	if($_SESSION["q3"] == "Três") $nota += 2.5;
	if($_SESSION["q4"] == "Cinco") $nota += 2.5;
    $_SESSION['nota'] = $nota;
    //echo $_SESSION['nome'];
    $gerente = new Manager(); // piada horrível feita por alguém com o intelecto tão falho quanto o roteiro de JoJo
    $gerente->operation('INSERT INTO alunos_tb (nome, nota) VALUES("'.$_SESSION['nome'].'", '.$nota.')');
    header('location: index.php?lt=TesteSQL/answer');
?>