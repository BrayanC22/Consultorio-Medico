<!DOCTYPE html>

<html lang="es">

<head>
  <title>AGENDAR - NUTRICIÓN Y DIETÉTICA</title>
  <meta charset="UTF-8">
  <meta name="description" content="Ejemplo de HTML5">
  <meta name="Keywords" content="HTML5,CSS3,JavaScript">
  <link rel="stylesheet" href="../../assets/css/General.css" />
  <link rel="icon" href="assets/img/medical-icon.ico">
  <script src="../../assets/Validaciones/ValidFNutricion.js"> </script>

  <style>
    #Header1 {
      font-size: 16px;
      background: #004C70;
      color: white;
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
      background: white;
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

    .formularios {
      width: 50%;
      background: #0F2738;
      padding: 20px;
      min-width: 105px;
      border-radius: 4px;
      font-family: Century Schoolbook;
      color: white;
      box-shadow: 1px 1px 1px 5px #000;
      margin-left: auto;
      margin-right: auto;
      position: relative;
      right: 9%;

    }

    .formularios h4 {
      text-align: center;
      line-height: 55px;

    }

    .Elemento1 {
      display: inline-block;
      padding-bottom: 2%;
      text-align: center;

    }

    .Elemento1:nth-child(1) {
      width: 64%;
    }

    .Elemento1:nth-child(2) {
      width: 35%;
      position: relative;
      right: 8%;
      bottom: 65px;
    }

    .Elemento1 img {
      box-shadow: 1px 1px 5px 5px #000;
    }

    #contenedorContenido {
      text-align: center;
      min-width: 105px;
    }

    .controls {
      width: 75%;
      background: #24303c;
      padding: 8px;
      border-radius: 2px;
      margin-bottom: 16px;
      border: 1px solid black;
      font-family: Century Schoolbook;
      font-size: 16px;
      color: white;
    }

    .btn-primary {
      display: inline-block;
      width: 37%;
      background: #111111;
      border: none;
      padding: 10px;
      color: white;
      margin: 1px;
      font-size: 15px;
      text-align: center;
    }

    #butonbuscar {
      width: 75%;
      text-align: center;
      margin-top: 6px;
    }

    span {
      font-size: 12px;
      line-height: 1px;
      position: relative;
      bottom: 10px;
    }

    #Header1 img {
      height: 60px;
      width: 60px;
      position: relative;
      right: 5px;
      top: 25px;
    }
  </style>

  <script>
    var imagenes = new Array(
      ['Assets/img/Nutricion/nutriciodietetica12.jpg'],
      ['Assets/img/Nutricion/nutriciodietetica14.jpg'],
      ['Assets/img/Nutricion/nutriciodietetica13.jpg'],

    );
    var contador = 0;

    function rotarImagenes() {
      contador++
      document.getElementById("imagen").src = imagenes[contador % imagenes.length][0];
    }

    onload = function() {
      rotarImagenes();
      setInterval(rotarImagenes, 3000);
    }
  </script>

<body>
<div id="contendor">
<?php  require_once 'vista/Templates/encabezado.php'; ?>
    <br>
    <header class="Header2">
      <h2><strong>FORMULARIO DE REGISTRO PARA SEPARAR UNA CITA</strong></h2>
    </header>

    <div id="contenedorContenido">

      <div class="Elemento1">

        <div class="formularios">

          <form id="formContacto" action="../../index.php?c=citas&f=nuevo" onsubmit="return validarFormulario()" method="POST">

            <div class="row">
              <h4>AGENDA TU CITA</h4>
              <div class="col-md-12">
                <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres y apellidos" /><br>
              </div>
              <div class="col-md-12">
                <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo" /><br>
              </div>
              <div class="col-md-12">
                <input class="controls" type="text" name="telefono" id="telefono" placeholder="Ingrese su telefono" /><br>
              </div>

              <div class="col-md-12">
                <select name="especialidad" id="especialidad" class="controls">
                  <option value="0">Seleccione una especialidad</option>
                  <?php foreach ($Especialidad as $espe) {
                  ?>
                    <option value="<?php echo $espe->id_especialidad ?>"><?php echo $espe->especialidad_nombre; ?></option>
                  <?php
                  }
                  ?>
                </select><br>
              </div>
              <div class="col-md-12">
                <select name="especialista" id="especialista" class="controls">
                  <option value="0">Seleccione un especialista</option>
                  <?php foreach ($Especialista as $esp) {
                  ?>
                    <option value="<?php echo $esp->id_especialista ?>"><?php echo $esp->especialista_nombre; ?></option>

                  <?php
                  }
                  ?>
                </select> <br>
              </div>
              <div class="col-md-12">
                <select name="clinica" id="clinica" class="controls">
                  <option value="0">Seleccione una clinica</option>
                  <?php foreach ($Clinica as $cli) {
                  ?>
                    <option value="<?php echo $cli->id_clinica ?>"><?php echo $cli->clinica_nombre; ?></option>
                  <?php
                  }
                  ?>
                </select><br>
              </div>
              <div class="col-md-12">
                <label>El horario se asigna automaticamente:<br></label>
                <br>Estoy de acuerdo <input type="checkbox" name="acuerdo" value="Estoy de Acuerdo" id="acuerdo" class="formItem sus" /><br>
                <br>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <input type="submit" class="btn btn-primary" value="Guadar">
                  <input type="reset" class="btn btn-primary" value="Limpiar Campos"><br>

                </div>
                <div>
                  <a href="../../index.php?c=citas&f=index">
                    <button type="button" class="btn btn-primary" id="butonbuscar"><i class="fas fa-plus"></i>Consultar citas </button>
                  </a>

                </div>
              </div>
            </div>

          </form>

        </div>
      </div>

      <div class="Elemento1">
        <img src="../../Especialidades/Calvopina_Nutricion/img/nutriciodietetica14.jpg" alt="" id="imagen" height="420" width="440">
      </div>
      
      <?php  require_once 'vista/Templates/piePagina.php'; ?>
    </div>
</body>

</html>