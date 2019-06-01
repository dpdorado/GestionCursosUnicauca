<?php
    class Materia{
        public $nombre='';
        public $codigo='';
        public $creditos='1';
        public $estado=false;
        public $semestre='1';

        //Contructor de la clase
        function __construct($nombre,$codigo,$creditos,$semestre,$estado) {
            $this->nombre = $nombre;
            $this->codigo = $codigo;
            $this->creditos = $creditos;
            $this->estado = $estado;
            $this->semestre=$semestre;
        }

        //Setters y Getters
        /*public function get_nombre(){
            return $this->nombre;
        }
        public  function set_nombre($nombre){
            $this->nombre = $nombre;
        }
        public function get_codigo(){
            return $this->codigo;
        }
        public function set_codigo($codigo){
            $this->codigo = $codigo;
        }
        public function set_creditos($creditos){
            $this->creditos = $creditos;
        }
        public function get_estado(){
            return $this->estado;
        }
        public function set_semestre($semestre){
            $this->semestre = $semestre;
        }
        public function get_semestre(){
            return $this->semestre;
        }
        public function set_estado($estado){
            $this->estado = $estado;
        }*/

    }
?>