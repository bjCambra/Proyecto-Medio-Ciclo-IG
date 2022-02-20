<?php

include "connectionDB.php";

$ci = $_POST['CI_Estudiante'];
$examinador_1 = $_POST['CI_Examinador1'];
$examinador_2 = $_POST['CI_Examinador2'];
$examinador_3= $_POST['CI_Examinador3'];
$calificacion = $_POST['Calificacion'];
$fecha = $_POST['Fecha_examen'];

 $insertar = "INSERT INTO examen(Fecha_Examen, ID_Evaluador_1, ID_Evaluador_2, ID_Evaluador_3, CI_Estudiante, Calificacion)
   VALUES('$fecha' , '$examinador_1', '$examinador_2', '$examinador_3', '$ci', '$calificacion')";

   $ejecutar = mysqli_query($conection, $insertar);

   if($ejecutar){
       echo ' 
              <script>
                 window.alert("Datos Registrados satisfactoriamente");
                 window.history.back();
                     
              </script>
            ';
   } else {
      echo '
              <script>
                 window.alert("Error al insertar los Datos");
                 window.history.back();
               </script>
               ';
   }

 ?>