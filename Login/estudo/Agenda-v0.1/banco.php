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
		
		/* Gets */
		public function getHost() {
			return $this->_host;
		}
		
		public function getUser() {
			return $this->_user;
		}
		
		public function getBanco() {
			return $this->_banco;
		}
		
		/* Sets */
		//Em branco
		
		/* Cria conexão com banco */
		public function conexao() {
			mysql_connect($this->_host,$this->_user,$this->_senha);
			mysql_select_db($this->_banco);
		}
		
		/* selecionar tudo */
		public function select($coluna,$tabela,$id) {
			$sql = "select $coluna from $tabela $id";
			$resultado = mysql_query($sql);
			$retorno = array();
			if(mysql_num_rows($resultado)>0) {
				for($i=0;$i<mysql_num_rows($resultado);$i++) {
					$retorno[] = mysql_fetch_array($resultado);
				}
			}
			return $retorno; 
		}
		
		public function insert($tabela,$campos,$valores) {
			$sql = "Insert into $tabela ($campos) Values($valores)";
			mysql_query($sql);
		}
		
		public function delete($tabela,$id) {
			$sql = "Delete from $tabela where id=$id";
			mysql_query($sql);
		}
		
		public function update($tabela,$valores,$id) {
			$sql = "Update $tabela set $valores where id=$id";
			mysql_query($sql);
		}
		
	}//banco

?>