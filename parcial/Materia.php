<?php
    class Materia{
        private $nombre='';
        private $codigo='';
        private $creditos='1';
        private $estado=false;

        //Contructor de la clase
        function __construct($nombre,$codigo,$creditos,$estado) {
            $this->nombre = $nombre;
            $this->codigo = $codigo;
            $this->creditos = $creditos;
            $this->estado = $estado;
        }

        //Setters y Getters
        public function get_nombre(){
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
        public function get_semestre(){
            return $this->semestre;
        }
        public function set_creditos($creditos){
            $this->creditos = $creditos;
        }
        public function get_estado(){
            return $this->estado;
        }
        public function set_estado($estado){
            $this->estado = $estado;
        }

    }
?>