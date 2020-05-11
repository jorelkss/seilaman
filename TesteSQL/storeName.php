<!DOCTYPE html>
<html>
<head>
	<title>Guardar o nome </title>
</head>
<body>
	<form action="gambiarra.php" method="POST">
		<p><span id="nameInp"></span></p>
		<input type="text" name="nome" required onkeyup="verifyName(this.value)">
		<input type="submit" name="">
	</form>
	
</body>
</html>