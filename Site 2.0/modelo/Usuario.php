<?php
class Usuario{

	public $id;
	public $nome;
	public $email;
	public $nivel;
	public $senha;
	public $dataNascimento;
	public $interesses;
	public $sexo;

	public function __construct($nome,$email,$senha,$dataNascimento,$sexo,$interesses,$nivel,$id=-1){
		$this->sexo = $sexo;
		$this->id= $id;
		$this->dataNascimento = $dataNascimento;
		$this->nome = $nome;
		$this->email = $email;
		$this->interesses= $interesses;
		$this->senha = $senha;
		$this->nivel =$nivel;
	}

	public function getNome(){
		return $this->nome;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getId(){
		return $this->id;
	}
	public function getNivel(){
		return $this->nivel;
	}
	public function getInteresses(){
		return $this->interesses;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function getDataNascimento(){
		return $this->dataNascimento;
	}
	public function __toString(){
		if($this->nivel==1){
			$nv="Administrador";
		}
		else{
			$nv="Usuario comum";
		}
		if ($this->sexo==1) {
			$sexo="Masculino";
		}
		if ($this->sexo==2) {
			$sexo="Feminino";
		}
		if ($this->sexo==3) {
			$sexo="Outro";
		}
		return "Nome: $this->nome\nEmail: $this->email\n
		Id: $this->id\n Nivel: $nv\n Sexo: $sexo\n Data de Nascimento: $this->dataNascimento";		
	}

}
?>