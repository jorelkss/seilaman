<?php  

	include 'Model/Connect.class.php';
	include 'Model/Manager.class.php';

	$gerente = new Manager();

	$pessoal = $gerente->select("SELECT * FROM alunos_tb ORDER BY nota desc");
?>
	<table class="table table-hover">
		<thead>
			<tr class="table-light">
				<th style='border: 0.5px solid black'><b>Colocação</b></th>
				<th style='border: 0.5px solid black'><b>Nome</b></th>
				<th style='border: 0.5px solid black'><b>Nota</b></th>
			</tr>
		</thead>
		<tbody>
			<?php  
				$i = 1;
				foreach ($pessoal as $key => $value) {
					echo "<tr style='border: 0.5px solid black'>";
					echo "<td style='border: 0.5px solid black'>#".$i."</td>";
					echo "<td style='border: 0.5px solid black'>".$value['nome']."</td>";
					echo "<td style='border: 0.5px solid black'>".$value['nota']."</td>";
					echo "</tr>";
					$i++;
				}
			?>
		</tbody>
	</table>