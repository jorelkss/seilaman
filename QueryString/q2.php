<!DOCTYPE html>
<html>
<head>
	<title>Q2</title>
</head>
<body>
	<label for="Lista">Quanto é 2+2?</label>
	<ol>
		<li><a href="index.php?lt=QueryString/q3&q1=<?=$_GET['q1']?>&q2=Dois">Dois</a></li>
		<li><a href="index.php?lt=QueryString/q3&q1=<?=$_GET['q1']?>&q2=Três">Três</a></li>
		<li><a href="index.php?lt=QueryString/q3&q1=<?=$_GET['q1']?>&q2=Quatro">Quatro</a></li>
		<li><a href="index.php?lt=QueryString/q3&q1=<?=$_GET['q1']?>&q2=Cinco">Cinco</a></li>
	</ol>
</body>
</html>