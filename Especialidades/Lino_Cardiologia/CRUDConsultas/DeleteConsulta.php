<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/General.css">
    <title>DELETE CONSULTA</title>
    <style>
        #Datos {
            display: flex;
            flex-direction: column;
            align-content: center;
            width: 25%;
            background: #003752;
            color: white;
            font-weight: bolder;
            padding: 2%;
            border-radius: 15px;
            margin-top: 4%;
            margin-bottom: 5%;

        }

        form {
            width: 40%;
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }

        h2 {
            text-align: center;
            padding-top: 4%;
        }

        #contenedor {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
        input,
        select,
        textarea {
            font-size: 24px;
            font-family: century school book;
            border-radius: 10px;
            border-color: #003752;
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
    <h2>ELIMINAR UNA CONSULTA</h2>

    <?php
    //include_once '../templates/header.php';

    require_once '../../../Conexion.php';

    if (!empty($_GET['id'])) {
        $data = ['id' => htmlentities($_GET['id'])];
        $sql = "select * from Consultas where id_consulta = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);

        $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($filas as $fila) {
    ?>
            <div id="contenedor">
                <div id="Datos">
                    <form method="post">
                        <label>Id:</label><input type="text" name="txtid" readonly="" value="<?php echo $fila['id_consulta'] ?>">
                        <label>Usuario:</label><input type="text" name="txtusuario" value="<?php echo $fila['NombreUsuario'] ?>">
                        <label>DESCRIPCIÓN:</label><textarea rows="5" cols="60" name="txtDescripcion" placeholder="Comentanos tu inquietud."><?php echo $fila['Descripcion'] ?></textarea>
                        <input type="submit" value="ELIMINAR CONSULTA">
                    </form>
                </div>
            </div>
    <?php
        }
    }
    ?>
    <?php
    if (isset($_POST['txtid'])) {
        $data = ['id' => htmlentities($_POST['txtid'])];
        $sql = "delete from Consultas where id_consulta = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);

        if ($stmt->rowCount() > 0) {
            header("location:ReadConsulta.php");
        } else {
            echo 'NO SE PUDO ELIMINAR LA CONSULTA';
        }
    }
    ?>

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