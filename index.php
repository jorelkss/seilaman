<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	session_start();

	$ar = ["Pedro Marinho da Silva"=>"https://testehairon2019.000webhostapp.com/","Thales da Silva Santos"=>"http://thaleshome.000webhostapp.com/","José Vitor Pantoja Travassos"=>"https://haironnight.000webhostapp.com/","Larissa Rayane"=>"https://lari12anos.000webhostapp.com/","Wesley Barbosa"=>"https://lws181918.000webhostapp.com/","Ingrid Queiroz"=>"https://indigrinada.000webhostapp.com/","Marilia Holanda"=>"https://abc125.000webhostapp.com/","Lais Bastos"=>"https://passeipweb.000webhostapp.com/","Otávio Albuquerque"=>"https://testesiteotavio.000webhostapp.com/","Gabriel Luan Alves Valentim"=>"https://konobirbda.000webhostapp.com/","Sabrina Beatriz Oliveira"=>"http://sabeatr.000webhostapp.com/","Davi Lima Saraiva"=>"http://eguapoo.000webhostapp.com/","Ana Clara"=>"https://end000.000webhostapp.com/","Rodrigo Silva Ribeiro"=>"https://eu-programo-em-java.000webhostapp.com/","Marcelino"=>"https://ednaldohome.000webhostapp.com/ed/ednaldo","Larissa Araújo"=>"https://diosmio.000webhostapp.com/","Gabriela Almeida"=>"https://bombomdecafe.000webhostapp.com/","Vanessa Pereira"=>"https://vanessa20161.000webhostapp.com/sitevan.html","Mainara Lima"=>"https://vaidarcerto.000webhostapp.com/vdc.html","Emirton Sousa"=>"https://testepweb.000webhostapp.com/","André Lucas"=>"https://testea01.000webhostapp.com/"];

	include 'ArchiveOperator.php';
	$archiveOperator = new ArchiveOperator();
	if(isset($_SESSION['user']) && isset($_POST['arname']) && isset($_POST['arcontent'])){
		$archiveOperator->saveArchives($_POST['arname'], $_POST['arcontent']);
	}
	$lt = $archiveOperator->loadArchives();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php 
		if(!isset($_SESSION['user']) && isset($_POST['pss'])){
			if(password_verify($_POST['pss'], '$2y$10$KsnFZ5wtd5eMIE.S7cGLvuA82gjLMs24jhaYBRW5RWE2RUlbA74AC')){
				$_SESSION['user'] = "ok";
			} else{
				//echo '<link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">';
			}
		}
    ?>
    <link rel="stylesheet" href="View/style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function loadUsers(url){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if(this.responseText != document.getElementById("online_users").innerHTML){
                        document.getElementById("online_users").innerHTML = this.responseText;
                        //document.getElementById("mydiv").innerText = this.responseText + "\n" + document.getElementById("online_users").innerHTML;
                    }
                }
            };
            xhttp.open("POST", url, true);
            xhttp.send();
        }

    	$(document).ready(function(){
			//$('#online_users').load('Controller/ver.php');
			var RefreshId = setInterval(function(){
				loadUsers("Controller/ver.php");
			}, 500);
			$.ajaxSetup({cache:false});
		});

		$(document).ready(function(){
			$('#check_result').load('check_result.php');
			var refreshId = setInterval(function(){
				$("#check_result").load('check_result.php');
			}, 500);
			$.ajaxSetup({cache:false});
		});

		function loadDoc(url) {
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("mydiv").innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("POST", "loadDoc.php", true);
		  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		  xhttp.send("loadingDoc=" + url);
		}

		function verifyName(name){
			if(name.length == 0){
				document.getElementById("nameInp").innerHTML = "";
				return;
			}else{
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if (this.readyState == 4 && this.status == 200) {
						if(this.responseText == 1){
							document.getElementById("nameInp").innerHTML = "Nome já cadastrado";
						}else{
							document.getElementById("nameInp").innerHTML = "Nome disponível";
						}
					}
				};
				xmlhttp.open("POST", "verifyName.php", true);
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send("namae=" + name);
			}	
		}
        function enviar(l){
        	var xhttp = new XMLHttpRequest();
        	
        	xhttp.open("POST", "Controller/enviar.php", true);
        	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        	xhttp.send("l="+l);
        }

        function resolver(l, res){
        	var xhttp = new XMLHttpRequest();
        	
        	xhttp.open("POST", "Controller/resolver.php", true);
        	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        	xhttp.send("l="+l+"&res="+res);
        }
        
        function loadGame(l){
        	var xhttp = new XMLHttpRequest();
        	xhttp.onreadystatechange = function() {
        		if (this.readyState == 4 && this.status == 200) {
        		    document.getElementById("mydiv").innerHTML = this.responseText;
        		}
        	};
        	xhttp.open("POST", "game.php", true);
        	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        	xhttp.send("l="+l);
        }
        
        function loadResult(){
        	//var formData = document.getElementById("form");
        	var data = $("form").serialize();
        	var xhttp = new XMLHttpRequest();
        	document.getElementById("mydiv").innerHTML = "<div id='check_result'><p>Waiting results...</p></div>";
        	
        	xhttp.open("POST", "result.php", true);
        	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        	xhttp.send(data);
        }
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	    <a href="#" class="navbar-brand" id="sidebarCollapse">seilaman</a>
	    <!--<?php if(!isset($_SESSION['user'])){ ?>
	    <div class="collapse navbar-collapse shake-horizontal shake-constant shake-constant--hover" id="navbarCollapse">
	        <form class="form-inline ml-auto" method="POST" action="">
	            <input type="password" class="form-control mr-sm-2" placeholder="" name="pss">
	            <button type="submit" class="btn btn-outline-light">Somente pessoal autorizado</button>
	        </form>
	    </div>
	    <?php } else{ ?>
	    <div class="collapse navbar-collapse">
	    	<a href="logout.php" class="btn btn-outline-light ml-auto">LogOut</a>
	    </div>
	    <?php } ?>-->
	</nav>

	<div class="wrapper">
		<nav id="sidebar">
			<div class="sidebar-header"><h4 class="text-center"><img src="https://media1.giphy.com/media/Euws8BLSqUDgA/200.webp?cid=790b7611da5f892f7aa78cc5c87b13202d3986051512c3d0&rid=200.webp"></h4></div>
			<ul class="list-unstyled components">
				<li>
					<a href="#usersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Adedonha</a>
					<ul class="collapse list-unstyled" id="usersSubmenu">
					<?php if(!isset($_SESSION['bloody_user'])){ ?>
						<li><a onclick="loadDoc('View/loginForm.php')" href="#">Login</a></li>
						<li><a onclick="loadDoc('View/registerForm.php')" href="#">Registro</a></li>
					<?php }else{ ?>
						<li><a href="Controller/logout.php">LogOut</a></li>
						<li id="online_users">
							
						</li>
					<?php } ?>
					</ul>
				</li>
				<li>
					<a href="#siteSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Viste outros sites</a>
					<ul class="collapse list-unstyled" id="siteSubmenu">
						<?php foreach ($ar as $key => $value) { ?>
							<li><a href="<?=$value?>"><?=$key?></a></li>
						<?php } ?>
					</ul>
				</li>
				<li>
					<a href="#antSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Verificar atividades</a>
					<ul class="collapse list-unstyled" id="antSubmenu">
                        <li><a href="http://cotse.epizy.com">Estoque Genérico</a></li>
						<?php foreach ($lt as $key => $value) { ?>
							<li><a href="index.php?lt=<?=$value?>"><?=$value?></a></li>
						<?php } ?>
						<li><a onclick="loadDoc('QueryString/q1.php')">QueryString</a></li>
						<li><a onclick='loadDoc("Cookie/q1.php")'>Cookie</a></li>
						<li><a onclick='loadDoc("Session/q1.php")'>Session</a></li>
						<li><a onclick='loadDoc("TesteSQL/storeName.php")'>TesteSQL</a></li>
						<li><a onclick='loadDoc("TesteSQL/lista.php")'>Rank?</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="content" class="container">
			<br>
			<?php if (isset($_GET['lt'])){ 
				echo "<div id='mydiv'>";
					include_once $_GET['lt'].'.php';
				echo "</div>";	
			} elseif(!isset($_SESSION['user'])){ ?>
	        	<p>Você pode olhar as atividades e os sites do pessoal da sala na barra ao lado.</p>
	        	<div id="mydiv">
					<!--<iframe id="frame" src="" width="100%" height="490"></iframe>-->
					<!--<script id="frame" src=""></script>-->
				</div>
	        <?php } else{ ?>
	        	<!--<form action="" method="POST">
	        		<div class="form-group">
					    <input type="text" class="form-control" name="arname" placeholder="Nome do arquivo">
					</div>
					<div class="form-group">
					    <textarea class="form-control" name="arcontent" rows="15" placeholder="Escreva o código aqui..."></textarea>
					</div>
					<button type="submit" class="btn btn-outline-dark">Enviar</button>
	        	</form>-->
	        <?php } ?>
	    </div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="View/test.js"></script>
</body>
</html>