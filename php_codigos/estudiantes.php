
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Estudiante</title>
    <link rel="stylesheet" href="../assets/CSS_resorces/CSS_files/paginas_styles.css">
</head>
<body>
<div class="header">
<?php
include '../php_interfaces/header.php'?>
</div>


<div class="contenedor_all">
    <div class="contenedor_php">
    <?php
                           include 'connectionDB.php';

                           $id=$_POST['CI'];
                           $coincidencia = mysqli_query($conection,"SELECT * FROM estudiantes WHERE CI ='$id'");
                           if($coincidencia){
                               while($row=$coincidencia->fetch_array()){
                                   $ci = $row['CI'];
                                   $nombres = $row['Nombres'];
                                   $apellidos = $row['Apellidos'];
                                   $fecha_n = $row['Fecha_Nacimiento'];
                                   $genero = $row['Genero'];
                                   $disciplina = $row['Disciplina'];
                                   $categoria = $row['Categoria'];
                               }
                           }
                

                        ?>
    </div>

    <div class="contendedor_tabla">

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">CI</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Genero</th>
                <th scope="col">Disciplina</th>
                <th scope="col">Categoria</th>
                
            </tr>
        </thead>
        <tbody id="datos">
            <?php
               
               foreach($coincidencia as $row){ ?>
               <tr>
                 <td><?php echo $row['CI']; ?></td> 
                 <td><?php echo $row['Nombres']; ?></td>
                 <td><?php echo $row['Apellidos']; ?></td>
                 <td><?php echo $row['Fecha_Nacimiento']; ?></td>
                 <td><?php echo $row['Genero']; ?></td>
                 <td><?php echo $row['Disciplina']; ?></td>
                 <td><?php echo $row['Categoria']; ?></td> 
               <tr>
        </tbody>
        <?php
               } 
               ?> 
           
           
        
    </table>
    </div>



</div>

    
</body>
</html>