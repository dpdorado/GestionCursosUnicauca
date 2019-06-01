<?php

    class Estudiante{
        private $codigo="";
        private $semestres = null;
        
        //Contructor de la clase
        function __construct(int $codigo) {
            $this->codigo = $codigo;
        }

        //Setters y Getters
        public function get_codigo(){
            return $this->codigo;
        }
        public function set_codigo($codigo){
            $this->codigo = $codigo;
        }
        public function get_semestres(){
            return $this->semestres;
        }
        public function set_semestres($_semestres){
                $this->semestres=$_semestres;
        }
        /*public function agregar_semestre($semestre){
            array_push($this->semestres,$semestre);
        }*/

    }
    
?>
