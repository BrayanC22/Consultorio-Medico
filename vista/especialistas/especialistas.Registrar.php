<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/General.css">
    <link rel="stylesheet" href="css/CampoverdeSergio.css">
    <link rel="icon" href="../../assets/img/medical-icon.ico">
    <link rel="stylesheet" href="/assets/css/CRUDDer.css">
    <script src="/assets/Validaciones/Dermatologia.js"></script>
    <title>AGENDAR - DERMATOLOGÍA</title>
</head>

<body>
<?php  require_once 'vista/Templates/encabezado.php'; ?>
    <main>

        <h2><strong>Formulario de Registro.</strong></h2>
        &nbsp;
        <p>Formulario para el registro de especialistas que deseen formar parte del consultorio medico.</p>
        &nbsp;
        <form action="index.php?c=especialistas&f=insert" class="form-box animated fadeInUp" id="form" method="post" onsubmit="return validar(event)">
            <div class="col-md-12">
                <div class="radio">
                    <h4>Completar informción</h4>
                    <input type="radio" name="dni" id="dni" value="Cedula" class="formItem">
                    <label for="cedula">Cedula</label>
                    &nbsp; &nbsp;
                    <input type="radio" name="dni" id="ruc" value="Pasaporte">
                    <label for="ruc">Pasaporte</label>
                </div>
            </div>
            <div class="col-md-12">
                <input class="textbox" type="text" name="cedula" id="cedula" placeholder="Ingrese cedula o pasaporte">
            </div>
            <div class="col-md-12">
                <input class="textbox" type="text" name="nom" id="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="radio">
                <input type="radio" name="sexo" id="Masculino" value="Masculino">
                <label id="masculino">Masculino</label>
                &nbsp; &nbsp;
                <input type="radio" name="sexo" id="Femenino" value="Femenino">
                <label id="femenino">Femenino</label>
            </div>
            <div class="col-md-12">
                <input class="textbox" type="text" name="telef" id="telefono" placeholder="Ingrese su numero de telefono">
            </div>
            <div class="col-md-12">
                <input class="textbox" type="email" name="correo" id="correo" placeholder="Ingrese su correo">
            </div>
            <div class="col-md-12">
                <input class="textbox" type="text" name="preparacion" id="grado" placeholder="Seleccione el grado de estudio" list="preparacion">
                <datalist id="preparacion">

                    <option value="Pregrado">
                    <option value="Postgrado">
                    </option>
                </datalist>
            </div>
            <div class="col-md-12">
                <input class="textbox" type="text" name="Carrera" id="profesion" placeholder="Seleccione su especialidad" list="Carrera">
                <datalist id="Carrera">
                    <option value="Medicina general">
                    <option value="Cirugia general">
                    <option value="Nutricion y Dietetica">
                    <option value="Dermatologia">
                    <option value="Cardiologia">
                    </option>
                </datalist>
            </div>
            <div class="col-md-12">
                <input class="textbox" type="number" name="expe" id="experiencia" placeholder="Ingrese los años de experiencia.">
            </div>


            <div class="col-md-12">
                <input type="checkbox" name="check" value="1" id="check"> &nbsp Acepto los terminos y condiciones.
            </div>
            <button type="submit">Agregar</button>

        </form>

    </main>
    <?php  require_once 'vista/Templates/piePagina.php'; ?>

    
</body>

</html>