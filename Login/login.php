<?php 
	
	class Login {
		
		protected $_banco;
		
		
		
		public function __construct(Banco $banco) {
			$this->_banco = $banco;
                }
                
                public function seila($usuario,$senha) {
                    $sql = "SELECT nome, senha FROM login WHERE nome='$usuario' AND senha='$senha'";
                    $resultado = mysql_query($sql);
                    if(mysql_num_rows($resultado) > 0) {
                        //return true;
                        //header("Location:http://www.google.com");
                        echo "logado";
                    }
                    else {
                        //return false;
                        echo "nao logado";
                    }
		    
                }

	
	}//login





?>