<?php

    class Estudiante{
<<<<<<< HEAD
        private $codigo="";
        private $semestres = null;
        
        //Contructor de la clase
        function __construct(int $codigo) {
            $this->codigo = $codigo;
=======
        public $materias=[];
        
        //Contructor de la clase
        function __construct() {
>>>>>>> 3735d1d1801264af52f5c19e2f45847bf132ab17
        }

        /*public function get_materias(){
            return $this->materias;
        }
        public function set_materias($materias){
                $this->materias=$materias;
        }*/
        /*public function agregar_semestre($semestre){
            array_push($this->semestres,$semestre);
        }*/

    }
    
?>
