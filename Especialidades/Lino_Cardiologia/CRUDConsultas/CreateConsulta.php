<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/General.css">
    <title>ATENCIÓN AL USUARIO</title>
    <style>
        * {
            margin: 0%;
        }

        .contenedor {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            padding-top: 5%;
            padding-inline: 15%;
            padding-bottom: 5%;
            font-size: 17px;
            gap: 10%;
        }

        .contenedor .elemento img {
            width: 100%;
        }

        .contenedor .elemento:nth-child(2) {

            width: 41%;
            background: #003752;
            color: white;
            font-weight: bolder;
            padding: 5%;
            border-radius: 15px;
        }

        .Acciones {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 2%;
        }

        .Acciones input {
            width: 60%;
            font-weight: bold;
            color: #161e4a;

        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }

        input,
        select,
        textarea {
            font-size: 24px;
            font-family: century school book;
            border-radius: 10px;
            border-color: #003752;
        }

        h1 {
            text-align: center;
            padding: 2%;
        }

        h2 {
            text-align: center;
            padding-bottom: 8%;
        }

        #Sub {
            font-size: 1.5ch;
            font-weight: normal;
            padding-bottom: 8%;
        }

        #btnBuscar {
            width: 100%;
            font-weight: bold;
            color: #161e4a;
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
    <div>
        <h1>CUENTÁNOS TUS INQUIETUDES, ESTAMOS PARA RESOLVER TUS DUDAS</h1>
    </div>
    <div class="contenedor">

        <div class="elemento">
            <img src="https://i.pinimg.com/originals/de/cf/c0/decfc0c01af2c927daeb4c2734dc430d.png" alt="AGENDA">
        </div>
        <div class="elemento">
            <h2>INGRESE LOS SIGUIENTES DATOS</h2>
            <form id="formulario" method="POST">
                <label>NOMBRE:</label>
                <input type="text" name="txtnombre" placeholder="24BIT">

                <label>EMAIL:</label>
                <input type="email" name="txtemail" placeholder="alguien@something.com">

                <label>TELEFONO:</label>
                <input type="tel" name="txtcelular" placeholder="9999999999">

                <label>ASUNTO:</label>
                <select name="asunto" id="asunto">
                    <option value="0">Seleccione una opción...</option>
                    <option value="Horarios de atención">Horarios de atención</option>
                    <option value="Incripciones para cursos">Incripciones para cursos</option>
                    <option value="Problemas con la plataforma">Problemas con la plataforma</option>
                    <option value="Métodos de pago">Métodos de pago</option>
                    <option value="Otros">Otros</option>
                </select>

                <label>DESCRIPCIÓN:</label>
                <textarea rows="5" cols="60" name="txtDescripcion" placeholder="Comentanos tu inquietud."></textarea>
                <div id="Sub">
                    <label>¿DESEA RECIBIR PROMOCIONES A SU CORREO?</label>
                    <input type="checkbox" name="subscripcion" value="true">
                </div>

                <div class="Acciones">
                    <input type="submit" value="ENVIAR">
                    <input type="reset" value="CANCELAR">
                </div>
                <div>
                    <input type="button" onclick="location.href='ReadConsulta.php'" id="btnBuscar" value="VISUALIZAR CONSULTAS" />
                </div>
            </form>
        </div>
    </div>
    <?php
    require_once '../../../Conexion.php';

    if (!empty($_POST['txtnombre']) && !empty($_POST['txtemail']) && !empty($_POST['txtcelular'])  && !empty($_POST['txtDescripcion']) && $_POST['asunto'] != 0) {
        $nombre = htmlentities($_POST['txtnombre']);
        $email = isset($_POST['txtemail']) ? htmlentities($_POST['txtemail']) : '';
        $celular = htmlentities($_POST['txtcelular']);
        $asunto = htmlentities($_POST['asunto']);
        $descripcion = htmlentities($_POST['txtDescripcion']);
        $subscripcion = isset($_POST['subscripcion']) ? htmlentities($_POST['subscripcion']) : 'false';

        $data = [
            'nom' => $nombre,
            'mail' => $email,
            'cel' => $celular,
            'asun' => $asunto,
            'descrp' => $descripcion,
            'subs' => $subscripcion
        ];
        $sql = "insert into consultas(id_consulta, NombreUsuario, email, celular, Asunto, Descripcion, Subscripcion) values(NULL, :nom, :mail,:cel,:asun,:descrp, :subs)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
        
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