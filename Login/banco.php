<?php 

	class Banco {
		
		/* Atributos */
		protected $_host;
		protected $_user;
		protected $_senha;	
		protected $_banco;
		
		/* Construtor */
		public function __construct($host,$user,$senha,$banco) {
			$this->_host = $host;
			$this->_user = $user;
			$this->_senha = $senha;
			$this->_banco = $banco;
		} 
		
		/* Cria conexão com banco */
		public function conexao() {
			mysql_connect($this->_host,$this->_user,$this->_senha);
			mysql_select_db($this->_banco);
		}
                
                /*
                public function seila($usuario,$senha) {
                    $sql = "SELECT nome, senha FROM login WHERE nome='$usuario' AND senha='$senha'";
                    $resultado = mysql_query($sql);
                    if(mysql_num_rows($resultado) > 0) {
                        //return true;
                        echo "logado";
                    }
                    else {
                        //return false;
                        echo "nao logado";
                    }
		    
                }
                 
                 */
        }
?>