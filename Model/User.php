<?php
	class User{
		private $id_usuario;
		private $nome = "";

		function __construct($id_usuario, $nome){
			$this->id_usuario = $id_usuario;
			$this->nome = $nome;
		}

		public function getId(){
			return $this->id_usuario;
		}

	    public function getNome() {
	        return $this->nome;
	    }

	    public function setNome($nome) {
	        $this->nome = $nome;
	    }
	}
?>