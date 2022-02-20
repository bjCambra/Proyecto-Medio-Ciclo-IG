<?php

include "connectionDB.php";

$ci = $_POST['CI'];
$descripcion = $_POST['descripcion'];
$emisor = $_POST['emisor'];
$expedicion = $_POST['emision'];
$expiracion = $_POST['expiracion'];

 $insertar = "INSERT INTO certificados_medicos(Descripcion_Certificado, Institucion_Emisora, Fecha_Expedicion, Fecha_Expiracion, CI_Estudiante)
   VALUES('$descripcion', '$emisor', '$expedicion', '$expiracion', '$ci')";

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