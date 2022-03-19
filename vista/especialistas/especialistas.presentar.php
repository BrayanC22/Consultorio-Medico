<!DOCTYPE htm>
<html lang = "en">
<head>
<link rel="stylesheet" href="../../../assets/css/General.css">
<link rel="stylesheet" href="/assets/css/CRUDDer.css">
<title>UPDATE CONSULTA</title>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos guardados</title>
        <style>table {
                border: #b2b2b2 0.5px solid;
            }
            td, th {
                border: #b2b2b2 0.5px solid;
            }
            </style>
    </head>

<body>

    <?php  require_once 'vista/Templates/encabezado.php'; ?>

<h2>Se muestran todos los registros de los especialistas</h2>
&nbsp;
<p>Lista de especialistas inscritos en los cursos proporcionados por el consultorio medico. La busqueda se realiza con el número de cedula</p>
&nbsp;
<form action="index.php?c=especialistas&f=buscar" method="POST" class="frmFill">
                <input type="text"  name="busqueda" id="busqueda"  placeholder="buscar por numDocumento">
                <button type="submit" class="btnprimary"><i class="fas fa-search"></i>Buscar</button>
            </form>   
<div>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>tipoDocumento</th>
                <th>numDocumento</th>
                <th>nombrecompleto</th>
                <th>sexo</th>
                <th>telefono</th>
                <th>correo</th>
                <th>Academico</th>
                <th>especialidad</th>
                <th>experiencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
           <?php
           foreach($resultados as $fila){
               ?>
               <tr>
               <td><?php echo $fila['idEspecialista']?></td>
               <td><?php echo $fila['tipoDocumento']?></td>
               <td><?php echo $fila['numDocumento']?></td>
               <td><?php echo $fila['nombre_completo']?></td>
               <td><?php echo $fila['sexo']?></td>
               <td><?php echo $fila['telefono']?></td>
               <td><?php echo $fila['correo']?></td>
               <td><?php echo $fila['grado_preparacion']?></td>
               <td><?php echo $fila['especialidad']?></td>
               <td><?php echo $fila['experiencia']?></td>
               <td>
               <a href="index.php?c=especialistas&f=presentar">Registrar</a>
                <a href="index.php?c=especialistas&f=editar&id=<?php echo $fila['idEspecialista']?>">Actualizar</a>
               <a onclick="if(!confirm('Estas seguro que deseas eliminar'))return false;" href="index.php?c=especialistas&f=eliminar&id=<?php echo $fila['idEspecialista']?>">Eliminar</a>
            </td>
            </tr>   
          <?php }
           ?>
        </tbody>
    </table>
   
</div>
<?php  require_once 'vista/Templates/piePagina.php'; ?>

</footer>