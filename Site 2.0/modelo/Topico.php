<?php 
	class Topico{
		public $id;
		public $titulo;
		public $texto;
		public $categoria;
		public $idAutor;
        public $fixo;

		public function __construct($titulo, $texto, $categoria, $idAutor,$fixo,$id=-1) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->texto = $texto;
            $this->categoria = $categoria;
            $this->idAutor = $idAutor;
            $this->fixo=$fixo;
        }   

        public function isFixo(){
            if ($this->fixo==1) {
                return true;
            }
            return false;
        }

		public function getId() {
            return $this->id;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function getTexto() {
            return $this->texto;
        }

        public function getCategoria() {
             return $this->categoria;
        }

        public function getIdAutor() {
            return $this->idAutor;
        }
	}
?>