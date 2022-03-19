<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="es">

<head>
    <title>Agregar Curso</title>
    <meta charset="UTF-8">
    <meta name="description" content="Ejemplo de HTML5">
    <meta name="Keywords" content="HTML5,CSS3,JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" />

  <link rel="stylesheet" href="../../assets/css/General.css" />
  <link rel="icon" href="../../assets/img/medical-icon.ico">
  


    <style>
        #Header1 {
            font-size: 16px;
            background: #004C70;
            color: black;
            font-family: Century Schoolbook;
            width: 100%;
            height: 100%;
            text-align: center;
            line-height: 150px;
            border-bottom: 0.20px solid black;
        }

        #contendor {
            width: 100%;
            margin: 0px;
            min-width: 105px;
            background: #EBEDEF;
        }

        .Header2 {
            display: inline;
            font-size: 16px;
            background: white;
            color: black;
            font-family: Century Schoolbook;
            text-align: center;
            line-height: 80px;
        }


        .elemento {
            display: inline-block;


        }

        .elemento:nth-child(1) {
            width: 60%;
            padding: 20px;
        }

        .elemento:nth-child(2) {
            width: 30%;
            position: relative;
            bottom: 50px;
            box-shadow: 5px 5px 5px #000;
        }

        .formularios {

            width: 60%;
            background: #0F2738;
            padding: 10px;
            min-width: 105px;
            margin: auto;
            border-radius: 4px;
            font-family: Century Schoolbook;
            color: white;
            box-shadow: 5px 5px 5px #000;
            text-align: center;
            line-height: 50px;

        }

        .formItem {
            background: #24303c;
            padding: 8px;
            border-radius: 2px;
            margin-bottom: 16px;
            border: 1px solid black;
            font-family: Century Schoolbook;
            font-size: 18px;
            color: white;

        }


        .segundo {
            margin-right: 85px;
        }

        .tercero {

            margin-left: 27px;

        }

        .gen :nth-child(1),
        .gen:nth-child(2) {
            margin-left: 28px;

        }

        .btn {
            width: 30%;
            padding: 10px;
            border: none;
            margin: 16px 0;
            font-size: 16px;
            color: white;
            background: #34495E;
            display: inline-block;


        }
        .btnconsultar{
            border: none;
            margin: 16px 0;
            font-size: 16px;
            color: white;
            background: #34495E;
            padding: 10px;
           
        }

        #Header1 img {
            height: 80px;
            width: 80px;
            position: relative;
            right: 5px;
            top: 25px;

        }
      
    </style>

    <script>
        function validar() {
            var resultado = true;
            var txtNombres = document.getElementById("nombres");
            var txtApellidos = document.getElementById("apellidos");
            var txtemail = document.getElementById("correo");
            var txtTelefono = document.getElementById("telefono");
            var selectTiempo = document.getElementById("tiempo");
            var selectProducto = document.getElementById("id_productocurso");


            var letra = /^[a-z ,.'-]+$/i;
            var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            var telefonoreg = /^[0-9]{10}$/g;

            limpiarMensajes();

            //validacion para nombres
            if (txtNombres.value === '') {
                resultado = false;
                mensaje("Nombre es requerido", txtNombres);
            } else if (!letra.test(txtNombres.value)) {
                resultado = false;
                mensaje("Solo debe contener letras", txtNombres);
            } else if (txtNombres.value.length > 20) {
                resultado = false;
                mensaje("Nombre maximo 20 caracteres", txtNombres);
            }

            //validacion para Apellidos
            if (txtApellidos.value === '') {
                resultado = false;
                mensaje("Apellido es requerido", txtApellidos);
            } else if (!letra.test(txtApellidos.value)) {
                resultado = false;
                mensaje(" Solo debe contener letras", txtApellidos);
            } else if (txtApellidos.value.length > 20) {
                resultado = false;
                mensaje("Apellido maximo 20 caracteres", txtApellidos);
            }

            //Telefono
            if (txtTelefono.value === "") {
             respuesta = false;
             mensaje("Telefono es obligatorio", txtTelefono);
            } else if (!telefonoreg.test(txtTelefono.value)) {
            respuesta = false;
             mensaje("Telefono debe ser tener 10 digitos", txtTelefono);
           }

            //validacion email
            if (txtemail.value === "") {
                resultado = false;
                mensaje("Email es requerido", txtemail);
            } else if (!correo.test(txtemail.value)) {
                resultado = false;
                mensaje("Email no es correcto", txtemail);
            }

             //validacion select
            
            if (selectTiempo.value === null || selectTiempo.value === '0') {
             resultado = false;
              mensaje("Debe seleccionar el tiempo", selectTiempo);
            }
         
         if (selectProducto.value === null || selectProducto.value === '0') {
        resultado = false;
        mensaje("Seleccione un Curso Disponible", selectProducto);
        }

             return resultado;
        }

        function mensaje(cadenaMensaje, elemento) {
            elemento.focus();
            var nodoPadre = elemento.parentNode;
            var nodoMensaje = document.createElement("span");
            nodoMensaje.innerHTML = cadenaMensaje;
            nodoMensaje.style.color = "white";
            nodoMensaje.display = "block";
            nodoMensaje.setAttribute("class", "mensaje");

            nodoPadre.appendChild(nodoMensaje);
        }

        function limpiarMensajes() {
            var mensajes = document.querySelectorAll(".mensaje");
            for (let i = 0; i < mensajes.length; i++) {
                mensajes[i].remove();
            }
        }
    </script>


</head>

<body>
    <div id="contendor">
    <?php  require_once 'vista/Templates/encabezado.php'; ?>
        <br>

        <header class="Header2">
            <h2><strong>ACTUALIZAR CURSO</strong></h2>
        </header>


        <div id="contenedorContenido">

            <div class="elemento">
                <div class="formularios">

                    <form id="formContacto" action="../../index.php?c=cursos&f=editar" method="POST" onsubmit="return validar()" method="POST" name="formPeliNuevo" id="formPeliNuevo">
                        <div class="row">
                            <h2 class="text-center">Datos del Curso</h2>
                            <input type="hidden" name="id" id="id" value="<?php echo $cur['id_cursos']; ?>"/>

                            <div class="col-md-12">
                                <input type="text" name="nombres" id="nombres" class="formItem" value="<?php echo $cur['nombres']; ?>" placeholder="Nombre" />
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="apellidos" id="apellidos" class="formItem" value="<?php echo $cur['apellidos']; ?>" placeholder="Apellidos" />
                            </div>

                            <div class="col-md-12">
                                <input type="email" name="correo" id="correo" class="formItem" value="<?php echo $cur['correo']; ?>" placeholder="email" />
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="telefono" id="telefono" class="formItem" value="<?php echo $cur['telefono']; ?>" placeholder="telefono" />
                            </div>

                           <div class="col-md-12">
                                <select name="tiempo" id="tiempo" class="formItem">
                                    <option value="0">Seleccione la duracion del curso </option>
                                    <option value="3 meses">3 meses</option>
                                    <option value="6 meses">6 meses</option>
                                    <option value="9 meses">9 meses</option>
                                    <option value="1 año">1 año</option>
                                </select>
                                <br>
                                
                            </div>

                            <div class="col-md-12">
                                <select name="id_productocurso" id="id_productocurso" class="formItem">
                                    <?php
                       foreach ($Productoscurso as $pro) {
                           $selected='';
                           if($pro->id_productocurso == $cur['id_productocurso']){
                                 $selected='selected="selected"';
                           }
                           echo  "<option ".$selected." value='".$pro->id_productocurso."'>".$pro->produc_nombre."</option>";
                       }
                        ?>
                        </select>
                        <br>
                        <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" onclick="if (!confirm('Esta seguro de modificar el curso')) return false;" >Guardar</button>
                    <a href="../../index.php?c=cursos&f=nuevo" class="btnconsultar">Consultar cursos</a>
                </div>
            
                </div>
                 </form>
                
                </div>
       
            </div>
        </div>

        <div class="elemento">
                <div class="row">
                    <img src="Assets/img/Cirugia/img2.png" alt="" height="380" width="380" />
                </div>
            </div>
            <?php  require_once 'vista/Templates/piePagina.php'; ?>
    </div>
</body>

</html>