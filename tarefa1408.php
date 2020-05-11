<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
	<table style="border: 1px solid black">
		<?php  
			for ($i = 1; $i <= 5; $i++) {
				echo "<tr style='border: 1px solid black'>";
				for ($j = 1; $j <= 5; $j++) {
					echo "<td style='border: 1px solid black'>$i$j</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
	<br>
	<table style="border: 1px solid black">
		<?php  
			for ($i = 1; $i <= 5; $i++) {
				echo "<tr style='border: 1px solid black'>";
				for ($j = 1; $j <= 5; $j++) {
					echo "<td style='border: 1px solid black'>a<sub>$i$j</sub></td>";
				}
				echo "</tr>";
			}
		?>
	</table>

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
</body>
</html>