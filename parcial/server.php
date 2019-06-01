<?php
include("Servicios.php");

    if($_POST){
        if(isset($_POST["codigo"])){
            $codigo=$_POST["codigo"];
            $mensaje=Servicios::crear_json($codigo);
            echo $mensaje;
        }

        if(isset($_POST["id_codigo"])){
            $id_codigo=$_POST["id_codigo"];
            $mensaje=Servicios::cambiar_estado_materia($id_codigo);
            echo $mensaje;
        } 
    }
?>