<?php
include("Materia.php");
include("Estudiante.php");
    class Servicios{
        function crear_json($codigo){
            $archivo_codigo = './Estudiantes/'.$codigo.'.json'; 
            
            if (file_exists('/Estudiantes')){
                return '<div><h1>Contacte con el administrador.</h1</div>';
            }
            //return '<div><h1>'.htmlspecialchars($archivo_codigo).'</h1</div>';
            if (!file_exists($archivo_codigo)){
                //crear el archivo json
                $estudiante = self::crear_estudiante_defecto();
                $materias=self::convertir_estudiante_json($estudiante);
                file_put_contents($archivo_codigo,$materias);
            }
            $datos_estudiante=file_get_contents($archivo_codigo);
            $json_estudiante=json_decode($datos_estudiante,true);
            return self::obtener_code_html($json_estudiante,$codigo);
        }
        function convertir_estudiante_json($estudiante){
            $materias=json_encode($estudiante);
            return $materias;
        }
        /*function convertir_json_estudiante($archivo_codigo){
            $datos_estudiante=file_get_constents($archivo_codigo);
            $json_estudiante=json_decode($datos_estudiante,true);
            return $json_estudiante;
        }*/
        function crear_estudiante_defecto(){
             //Agregando materias
             //Semestre #1
             $materia_1=new Materia('Itroducción a la Informatica', '1001','4','1',false);
             $materia_2=new Materia('Lba de Introduccón a la Informatica', '1002','1','1',false);
             $materia_3=new Materia('Cálculo I', '1003','4','1',false);
             $materia_4=new Materia('Electiva FiSH I','1004','2','1',false);
             $materia_5=new Materia('Lectoescritua', '1005','2','1',false);
             $materia_6=new Materia('Itroducción a la Ingeniería', '1006','2','1',false);
            
             //Semestre #2
             $materia_7=new Materia('Porgramación Orientada a Objetos', '1007','4','2',false);
             $materia_8=new Materia('lba de Programación Orientada a Objetos', '1008','1','2',false);
             $materia_9=new Materia('Cálculo II', '1009','4','2',false);
             $materia_10=new Materia('Mecánica', '1010','2','4',false);
             $materia_11=new Materia('lba de Mecánica', '1011','1','2',false);
             $materia_12=new Materia('Algebra Lineal', '1012','3','2',false);
             
            //Semestre 3
             $materia_13=new Materia('Estructuras de Datos I', '1013','4','3',false);
             $materia_14=new Materia('lba Estructuras de Datos I', '1014','1','3',false);
             $materia_15=new Materia('Cálculo III', '1015','4','3',false);
             $materia_16=new Materia('Electromagnetismo', '1016','4','3',false);
             $materia_17=new Materia('lba de Electromagnetism', '1017','1','3',false);
             $materia_18=new Materia('Ingles I', '1018','3','3',false);
             
            //Semestre 4
             $materia_19=new Materia('Estructura de Datos II', '1019','4','4',false);
             $materia_20=new Materia('Lba Estructura de Datos II', '1020','1','4',false);
             $materia_21=new Materia('Ecuaciones Diferenciales', '1021','4','4',false);
             $materia_22=new Materia('Vibraciones y Ondas', '1022','4','4',false);
             $materia_23=new Materia('Bases de Datos I', '1023','1','4',false);
             $materia_24=new Materia('Lba Bases de Datos I', '1024','3','4',false);
              //semestre 5
              $materia_25=new Materia('Analisis numerica', '1025','4','5',false);
              $materia_26=new Materia('Teoría de la Computación', '1026','1','5',false);
              $materia_27=new Materia('Arquitectura Computacional ', '1027','4','5',false);
              $materia_28=new Materia('Bases de Datos II', '1016','1','28',false);
              $materia_29=new Materia('Laboratorio de Bases de Datos II', '1029','1','5',false);
             //semestre 6
              $materia_30=new Materia('Estadística y Probabilidad ', '1030','4','6',false);
              $materia_31=new Materia('Estructuras de Lenguajes', '1031','3','6',false);
              $materia_32=new Materia('Laboratorio de Estructuras de Lenguajes', '1032','1','6',false);
              $materia_33=new Materia('Ingeniería de Software II', '1033','4','6',false);
              $materia_34=new Materia('Laboratorio de Ingeniería de Software II', '1034','3','6',false);
              $materia_35=new Materia('Sistemas Operativos ', '1035','3','6',false);
              $materia_36=new Materia('Laboratorio de Sistemas Operativos ', '1036','1','6',false);
             //semestre 7
             $materia_37=new Materia('Metodología de la Investigación ', '1037','3','7',false);
             $materia_38=new Materia('Inteligencias Artificial', '1038','3','7',false);
             $materia_39=new Materia('Teoría Dinámica de Sistemas', '1039','3','7',false);
             $materia_40=new Materia('Sistemas Distribuidos', '1040','3','7',false);
             $materia_41=new Materia('Laboratorio de Sistemas Distribuidos', '1041','1','7',false);
             $materia_42=new Materia('Ingeniería de Software III ', '1042','3','7',false);
             $materia_43=new Materia(' Laboratorio de Ingeniería de Software III ', '1043','3','7',false);
             //semestre 8
             $materia_44=new Materia('Redes','1044','4','8',false);
             $materia_45=new Materia('Investigación de Operaciones', '1045','4','8',false);
             $materia_46=new Materia('Proyecto I', '1046','3','8',false);
             $materia_47=new Materia('Calidad de Software', '1047','3','8',false);
             $materia_48=new Materia(' Electiva I ', '1048','3','8',false);
             $materia_49=new Materia('Electiva II', '1049','3','8',false);
             //semestre 9
             $materia_50=new Materia('Gestión empresarial','1050','3','9',false);
             $materia_51=new Materia('Gestión de Proyectos Informáticos', '1051','3','9',false);
             $materia_52=new Materia('Proyecto II', '1052','3','9',false);
             $materia_53=new Materia('Fundamentos de Economía ', '1053','3','9',false);
             $materia_54=new Materia('Electiva III', '1054','3','9',false);
             $materia_55=new Materia(' Electiva IV ','1055','3','9',false);
             //semestre 10
             $materia_56=new Materia('Legislación Laboral','1056','1','10',false);
             $materia_57=new Materia('Trabajo de Grado ', '1057','14','10',false);
             $materia_58=new Materia('Electiva V', '1058','3','10',false);
           
 
              
              $materias_=[$materia_1,$materia_2,$materia_3,$materia_4,$materia_5,$materia_6,$materia_7,$materia_8,$materia_9,$materia_10,$materia_11,$materia_12,$materia_13,$materia_14,$materia_15,$materia_16,$materia_17,$materia_18,$materia_19,$materia_20,$materia_21,$materia_22,$materia_23,$materia_24,
              $materia_25,$materia_26,$materia_27,$materia_28,$materia_29,$materia_30,$materia_31,$materia_32,$materia_33,$materia_34,$materia_35,$materia_36,
              $materia_37,$materia_38,$materia_39,$materia_40,$materia_41,$materia_42,$materia_43,$materia_44,$materia_45,$materia_46,$materia_47,$materia_48,
              $materia_49,$materia_50,$materia_51,$materia_52,$materia_53,$materia_54,$materia_55,$materia_56,$materia_57,$materia_58
             ];            
             $estudiante=new Estudiante();
             $estudiante->materias=$materias_;
             return $estudiante;
        }
        function obtener_code_html($estudiante,$codigo){
            $estudiante1=$estudiante['materias'];
            $div_contenedor='<div class="container">';
            
            for ($i = 1; $i <= 10; $i++) {
                $semestre=self::armar_semestre((string)$i, $estudiante1,$codigo);
                $div_contenedor=$div_contenedor.$semestre;
            }
            $div_contenedor=$div_contenedor."</div>";
            return $div_contenedor;
        }
        function armar_semestre($num_semestre, $estudiante1,$codigo){
            $count=0;
            $div_p='<br><div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Semestre '.htmlspecialchars($num_semestre).'</h5>
                            <div  class="card-tex t">
                                <table class="table table table-border table-hover">
                                    <tr class="thead-dark">
                                        <th>Nombre</th>
                                        <th>Codigo</th> 
                                        <th>Creditos</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>';
            foreach($estudiante1 as $valor){
                //acomodar id, darle un mejor nombre al button
                if (strcmp($num_semestre, $valor['semestre'])==0){
                    $estilo= $valor['estado']?'<strike>Terminada</strike>':'Sin Terminar';
                    $estilobutton= $valor['estado']?'class="btn btn-danger':'class="btn btn-primary';
                    $div_p=$div_p.'<tr id= "_'.$codigo.'_'.$valor['codigo'].'">
                                    <td>'.$valor['nombre'].'</td>
                                    <td>'.$valor['codigo'].'</td>
                                    <td>'.$valor['creditos'].'</td>
                                    <td class="text-secondary">'.$estilo.'</td>
                                    <td><button id="'.$codigo.'_'.$valor['codigo'].'"onclick="cambiar_estado_materia(this)" type="button" ' .$estilobutton. ' btn-lg active">Cambiar estado</button></td>
                                    </tr>';
                    $count=1;
                }
            }
            $div_p=$div_p.' </table>
                        </div>
                    </div>
                </div><br>';
            if ($count==1){
                return $div_p;
            }else{
                return '';
            }
        }
        function cambiar_estado_materia($id_codigo){
            $ids = explode("_", $id_codigo);
            $dir='./Estudiantes/'.$ids[0].'.json';
            if (file_exists($dir)){
                
                $datos_estudiante=file_get_contents($dir);
                $json_estudiante=json_decode($datos_estudiante,true);
                
                self::cambiar_estado($json_estudiante,$ids,$dir);
                $datos_estudiante=file_get_contents($dir);
                $json_estudiante=json_decode($datos_estudiante,true);
                $estudiante1=$json_estudiante['materias'];
                
                foreach($estudiante1 as $valor){
                    //acomodar id, darle un mejor nombre al button
                    if (strcmp($ids[1], $valor['codigo'])==0){
                        $html='';
                        $estilo= $valor['estado']?'<strike>Terminada</strike>':'Sin Terminar';
                        $estilobutton= $valor['estado']?'class="btn btn-danger':'class="btn btn-primary';
                        $html=$html.'<tr id= "_'.$ids[0].'_'.$valor['codigo'].'">
                                        <td>'.$valor['nombre'].'</td>
                                        <td>'.$valor['codigo'].'</td>
                                        <td>'.$valor['creditos'].'</td>
                                        <td class="text-secondary">'.$estilo.'</td>
                                        <td><button id="'.$ids[0].'_'.$valor['codigo'].'"onclick="cambiar_estado_materia(this)" type="button"  ' .$estilobutton. ' btn-lg active">Cambiar estado</button></td>
                                        </tr>';
                        return $html;
                    }
                }
            }
         
            return 'Contacte con el administrador.';
        }
        function cambiar_estado($json_estudiante,$ids,$dir){
            $estudiante1=$json_estudiante['materias'];
            $count=0;
            for ($x=0;$x<count($estudiante1);$x++){
                if (strcmp($ids[1], $estudiante1[$x]['codigo'])==0){
                    $aux=$estudiante1[$x]['estado']?false:true;
                    $estudiante1[$x]['estado']=$aux;
                    break; 
                }   
            }
            $array_new=array('materias'=>$estudiante1);
            $json_new=json_encode($array_new);
            file_put_contents($dir,$json_new);
        }
        function cambio($s){
            if ($s){
                $s=false;
            }else{
                $s=true;
            }
        }
       
    }
?>