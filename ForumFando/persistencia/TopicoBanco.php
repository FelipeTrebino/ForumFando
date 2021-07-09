<?php

require_once($_SERVER['DOCUMENT_ROOT'].
	"/modelo/Topico.php");
require_once($_SERVER['DOCUMENT_ROOT'].
	"/persistencia/Banco.php");

class TopicoBanco{
	public static function cadastrar($obj){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);

		$sql="insert into Topico(titulo,texto,categoria,id_autor,fixo) 
		values(:titulo,:texto,:categoria,:id_autor,:fixo)";

		$acao = $banco->prepare($sql);

		$paramentros = array(":titulo"=>$obj->titulo,":texto"=>$obj->texto,":categoria"=>$obj->categoria,":id_autor"=>$obj->idAutor,":fixo"=>0);
		

		return $acao->execute($paramentros);
	}
	public static function todos(){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "select * from topico";
		
		$acao = $banco->prepare($sql);

		$acao->execute();

		$retorno = array();

		while($obj = $acao->fetchObject()){
			$retorno[] = 
			new Topico($obj->titulo,$obj->texto,$obj->categoria,$obj->id_autor,$obj->fixo,$obj->id);
		}
		return $retorno;
		
	}
	public static function procurarPorCategoria($categoria){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "select * from topico where categoria = :categoria";
		
		$acao = $banco->prepare($sql);

		$paramentros = array(":categoria"=>$categoria);

		$obj = $acao->execute($paramentros);

		$retorno = array();

		while($obj = $acao->fetchObject()){
			$retorno[] = 
			new Topico($obj->titulo,$obj->texto,$obj->categoria,$obj->id_autor,$obj->fixo,$obj->id);
		}
		return $retorno;

	}
	public static function procurarPorCriador($id){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "select * from topico where id_autor = :id";
		
		$acao = $banco->prepare($sql);

		$paramentros = array(":id"=>$id);

		$obj = $acao->execute($paramentros);

		$retorno = array();

		while($obj = $acao->fetchObject()){
			$retorno[] = 
			new Topico($obj->titulo,$obj->texto,$obj->categoria,$obj->id_autor,$obj->fixo,$obj->id);
		}
		return $retorno;
	}

	public static function excluir($id){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "delete from topico where id = $id";
		
		$acao = $banco->prepare($sql);

		return $acao->execute();
	}
	public static function banir($id){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "delete from topico where id_autor = $id";
		
		$acao = $banco->prepare($sql);

		return $acao->execute();
	}
	public static function procurarPorId($id){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "select * from topico where id = :id";
		
		$acao = $banco->prepare($sql);

		$paramentros = array(":id"=>$id);

		$obj = $acao->execute($paramentros);

		while($obj = $acao->fetchObject()){
			return
			new Topico($obj->titulo,$obj->texto,$obj->categoria,$obj->id_autor,$obj->fixo,$obj->id);
		}
		return null;
	}
	public static function procurarPorTitulo($titulo){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "select * from topico where titulo like '%$titulo%'";
		
		$acao = $banco->prepare($sql);

		//$paramentros = array(":titulo"=>$titulo);

		$obj = $acao->execute();

		$retorno = array();

		while($obj = $acao->fetchObject()){
			$retorno[] = 
			new Topico($obj->titulo,$obj->texto,$obj->categoria,$obj->id_autor,$obj->fixo,$obj->id);
		}
		return $retorno;
	}

	public static function fixar($id){

		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "update topico set fixo = 1 where id = $id";
		
		$acao = $banco->prepare($sql);

		$paramentros = array();

		return $acao->execute($paramentros);
	}
	public static function tirarfixar($id){

		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "update topico set fixo = 0 where id = $id";
		
		$acao = $banco->prepare($sql);

		$paramentros = array();

		return $acao->execute($paramentros);
	}
	public static function editar($id,$texto,$titulo){

		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "update topico set titulo = :titulo,texto = :texto where id = $id";
		
		$acao = $banco->prepare($sql);

		$paramentros = array(":titulo"=>$titulo,":texto"=>$texto);

		return $acao->execute($paramentros);
	}
	public static function todosfixos(){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);
		
		$sql = "select * from topico where fixo = '1';";
		
		$acao = $banco->prepare($sql);

		$acao->execute();

		$retorno = array();

		while($obj = $acao->fetchObject()){
			$retorno[] = 
			new Topico($obj->titulo,$obj->texto,$obj->categoria,$obj->id_autor,$obj->fixo,$obj->id);
		}
		return $retorno;
		
	}


} 
?>