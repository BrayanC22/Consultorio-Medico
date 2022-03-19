<!DOCTYPE html>
<html lang="en"> 
<head>
<link rel="stylesheet" href="../../../assets/css/General.css">
<link rel="stylesheet" href="/assets/css/CRUDDer.css">
<script src="/assets/Validaciones/Dermatologia.js"></script>
<title>Actualizar Datos</title> 
</head>
<body>
<?php  require_once 'vista/Templates/encabezado.php'; ?>   
    </div>
    <main>

 <h2><strong>Formulario para la modificación de datos </strong></h2>

     <div>
            <form action ="index.php?c=especialistas&f=editar" class="form-box animated fadeInUp" method="post" onsubmit="return validarAC()">
             <input type="hidden" name="txtid" readonly value="<?php echo $fila['idEspecialista'] ?> ">	
            <div class="col-md-12">  <input class="textbox" type="text" id="cedula" name="txtndocum" value="<?php echo $fila['numDocumento'] ?>" placeholder="Ingrese su número de cedula"> </div>
            <div class="col-md-12">  <input class="textbox" type="text" id="nombre" name="txtnombre" value="<?php echo $fila['nombre_completo'] ?>" placeholder="ingrese su nombre"> </div>
            <div class="col-md-12">  <input class="textbox" type="text" id="telefono"  name="txttelefono" value="<?php echo $fila['telefono'] ?>" placeholder="Ingrese su número de telefono"> </div>
            <div class="col-md-12">  <input class="textbox" type="text" id="correo" name="txtemail"placeholder="Ingrese su correo" value="<?php echo $fila['correo'] ?>"></div>
            <div class="col-md-12"> <input class="textbox" type="text" name="txtprepa"id="grado" placeholder="Seleccione el grado de estudio" list="preparacion" value="<?php echo $fila['grado_preparacion']?>"></div>
                        <datalist id="preparacion">
                            <option value="Pregrado">
                            <option value="Postgrado">
                            </option>
                        </datalist>
                        <div class="col-md-12"> <input class="textbox" type="text" name="txtespe" id="profesion" placeholder="Seleccione su especialidad" list="Carrera" value="<?php echo $fila['especialidad']?>"> </div>
                        <datalist id="Carrera">
                            <option value="Medicina general">
                            <option value="Cirugia general">
                            <option value="Nutricion y Dietetica">
                            <option value="Dermatologia">
                            <option value="Cardiologia">
                            </option>
                        </datalist>

                        <div class="col-md-12"> <input class="textbox" type="number" id="experiencia" name="txtexpe" placeholder="Años de experiencia" value="<?php echo $fila['experiencia']?>">  </div> 
                <button type="submit">Actualizar</button>
            </form>
        </div>
      
    </main>
    <?php  require_once 'vista/Templates/piePagina.php'; ?>
</body>
</html>