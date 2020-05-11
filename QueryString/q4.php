<!DOCTYPE html>
<html>
<head>
	<title>Q4</title>
</head>
<body>
	<label for="Lista">Quanto é 2+3?</label>
	<ol>
		<li><a href="index.php?lt=QueryString/answer&q1=<?=$_GET['q1']?>&q2=<?=$_GET['q2']?>&q3=<?=$_GET['q3']?>&q4=Dois">Dois</a></li>
		<li><a href="index.php?lt=QueryString/answer&q1=<?=$_GET['q1']?>&q2=<?=$_GET['q2']?>&q3=<?=$_GET['q3']?>&q4=Três">Três</a></li>
		<li><a href="index.php?lt=QueryString/answer&q1=<?=$_GET['q1']?>&q2=<?=$_GET['q2']?>&q3=<?=$_GET['q3']?>&q4=Quatro">Quatro</a></li>
		<li><a href="index.php?lt=QueryString/answer&q1=<?=$_GET['q1']?>&q2=<?=$_GET['q2']?>&q3=<?=$_GET['q3']?>&q4=Cinco">Cinco</a></li>
	</ol>
</body>
</html>