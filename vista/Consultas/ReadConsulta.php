<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/medical-icon.ico">
    <link rel="stylesheet" href="../../../assets/css/General.css">
    <title>HISTORIAL DE CONSULTAS</title>
    <style>
        table {
            border: #b2b2b2 1px solid;
        }

        td,
        th {
            border: #b2b2b2 1px solid;
        }

        th {
            background: #004C70;
            color: white;
        }

        #Datos {
            padding: 5%;
            display: flex;
            flex-direction: column;
            align-content: center;
        }

        td a {
            background: #004C70;
            padding-inline: 4%;
            color: white;
            font-weight: bold;
            text-align: center;
            border-radius: 5px;
        }

        td a:nth-child(2) {
            color: #004C70;
            background: white;
            border: solid 1px #004C70;



        }

        #nuevaC {
            background: #004C70;
            padding: 1%;
            color: white;
            font-weight: bold;
            text-align: center;
            margin-top: 2%;
            margin-inline: 35%;
            border-radius: 15px;
        }

        h2 {
            text-align: center;
            padding-top: 2%;
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

        .buscarboton {
            background: #004c70;
            padding: 10px;
            border-radius: 20px;
            margin: 16px 0;
            font-size: 16px;
            color: white;

        }

        #BusquedaPanel {
            text-align: center;
            position: relative;
            right: 4%;
        }
    </style>
</head>

<body>
    <?php require_once 'vista/Templates/encabezado.php'; ?>


    <?php
    /*
    $sql = "select * from Consultas";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    */
    ?>
    <h2>LISTA DE CONSULTAS REALIZADAS POR LOS USUARIOS</h2>
    <br>
    <div id="Datos">

        <div class="col-md-12" id="BusquedaPanel">
            <form action="../../index.php?c=Consulta&f=buscar" method="POST">
                <input type="text" name="busqueda" id="busqueda" class="formItem" placeholder="Nombre de usuario" />
                <button type="submit" class="buscarboton">Buscar por Usuario</button><br>
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>E-MAIL</th>
                    <th>CELULAR</th>
                    <th>ASUNTO</th>
                    <th>DESCRIPCIÓN</th>
                    <th>SUBSCRIPCIÓN</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultados as $fila) {
                ?>
                    <tr>
                        <td><?php echo $fila['id_consulta'] ?></td>
                        <td><?php echo $fila['NombreUsuario'] ?></td>
                        <td><?php echo $fila['email'] ?></td>
                        <td><?php echo $fila['celular'] ?></td>
                        <td><?php echo $fila['Asunto'] ?></td>
                        <td><?php echo $fila['Descripcion'] ?></td>
                        <td><?php echo $fila['Subscripcion'] ?></td>
                        <td>
                            <a href="../../index.php?c=Consulta&f=editar&id_consulta=<?php echo  $fila['id_consulta']; ?>">Editar</a>
                            <a onclick="if(!confirm('Esta seguro de eliminar la consulta?'))return false;" href="../../index.php?c=Consulta&f=eliminar&id_consulta=<?php echo  $fila['id_consulta']; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a id="nuevaC" href="../../index.php?c=Consulta&f=nuevo">AGREGAR UNA NUEVA CONSULTA</a>
    </div>
    <footer id="Footer1">
        <strong>Autor:</strong> Grupo 6.
        <br>
        <strong>Visitanos:</strong> Guayaquil-Ecuador.
        <br>
        <br>
        <strong>Consultorio Médico</strong>
        <br>
        <br>

        <?php require_once 'vista/Templates/piePagina.php'; ?>

</body>

</html>