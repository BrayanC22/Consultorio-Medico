<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../../../assets/css/General.css">
<link rel="stylesheet" href="../css/CardiologiaF.css">
<title>UPDATE CONSULTA</title>

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
        <h1>¿DESEAS CORREGIR ALGÚN DATO INGRESADO? EN ESTE FORMULARIO PUEDES HACERLO</h1>
    </div>
    <div class="contenedor">

        <div class="elemento">
            <img src="https://mockup.com.mx/wp-content/uploads/2020/11/Schedule-rafiki-1536x1536.png" alt="AGENDA">
        </div>
        <div class="elemento">
            <h2>DATOS REGISTRADOS</h2>

            <?php


            require_once '../../../Conexion.php';

            if (!empty($_GET['id'])) {

                $data = ['id_consulta' => htmlentities($_GET['id'])];
                $sql = "select * from Consultas where id_consulta = :id_consulta";
                $stmt = $pdo->prepare($sql);
                $stmt->execute($data);
                $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($filas as $fila) {
            ?>

                    <form method="post">
                        <input type="hidden" name="txtid2" value="<?php echo $fila['id_consulta'] ?>">
                        <label>ID:</label><input type="text" name="txtid" readonly value="<?php echo $fila['id_consulta'] ?>">
                        <label>NOMBRES COMPLETOS:</label><input type="text" name="txtnombre" value="<?php echo $fila['NombreUsuario'] ?>">
                        <label>E-MAIL:</label><input type="email" name="txtemail" value="<?php echo $fila['email'] ?>">
                        <label>CELULAR:</label><input type="tel" name="txtcelular" value="<?php echo $fila['celular'] ?>">

                        <label>ASUNTO:</label>
                        <select name="asunto" id="asunto">
                            <option value="<?php echo $fila['Asunto'] ?>"><?php echo $fila['Asunto'] ?></option>
                            <option value="Horarios de atención">Horarios de atención</option>
                            <option value="Incripciones para cursos">Incripciones para cursos</option>
                            <option value="Problemas con la plataforma">Problemas con la plataforma</option>
                            <option value="Métodos de pago">Métodos de pago</option>
                            <option value="Otros">Otros</option>
                        </select>

                        <label>DESCRIPCIÓN:</label><textarea rows="5" cols="60" name="txtDescripcion" placeholder="Comentanos tu inquietud."><?php echo $fila['Descripcion'] ?></textarea>
                        <div>
                            <label>¿DESEA RECIBIR PROMOCIONES A SU CORREO?</label><input type="checkbox" name="subscripcion" value="<?php echo $fila['Subscripcion'] ?>">
                        </div><br>

                        <div class="Acciones">
                            <input type="submit" value="ACTUALIZAR">
                            <input type="button" onclick="location.href='ReadConsulta.php'" id="btnBuscar" value="VOLVER" />
                        </div>
                    </form>
        </div>
    </div>

<?php
                }
            }
?>


<?php
if (!empty($_POST['txtid']) && !empty($_POST['txtnombre']) && !empty($_POST['txtemail']) && !empty($_POST['txtcelular']) && !empty($_POST['asunto']) && !empty($_POST['txtDescripcion'])) {

    $data = [
        'id' => htmlentities($_POST['txtid']),
        'nombre' => htmlentities($_POST['txtnombre']),
        'mail' => htmlentities($_POST['txtemail']),
        'cel' => htmlentities($_POST['txtcelular']),
        'asun' => htmlentities($_POST['asunto']),
        'desc' => htmlentities($_POST['txtDescripcion']),
        'sub' => isset($_POST['subscripcion']) ? htmlentities($_POST['subscripcion']) : 'false'

    ];
    $sql = "update Consultas set NombreUsuario =:nombre, email = :mail, celular = :cel, Asunto=:asun,  Descripcion=:desc, Subscripcion=:sub"
        . " where id_consulta=:id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
    if ($stmt->rowCount() > 0) { // rowCount permite obtener el numero de filas afectadas
        header("location:ReadConsulta.php");
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