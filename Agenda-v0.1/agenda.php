<?php

class Agenda {
	
	protected $_banco;
	
	public function __construct(Banco $banco) {
		$this->_banco = $banco;
	}
	
	public function listar($id) {
		return $this->_banco->select('*','agenda',$id);
	}
	
	
	public function inserir ($nome,$sobrenome,$email,$telefone,$celular) {
		$campos = 'nome, sobrenome, email, telefone, celular';
		$valores = "'$nome','$sobrenome','$email','$telefone','$celular'";
		return $this->_banco->insert('agenda',$campos,$valores);
	}
	
	public function apagar($id) {
		return $this->_banco->delete('agenda',$id);
	}
	
	public function editar ($id,$nome,$sobrenome,$email,$telefone,$celular) {
		$valores = "nome='$nome',sobrenome='$sobrenome',email='$email',telefone='$telefone',celular='$celular'";
		return $this->_banco->update('agenda',$valores,$id);
	}
	
	
	
}//agenda


?>