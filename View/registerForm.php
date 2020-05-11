<?php  
	session_start();
	if(isset($_SESSION['bloody_user'])) header("location: index.php"); // verifica se a sessão já está iniciciada
?>

	
	<div class="container">
        <div class="row centered-form">
	        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
	        	<div class="panel panel-default">
	        		<div class="panel-heading">
				    	<h3 class="panel-title">Preencha os campos</h3>
				 	</div>
				 	<div class="panel-body">
			    		<form role="form" method="POST" action="Controller/register.php">
			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			                			<input type="text" name="nome" id="first_name" class="form-control input-sm" placeholder="Nome" required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-12 col-sm-12 col-md-12">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
			    					</div>
			    				</div>
				    		</div>
				    			
				    		<input type="submit" value="Registrar" class="btn btn-info btn-block">
				    		
				    	</form>
				    </div>
		    	</div>
	    	</div>
    	</div>
    </div>
	