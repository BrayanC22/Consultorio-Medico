<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/medical-icon.ico">
    <script src="/assets/Validaciones/Cardiologia.js"></script>
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
            width: 100%;
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
            display: inline;
            font-size: 1.2ch;
            font-weight: normal;
            padding-bottom: 1%;
            
        }

        #btnBuscar {
            width: 100%;
            font-weight: bold;
            color: #161e4a;
        }
        input[type="checkbox" i] {
            width:fit-content;
        }
    </style>
</head>

<body>
<?php  require_once 'vista/Templates/encabezado.php'; ?>
    <div>
        <h1>CUENTÁNOS TUS INQUIETUDES, ESTAMOS PARA RESOLVER TUS DUDAS</h1>
    </div>
    <div class="contenedor">

        <div class="elemento">
            <img src="https://i.pinimg.com/originals/de/cf/c0/decfc0c01af2c927daeb4c2734dc430d.png" alt="AGENDA">
        </div>
        <div class="elemento">
            <h2>INGRESE LOS SIGUIENTES DATOS</h2>
            <form id="formulario" action="../../index.php?c=Consulta&f=nuevo" method="POST" onsubmit="return validarC(event)">
                <label>NOMBRE:</label>
                <div class="col-md-12"><input type="text" id="nombre" name="txtnombre" placeholder="ex, Yermin Lino"></div>

                <label>EMAIL:</label>
                <div class="col-md-12"> <input type="email" id="correo" name="txtemail" placeholder="alguien@something.com">  </div>

                <label>TELEFONO:</label>
                <div class="col-md-12"><input type="tel" id="telefono" name="txtcelular" placeholder="9999999999">  </div>

                <label>ASUNTO:</label>
                <div class="col-md-12"> <select name="asunto" id="asunto">
                    <option value="0">Seleccione una opción...</option>
                    <option value="Horarios de atención">Horarios de atención</option>
                    <option value="Incripciones para cursos">Incripciones para cursos</option>
                    <option value="Problemas con la plataforma">Problemas con la plataforma</option>
                    <option value="Métodos de pago">Métodos de pago</option>
                    <option value="Otros">Otros</option>
                </select>  </div>

                <label>DESCRIPCIÓN:</label>
                 <textarea rows="5" cols="60" id="txtArea" name="txtDescripcion" placeholder="Comentanos tu inquietud."></textarea> 
               
                <div id="Sub">
                    <label>¿DESEA RECIBIR PROMOCIONES A SU CORREO?</label>
                    <div class="col-md-12"> <input type="checkbox" id="check" name="subscripcion" value="true">  </div>
                </div>

                <div class="Acciones">
                    <input type="submit" value="ENVIAR">
                    <input type="reset" value="CANCELAR">
                </div>
                <div>
                    <input type="button" onclick="location.href='../../index.php?c=Consulta&f=index'" id="btnBuscar" value="VISUALIZAR CONSULTAS" />
                </div>
            </form>
        </div>
    </div>
<?php  require_once 'vista/Templates/piePagina.php'; ?>

</body>

</html>