<?php
include("Materia.php");
include("Estudiante.php");
include("Semestre.php");
    class Servicios{

        function crear_json($codigo){
            $archivo_codigo = '/Estudiantes/'.$codigo.'.json'; 
            
            if (file_exists('/Estudiantes')){
                return '<div><h1>Contacte con el administrador.</h1</div>';
            }
            //return '<div><h1>'.htmlspecialchars($archivo_codigo).'</h1</div>';
            if (!file_exists($archivo_codigo)){
                //crear el archivo json
                //return '<div><h1>Contacte con el daniel.</h1</div>';
                

                $materias_defecto = self::crear_estudiante_defecto($codigo);
                $json_string=json_encode($materias_defecto);
                file_put_contents($archivo_codigo,$json_string);
                return '<div><h1>ccccccc'.htmlspecialchars($archivo_codigo).'</h1</div>';
            }
            //return '<div><h1>'.htmlspecialchars($archivo_codigo).'</h1</div>';

            

            //Leemos el JSON
            $datos_estudiante=file_get_constents($archivo_codigo);
            $json_estudiante=json_decode($datos_estudiante,true);

            return self::obtener_code_html($json_estudiante);
        }
       
        function crear_estudiante_defecto($codigo){
             //Agregando materias
             //Semestre #1
             $materia_1=new Materia('Itroducción a la Informatica', '1001','4',false);
             $materia_2=new Materia('Lba de Introduccón a la Informatica', '1002','1',false);
             $materia_3=new Materia('Cálculo I', '1003','4',false);
             $materia_4=new Materia('Electiva FiSH I','1004','2',false);
             $materia_5=new Materia('Lectoescritua', '1005','2',false);
             $materia_6=new Materia('Itroducción a la Ingeniería', '1006','2',false);
             
             $materias_1=[$materia_1,$materia_2,$materia_3,$materia_4,$materia_5,$materia_6];
             //Semestre #2
             $materia_7=new Materia('Porgramación Orientada a Objetos', '1007','4',false);
             $materia_8=new Materia('lba de Programación Orientada a Objetos', '1008','1',false);
             $materia_9=new Materia('Cálculo II', '1009','4',false);
             $materia_10=new Materia('Electromagnetismo', '1010','4',false);
             $materia_11=new Materia('lba de Electromagnetismo', '1011','1',false);
             $materia_12=new Materia('Algebra Lineal', '1012','3',false);
             $materias_2=[$materia_7,$materia_8,$materia_9,$materia_10,$materia_11,$materia_12];
            //Semestre 3
             $materia_13=new Materia('Porgramación Orientada a Objetos', '1007','4',false);
             $materia_14=new Materia('lba de Programación Orientada a Objetos', '1008','1',false);
             $materia_15=new Materia('Cálculo II', '1009','4',false);
             $materia_16=new Materia('Electromagnetismo', '1010','4',false);
             $materia_17=new Materia('lba de Electromagnetism', '1011','1',false);
             $materia_18=new Materia('Algebra Lineal', '1012','3',false);
             $materias_3=[$materia_13,$materia_14,$materia_15,$materia_16,$materia_17,$materia_18];
            //Semestre 4
             $materia_19=new Materia('Porgramación Orientada a Objetos', '1007','4',false);
             $materia_20=new Materia('lba de Programación Orientada a Objetos', '1008','1',false);
             $materia_21=new Materia('Cálculo II', '1009','4',false);
             $materia_22=new Materia('Electromagnetismo', '1010','4',false);
             $materia_23=new Materia('lba de Electromagnetismo', '1011','1',false);
             $materia_24=new Materia('Algebra Lineal', '1012','3',false);
             $materias_4=[$materia_19,$materia_20,$materia_21,$materia_22,$materia_23,$materia_24];
             
             $semestre_1=new Semestre(1);
             $semestre_1::set_materias($materias_1);
             $semestre_2=new Semestre(2);
             $semestre_2::set_materias($materias_2);
             $semestre_3=new Semestre(3);
             $semestre_3::set_materias($materias_3);
             $semestre_4=new Semestre(4);
             $semestre_4::set_materias($materias_4);
             
             $semestres=[$semestre_1,$semestre_2,$semestre_3,$semestre_4];
    
             $estudiante=new Estudiante($codigos);
             $estudiante::set_semestres($semestres);
             return $estudiante;
        }
        function obtener_code_html($estudiante){
            $html='';
            $html='<div id="informacion" class="container">
               <h1>'.htmlspecialchars($estudiante.get_codigo()).'</h1>
            </div>';
            return $html;
        }
    }
?>