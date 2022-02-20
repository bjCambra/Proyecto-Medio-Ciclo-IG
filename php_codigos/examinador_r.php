<?php

include "connectionDB.php";

$ci = $_POST['CI_Examinador'];
$nombres = $_POST['Nombre'];
$apellidos = $_POST['Apellido'];

 $insertar = "INSERT INTO evaluadores(CI, E_Nombres, E_Apellidos)
   VALUES('$ci' , '$nombres', '$apellidos')";

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