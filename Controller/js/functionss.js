function enviar(l){
	var xhttp = new XMLHttpRequest();
	
	xhttp.open("POST", "Controller/enviar.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("l="+l);
}

function aceitar(l){
	var xhttp = new XMLHttpRequest();
	
	xhttp.open("POST", "Controller/aceitar.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("l="+l);
}

function loadGame(l){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		    document.getElementById("mydiv").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", l, true);
	//xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send();
}

function loadResult(){
	//var formData = document.getElementById("form");
	var data = $("form").serialize();
	var xhttp = new XMLHttpRequest();
	document.getElementById("mydiv").innerHTML = '<div id="check_result"><p>Waiting results...</p></div>';
	
	xhttp.open("POST", "result.php", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(data);
}