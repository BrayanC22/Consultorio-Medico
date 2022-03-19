<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/medical-icon.ico">
    <link rel="stylesheet" href="../../assets/css/General.css" />

    <title>Buscar Cita</title>
    <style>
        table {
            background-color: white;
            text-align: left;
            border-collapse: collapse;
            width: 100%;

        }

        td {
            font-size: 14px;
        }

        td,
        th {
            padding: 15px;
        }

        tr:nth-child(even) {
            background-color: #ddd;
        }

        tr:hover td {
            background-color: #24303c;
            color: white;
        }

        thead {
            background-color: #24303c;

            color: white;
        }

        #contenidoCentral {
            padding-bottom: 8%;
            padding-left: 10%;
            padding-top: 2%;

        }

        #boton {
            text-align: center;
            padding-top: 1%;
            padding-right: 12%;

        }

        #butonAgregar {
            text-align: center;
            padding: 8px;
            background: #24303c;
            border: 1px solid black;
            font-family: Century Schoolbook;
            color: white;
            font-size: 16px;
            margin-top: 1%;
            position: relative;
            right: 3%;
        }

        #agregadoboton {
            text-align: center;
        }

        .buscarboton {
            background: #24303c;
            padding: 10px;
            border: none;
            margin: 16px 0;
            font-size: 16px;
            color: white;

        }

        .Header2 {
            text-align: center;
        }

        a {
            color: black;
            text-decoration: underline;
        }


        .formItem {
            background: white;
            padding: 8px;
            border-radius: 2px;
            margin-bottom: 16px;
            border: 1px solid black;
            font-family: Century Schoolbook;
            font-size: 18px;
            color: black;

        }

        #BusquedaPanel {
            text-align: center;
            position: relative;
            right: 4%;
        }
    </style>
</head>


<body>
    <div id="contendor">
    <?php  require_once 'vista/Templates/encabezado.php'; ?>
        <br>
        <header class="Header2">
            <h2><strong>Mostrar Citas</strong></h2>
        </header>

        <div id="contenidoCentral">
            <div id="botonNuevo">
                <div class="col-md-12" id="BusquedaPanel">
                    <form action="../../index.php?c=citas&f=buscar" method="POST">
                        <input type="text" name="busqueda" id="busqueda" class="formItem" placeholder="Ingrese el id de su cita" />
                        <button type="submit" class="buscarboton"><i class="fas fa-search"></i>Buscar por id</button><br>
                    </form>
                </div>

                
                <table>
                    <thead>
                        <tr>
                            <th>Id_Citas</th>
                            <th>Nombres</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Especialidad</th>
                            <th>Especialista</th>
                            <th>Clinica</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($resultados as $fila) {
                        ?>
                            <tr>
                                <td><?php echo $fila['id_citas']; ?></td>
                                <td><?php echo $fila['nombres']; ?></td>
                                <td><?php echo $fila['correo']; ?></td>
                                <td><?php echo $fila['telefono']; ?></td>
                                <td><?php echo $fila['especialidad_nombre']; ?></td>
                                <td><?php echo $fila['especialista_nombre']; ?></td>
                                <td><?php echo $fila['clinica_nombre']; ?></td>

                                <td><a class="btn btn-primary" id="btn-editar" href="../../index.php?c=citas&f=editar&id_citas=<?php echo  $fila['id_citas']; ?>"> Editar<i class="fas fa-marker"></i></a>
                                    <a class="btn btn-danger" onclick="if(!confirm('Esta seguro de eliminar la cita?'))return false;" href="../../index.php?c=citas&f=eliminar&id_citas=<?php echo  $fila['id_citas']; ?>">Eliminar<i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <div class="col-md-12" id="agregadoboton">
                    <a href="../../index.php?c=citas&f=nuevo">
                        <button type="button" class="btn btn-primary" id="butonAgregar"><i class="btn btn-primary"></i>Agragar nueva cita </button>
                    </a>
                </div>

            </div>
        </div>

        <?php  require_once 'vista/Templates/piePagina.php'; ?>

</body>

</html>