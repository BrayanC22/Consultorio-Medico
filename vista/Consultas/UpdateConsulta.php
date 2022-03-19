<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="assets/css/Cardiologia.css">
<link rel="stylesheet" href="assets/css/CardiologiaF.css">
<title>UPDATE CONSULTA</title>

<body>
<?php  require_once 'vista/Templates/encabezado.php'; ?>
    <div>
        <h1>¿DESEAS CORREGIR ALGÚN DATO INGRESADO? EN ESTE FORMULARIO PUEDES HACERLO</h1>
    </div>
    <div class="contenedor">

        <div class="elemento">
            <img src="https://mockup.com.mx/wp-content/uploads/2020/11/Schedule-rafiki-1536x1536.png" alt="AGENDA">
        </div>
        <div class="elemento">
            <h2>DATOS REGISTRADOS</h2>

                    <form action="../../index.php?c=Consulta&f=editar" method="post">
                        
                        <input type="hidden" name="txtid2" value="<?php echo $fila['id_consulta'] ?>">
                        <label>ID:</label><input type="text" name="txtid" readonly value="<?php echo $consul['id_consulta'] ?>">
                        <label>NOMBRES COMPLETOS:</label><input type="text" name="txtnombre" value="<?php echo $consul['NombreUsuario'] ?>">
                        <label>E-MAIL:</label><input type="email" name="txtemail" value="<?php echo $consul['email'] ?>">
                        <label>CELULAR:</label><input type="tel" name="txtcelular" value="<?php echo $consul['celular'] ?>">

                        <label>ASUNTO:</label>
                        <select name="asunto" id="asunto">
                            <option value="<?php echo $consul['Asunto'] ?>"><?php echo $consul['Asunto'] ?></option>
                            <option value="Horarios de atención">Horarios de atención</option>
                            <option value="Incripciones para cursos">Incripciones para cursos</option>
                            <option value="Problemas con la plataforma">Problemas con la plataforma</option>
                            <option value="Métodos de pago">Métodos de pago</option>
                            <option value="Otros">Otros</option>
                        </select>

                        <label>DESCRIPCIÓN:</label><textarea rows="5" cols="60" name="txtDescripcion" placeholder="Comentanos tu inquietud."><?php echo $consul['Descripcion'] ?></textarea>
                        <div>
                            <label>¿DESEA RECIBIR PROMOCIONES A SU CORREO?</label><input type="checkbox" name="subscripcion" value="<?php echo $consul['Subscripcion'] ?>">
                        </div><br>

                        <div class="Acciones">
                            <input type="submit"  onclick="if (!confirm('¿Desea de modificar la consulta?')) return false;" value="ACTUALIZAR">
                            <input type="button" onclick="location.href='../../index.php?c=Consulta&f=index'" id="btnBuscar" value="VOLVER" />
                        </div>
                    </form>
        </div>
    </div>
    <?php  require_once 'vista/Templates/piePagina.php'; ?>

</body>

</html>