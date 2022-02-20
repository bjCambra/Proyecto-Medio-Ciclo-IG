<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Examen</title>
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
                           $coincidencia = mysqli_query($conection,"SELECT * FROM evaluadores WHERE CI ='$id'");
                

                        ?>
    </div>

    <div class="contendedor_tabla">

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">CI</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
 
                
                
            </tr>
        </thead>
        <tbody id="datos">
            <?php
               
               foreach($coincidencia as $row){ ?>
               <tr>
                 <td><?php echo $row['CI']; ?></td> 
                 <td><?php echo $row['E_Nombres']; ?></td>
                 <td><?php echo $row['E_Apellidos']; ?></td>

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