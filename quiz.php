<!DOCTYPE html>
<html>
<head>
	<title>Matriz</title>
</head>
<body>
	<form method="POST">
        <label for="">1- Quanto é 1 + 1? </label> <br>
        <input type="radio" value="0" name="q1" required> 3
        <input type="radio" value="2.5" name="q1" required> 2
        <input type="radio" value="0" name="q1" required> 5
        <input type="radio" value="0" name="q1" required> 6 <br>


        <label for="">2- Quanto é 2 X 1?</label> <br>
        <input type="radio" value="2.5" name="q2" required> 2
        <input type="radio" value="0" name="q2" required> 9
        <input type="radio" value="0" name="q2" required> 3
        <input type="radio" value="0" name="q2" required> 1 <br>

        <label for="">3- Qual foi a resposta das 2 questões anteriores?</label> <br>
        <input type="radio" value="0" name="q3" required> 35
        <input type="radio" value="2.5" name="q3" required > 2 <br>
        
        <label for="">4- Digite o número que serviu de resposta para as questões anteriores?</label> <br>
        <input type="number" placeholder="" name="q4" required>

        <input type="submit" name="subm">
    </form>


	<br>
	<br>

	<?php  
		if(isset($_POST['q1'])){
			$nota = $_POST['q1'] + $_POST['q2'] + $_POST['q3'];
			if($_POST['q4'] == 2){
				$nota += 2.5;
			}
			echo $nota;
		}

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
</body>
</html>