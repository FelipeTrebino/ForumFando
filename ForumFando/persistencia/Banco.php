<?php
class Banco{
	const HOST = "localhost";
	const BANCO = "site";
	const USUARIO = "admin01";
	const SENHA = "admin01";
	const PORTA = "3306";

	public function bancoAdm(){
		
	}
	public function bancoVisitante(){
		
	}
	public function bancoUC(){
		$USUARIO = "usuarioComum";
		$SENHA = "1234" 	 	;
	}
	public function getUsuario(){
		return USUARIO;
	}
}
?>
