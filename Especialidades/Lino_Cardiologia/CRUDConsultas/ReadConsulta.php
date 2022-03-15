<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/General.css">
    <title>READ CONSULTA</title>
    <style>
        table {
            border: #b2b2b2 1px solid;
        }

        td,
        th {
            border: #b2b2b2 1px solid;
        }
        th{
            background: #004C70;
            color: white;
        }

        #Datos {
            padding: 5%;
            display: flex;
            flex-direction: column;
            align-content: center;
        }
        td a{
            background: #004C70;
            padding-inline: 4%;
            color: white;
            font-weight: bold;
            text-align: center;
            border-radius: 5px;
        }
        td a:nth-child(2){
            color: #004C70;
            background: white;
            border: solid 1px #004C70;

            

        }
        #nuevaC{
            background: #004C70;
            padding: 1%;
            color: white;
            font-weight: bold;
            text-align: center;
            margin-top: 2%;
            margin-inline: 35%;
            border-radius: 15px;
        }
        h2{
            text-align: center;
            padding-top: 2%;
        }
    </style>
</head>

<body>
    <div class="Encabezado">
        <h1 class="Contenido"> <img src="../../../assets/img/Logo.png" alt="" />CONSULTORIO MEDICO</h1>
        <nav class="Contenido">
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Cirugía General</a></li>
                <li><a href="#">Nutrición y Dietética</a></li>
                <li><a href="#">Dermatología</a></li>
                <li><a href="#">Cardiología</a></li>
                <li><a href="#">Acerca de</a></li>
            </ul>
        </nav>
    </div>


    <?php

    require_once '../../../Conexion.php';


    $sql = "select * from Consultas";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    ?>
    <h2>LISTA DE CONSULTAS REALIZADAS POR LOS USUARIOS</h2>
    <br>
    <div id="Datos">

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
                $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($filas as $fila) {
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
                            <a href="UpdateConsulta.php?id=<?php echo $fila['id_consulta'] ?>">Editar</a>
                            <a href="DeleteConsulta.php?id=<?php echo $fila['id_consulta'] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a id="nuevaC" href="CreateConsulta.php">AGREGAR UNA NUEVA CONSULTA</a>
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

        <div id="Foot">

            <div>
                <h4 id="acercaDe"><strong>Contactanos a nuestras Redes sociales</strong></h4>
            </div>
            <br>
            <a href="https://twitter.com/?lang=es" target="_BLANK"> <img src="../../../assets/img/twitter.png" alt="descripcion" height="50" width="50" /></a>
            <a href="https://www.instagram.com/accounts/login/" target="_BLANK"> <img src="../../../assets/img/instagram.png" alt="descripcion" height="50" width="50" /></a>
            <a href="https://www.facebook.com/" target="_BLANK"> <img src="../../../assets/img/facebook.png" alt="descripcion" height="50" width="50" /></a>
            <br>

            <h4> Derechos reservados &copy; 2022-2023</h4>
        </div>

    </footer>

</body>

</html>