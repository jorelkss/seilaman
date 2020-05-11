<!DOCTYPE html>
<html>
<head>
	<title>Q3</title>
</head>
<body>
	<label for="Lista">Quanto é 2+1?</label>
	<ol>
		<li><a href="index.php?lt=QueryString/q4&q1=<?=$_GET['q1']?>&q2=<?=$_GET['q2']?>&q3=Dois">Dois</a></li>
		<li><a href="index.php?lt=QueryString/q4&q1=<?=$_GET['q1']?>&q2=<?=$_GET['q2']?>&q3=Três">Três</a></li>
		<li><a href="index.php?lt=QueryString/q4&q1=<?=$_GET['q1']?>&q2=<?=$_GET['q2']?>&q3=Quatro">Quatro</a></li>
		<li><a href="index.php?lt=QueryString/q4&q1=<?=$_GET['q1']?>&q2=<?=$_GET['q2']?>&q3=Cinco">Cinco</a></li>
	</ol>
</body>
</html>