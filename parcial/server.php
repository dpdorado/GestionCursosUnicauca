<?php
include("Servicios.php");

    if($_POST){
        if(isset($_POST["codigo"])){
            $codigo=$_POST["codigo"];
            $mensaje=Servicios::crear_json($codigo);
            return $mensaje;
        }
    }
?>