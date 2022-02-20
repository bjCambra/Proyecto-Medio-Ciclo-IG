<?php

include "connectionDB.php";

$ci = $_POST['CI'];
$nombres = $_POST['Nombre'];
$apellidos = $_POST['Apellido'];
$fecha_n = $_POST['Nacimiento'];
$genero = $_POST['lgenero'];
$disciplina = $_POST['Disciplina'];
$categoria = $_POST['lcategoria'];

 $insertar = "INSERT INTO estudiantes(CI, Nombres, Apellidos, Fecha_Nacimiento, Genero, Disciplina, Categoria)
   VALUES('$ci' , '$nombres', '$apellidos', '$fecha_n', '$genero', '$disciplina', '$categoria')";

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