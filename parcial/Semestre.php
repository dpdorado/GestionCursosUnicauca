<?php
    class Semestre{
        private $_semestre=1;
        private $_materias;

        //Contructor de la clase
        function __construct($_semestre){
            $this->_semestre = $_semestre;
            $this->_materias==new ArrayObject();
        }

        public function set_semestre($_semestre){
            $this->_semestre = $_semestre;
        }

        public function get_semestre(){
            return $this->_semestre;
        }

        public function get_materias(){
            return $this->_materias;
        }

        public function set_materias($_materias){
            foreach ($_materias as $valor)
                $this->_materias->append($valor);     
            //self::agregar_materia($valor);
        }

        /*public function agregar_materia($_materia){
            array_push($this->_materias, $_materia);
        }*/

    }
?>