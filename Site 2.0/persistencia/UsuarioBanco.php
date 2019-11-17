<?php
require_once($_SERVER['DOCUMENT_ROOT'].
	"/modelo/Usuario.php");
require_once($_SERVER['DOCUMENT_ROOT'].
	"/persistencia/Banco.php");

class UsuarioBanco /*implements Persistente*/{
	
	public static function cadastrar($obj){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);

		$sql="insert into Usuario(nome,email,senha,sexo,dataNascimento,nivel,interesses) 
		values(:nome,:email,sha2(:senha,512),:sexo,:data,:nivel,:interesses)";

		$acao = $banco->prepare($sql);

		//echo "$obj->dataNascimento";

		$paramentros = array(":nome"=>$obj->nome,":email"=>$obj->email,":senha"=>$obj->senha,":sexo"=>$obj->sexo,":data"=>$obj->dataNascimento,":nivel"=>$obj->nivel,":interesses"=>$obj->interesses);
		
		//print_r($acao->errorInfo());

		return $acao->execute($paramentros);
	}
		
		
	public static function validar($email,$senha){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);

        $sql = "select * from usuario where email= :email and senha= sha2(:senha,512); ";

    	$paramentros = array(":email"=>$email,":senha"=>$senha);

    	$acao = $banco->prepare($sql);

        $obj = $acao->execute($paramentros);

        if( $obj = $acao->fetchObject()){
            return new Usuario($obj->nome,$obj->email,$obj->senha,$obj->dataNascimento,$obj->sexo,$obj->interesses,$obj->nivel,$obj->id);
        }
            
            return Null;
    }
    public static function todos(){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);

		$sql = "select * from usuario";
		
		$acao = $banco->prepare($sql);

		$acao->execute();

		$retorno = array();

		while($obj = $acao->fetchObject()){
			
			$user = new 
			Usuario($obj->nome,$obj->email,$obj->senha,$obj->dataNascimento,$obj->sexo,$obj->interesses,$obj->nivel);
			$user->id=$obj->id;
			$retorno[] = $user;
		}
		return $retorno;
	}

	public static function procurarPorId($id){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);

		$sql = "select * from usuario where id =:id";

		$paramentros = array(":id"=>$id);
		
		$acao = $banco->prepare($sql);

		$acao->execute($paramentros);

		if( $obj = $acao->fetchObject()){
            return new Usuario($obj->nome,$obj->email,$obj->senha,$obj->dataNascimento,$obj->sexo,$obj->interesses,$obj->id);
        }      
            return Null;
	}

	public static function TransformaADM($id){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);

		$sql = "update usuario set nivel = 1 where id =:id";

		$paramentros = array(":id"=>$id);
		
		$acao = $banco->prepare($sql);

		$acao->execute($paramentros);

	}

	public static function banir($id){
		$url = "mysql:host=".Banco::HOST.";dbname=".Banco::BANCO.";port=".Banco::PORTA;

		$banco = new PDO($url,Banco::USUARIO,Banco::SENHA);

		$sql = "delete from usuario where id =:id";

		$paramentros = array(":id"=>$id);
		
		$acao = $banco->prepare($sql);

		$acao->execute($paramentros);

	}

}

?>


