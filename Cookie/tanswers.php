<?php
	session_start();
	setcookie("q4", $_GET['q4']);

	$_SESSION['q1'] = $_COOKIE['q1'];
	$_SESSION['q2'] = $_COOKIE['q2'];
	$_SESSION['q3'] = $_COOKIE['q3'];
	$_SESSION['q4'] = $_COOKIE['q4'];


	header("location: ../index.php?lt=Cookie/answer");
?>