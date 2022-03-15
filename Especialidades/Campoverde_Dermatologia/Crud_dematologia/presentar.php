<!DOCTYPE htm>
<html lang = "en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos guardados</title>
        <style>table {
                border: #b2b2b2 1px solid;
            }
            td, th {
                border: #b2b2b2 1px solid;
            }
            </style>
    </head>
<body>
<h2>Se muestran los datos guardados</h2>

<p>Datos almacenados de las personas que se inscriben en los cursos proporcionados por el consultorio medico.</p>
<?php

require_once '../../../Conexion.php';
$sql = "select * from registrarEspecialista";

  $stmt = $pdo->prepare($sql);
$stmt->execute();
?>

<div>
    <table>
        <thead>
            <tr>
                <th>idCurso</th>
                <th>tipoDocumento</th>
                <th>numDocumento</th>
                <th>nombre_completo</th>
                <th>sexo</th>
                <th>telefono</th>
                <th>correo</th>
                <th>grado_preparacion</th>
                <th>especialidad</th>
                <th>experiencia</th>
                <th>fechaInicio</th>
                <th>Curso</th>
                <th>nomDocente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
           <?php
           $filas = $stmt->fetchAll(PDO :: FETCH_ASSOC);
           foreach($filas as $fila){
               ?>
               <tr>
               <td><?php echo $fila['idCurso']?></td>
               <td><?php echo $fila['tipoDocumento']?></td>
               <td><?php echo $fila['numDocumento']?></td>
               <td><?php echo $fila['nombre_completo']?></td>
               <td><?php echo $fila['sexo']?></td>
               <td><?php echo $fila['telefono']?></td>
               <td><?php echo $fila['correo']?></td>
               <td><?php echo $fila['grado_preparacion']?></td>
               <td><?php echo $fila['especialidad']?></td>
               <td><?php echo $fila['experiencia']?></td>
               <td><?php echo $fila['fechaInicio']?></td>
               <td><?php echo $fila['Curso']?></td>
               <td><?php echo $fila['nomDocente']?></td>

               <td>
               <a href="Registrar.php?idCurso=<?php echo $fila['idCurso']?>">Registrar</a>
                <a href="Actualizar.php?idCurso=<?php echo $fila['idCurso']?>">Actualizar</a>
               <a href="Eliminar.php?idCurso=<?php echo $fila['idCurso']?>">Eliminar</a>
            </td>
            </tr>   
          <?php }
           ?>
        </tbody>
    </table>

</div>
