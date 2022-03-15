<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/General.css">
    <link rel="stylesheet" href="css/CampoverdeSergio.css">
    <link rel="icon" href="../../assets/img/medical-icon.ico">
    <title>Actualizar Datos</title>
<style>
    body {
  
  font-family: Century Schoolbook;
  
}
h2 {
      display: inline;
      font-size: 16px;
      background: white;
      color: black;
      font-family: Century Schoolbook;
      text-align: center;
      line-height: 40px;
    }
select{
    width: 18%;
    left: 20px;
    padding: 10px;
    font-size: 16px;
    background: #004C70;
    color: white;
}
main{
    display: flex;
    flex-direction: column;
    align-items: center;
}
       .form-box {
            margin-top: 4%;
            margin-bottom: 4%;
            width: 350px;
            padding: 30px;
            background: #004C70;
            border-radius: 30px;
            text-align: center;
 
        }
        .form-box h4 {
  font-size: 22px;
  margin-bottom: 20px;
  margin-left: 40px;
}
.textbox{
      width: 70%;
      background: white;
      padding: 11px;
      margin-bottom: 12px;
      border: 1px solid black;
      font-family: Century Schoolbook;
      font-size: 18px;
      border-radius: 24px;
      color: black;
    }
.form-box a:hover {
  color: white;
}
    .formulario__label {
	display: block;
	font-weight: 700;
	padding: 10px;
	cursor: pointer;
}

.formulario__grupo-input {
	position: relative;
}

.formulario__input {
	width: 100%;
	background: #fff;
	border: 3px solid transparent;
	border-radius: 3px;
	height: 45px;
	line-height: 45px;
	padding: 0 40px 0 10px;
	transition: .3s ease all;
}
.formulario__input:focus {
	border: 3px solid white;
	outline: none;
	box-shadow: 3px 0px 30px rgba(163,163,163, 0.4);
}

.formulario__input-error {
	font-size: 12px;
	margin-bottom: 0;
	display: none;
}

.formulario__input-error-activo {
	display: block;
}

.formulario__validacion-estado {
	position: absolute;
	right: 10px;
	bottom: 15px;
	z-index: 100;
	font-size: 16px;
	opacity: 0;
}
.radio  {
    float: left;
  padding-left: 1.3cm;
}
.form-box button[type="submit"] {
  border: 0;
  background: red;
  display: block;
  margin: 10px auto;
  text-align: center;
  border: 2px solid white;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
  width: 200px;
  font-size: 14px;
}
.form-box button[type="submit"]:hover {
  background: none;
}
</style>
<script type="text/javascript">
function surfto(form)
{
var myindex=form.dest.selectedIndex
window.open(form.dest.options[myindex].value,"_top");
}
</script>
</head>

<body>
    <header class = "Encabezado">
        <h1 class="Contenido"> <img src="../../assets/img/Logo.png" alt="" />CONSULTORIO MEDICO</h1>
        <nav class = "Contenido">  
          <ul class = "menu">  
                    <li><a href="/index.html" >Home</a></li>
                    <li><a href="/Especialidades/Quisnancela_Cirugia/QuisnancelaCirugia.html" >Cirugía general</a></li>
                    <li><a href="/Especialidades/Calvopina_Nutricion/BrayanNutricion.html" >Nutricion y Dietetica</a></li>
                    <li><a href="../Crud_dematologia/Registrar.php">Dermatología</a></li>
                    <li><a href="/Especialidades/Lino_Cardiologia/LinoCardiologia.html">Cardiólogia</a></li>
                    <li><a href="/acercaNosotros.html">Acerca de</a></li>
                </ul> 
         </nav> 
         <select name="CursosDisponibles" onchange="location = this.value;">
   <option value="1">CrudDermatologia</option> 
   <option value="Registrar.php">Registrar</option>
   <option value="presentar.php">Presentar</option>
   <option value="Actualizar.php">Actualizar</option> 
   <option value="Eliminar.php">Eliminar</option> 
</select>
          </header>
          <main>
          <h2><strong>Formulario para la modificación de datos </strong></h2>
<?php

require_once '../../../conexion.php';

if (isset($_GET['idCurso'])) {

    $data = ['idCurso' => htmlentities($_GET['idCurso'])];
    $sql = "select * from registrarEspecialista where idCurso = :idCurso";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);
    $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($filas as $fila) {
     ?>
     <div>
            <form class="form-box animated fadeInUp" id = "form" method="post">
              
               <input type="text" name="txtid" readonly value="<?php echo $fila['idCurso'] ?> ">
                <input class="textbox" type="text" name="txtdocu" id ="docu" placeholder ="Tipo documento" list ="document" value="<?php echo $fila['tipoDocumento'] ?>">
                <datalist id = "docu">
                        <option  value = "Cedula">Cedula</option>
                        <option value="Pasaporte">Pasaporte</option>
                </datalist>
                <input class="textbox" type="text" name="txtndocum" value="<?php echo $fila['numDocumento'] ?>">
                <input class="textbox" type="text" name="txtnombre" value="<?php echo $fila['nombre_completo'] ?>">
                <input class="textbox" type="text" name="txtsexo"  placeholder ="Seleccione un genero" list ="genero" value="<?php echo $fila['sexo'] ?>">
                <datalist id = "txtSexo">
                        <option  value = "Masculino">  
                        <option value="Femenino">
                        </option>
                </datalist>
                <input class="textbox" type="text" name="txttelef" value="<?php echo $fila['telefono'] ?>">
                <input class="textbox" type="text" name="txtemail" value="<?php echo $fila['correo'] ?>">
                <input class="textbox" type="text" name="txtprepa" id ="grado" placeholder ="Seleccione el grado de estudio" list ="preparacion" value="<?php echo $fila['grado_preparacion'] ?>"> 
                <datalist id = "preparacion">
                    <option  value = "Pregrado">  
                    <option value="Postgrado">
                    </option>
                </datalist> 
                <input class="textbox" type="text" name="txtespe" id ="profesion" placeholder ="Seleccione su especialidad" list ="Carrera" value="<?php echo $fila['especialidad'] ?>"> 
                    <datalist id = "Carrera">
                        <option value="Medicina general">
                        <option  value = "Cirugía general">  
                        <option value="Nutricion y Dietetica">
                        <option  value = "Dermatología"> 
                        <option  value = "Cardiología">   
                        </option>
                    </datalist> 
                <input class="textbox" type="text" name="txtexpe" value="<?php echo $fila['experiencia'] ?>">
                <input class="textbox" type="date" name="txtfech" value="<?php echo $fila['fechaInicio'] ?>">
                 <input class="textbox" type="text" name="txtCurso" id ="curse" placeholder ="Seleccione un curso." list ="Curso" value="<?php echo $fila['Curso'] ?>"> 
                <datalist id = "Curso">
                    <option  value = "Cirugía general">  
                    <option value="Nutricion y Dietetica">
                    <option  value = "Dermatología"> 
                    <option  value = "Cardiología">  
                    </option>
                </datalist>
                <input class="textbox" type="text" name="txtDoc" id ="txt" placeholder ="Seleccione un docente" list ="especialista" value="<?php echo $fila['nomDocente'] ?>"> 
                <datalist id = "especialista">
                    <option value="Dr. Victor Leon Cherres">
                    <option  value = "Dra. Paola Wilches">  
                    <option value="Dr. Jorge Quintaro">
                    <option  value = "Dr. Marcus Smith"> 
                    <option value="Dra. Ambar Figueroa">
                    </option>
                </datalist>
                <button type = "submit" title = "Recargar la pagina para ver la actualizacion.">Actualizar </button>
            </form>
            </div>
        <?php
    }
}
?>
<?php
if (!empty($_POST['txtid']) && !empty($_POST['txtdocu']) && !empty($_POST['txtndocum']) && !empty($_POST['txtnombre']) && !empty($_POST['txtsexo']) && !empty($_POST['txttelef']) && !empty($_POST['txtemail'])
&& !empty($_POST['txtprepa']) && !empty($_POST['txtespe'])  && !empty($_POST['txtexpe']) && !empty($_POST['txtfech']) && !empty($_POST['txtCurso']) && !empty($_POST['txtDoc'])) {

    $data = [
        'idCurso' => htmlentities($_POST['txtid']),
        'dni' => htmlentities($_POST['txtdocu']),
        'cdu' => htmlentities($_POST['txtndocum']),
        'nombre' => htmlentities($_POST['txtnombre']),
        'sexo' => htmlentities($_POST['txtsexo']),
        'tlf' => htmlentities($_POST['txttelef']),
        'correo' => htmlentities($_POST['txtemail']),
        'prepa' => htmlentities($_POST['txtprepa']),
        'espe' => htmlentities($_POST['txtespe']),
        'expe' => htmlentities($_POST['txtexpe']),
        'fecha' => htmlentities($_POST['txtfech']),
        'curso' => htmlentities($_POST['txtCurso']),
        'doc' => htmlentities($_POST['txtDoc']),
    ];
    $sql = "update registrarEspecialista set tipodocumento =:dni, numDocumento = :cdu, nombre_completo = :nombre, sexo = :sexo, telefono = :tlf, correo = :correo,
    grado_preparacion = :prepa, especialidad = :espe, experiencia = :expe,  fechaInicio = :fecha, Curso = :curso, nomDocente = :doc where idCurso = :idCurso";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($data);

    if ($stmt->rowCount() > 0) {// rowCount permite obtener el numero de filas afectadas
        header("location:presentar.php");
    }
}
?>
</main>
<footer id="Footer1">
    <strong>Autor:</strong> Grupo 6.
    <br>
    <strong>Visitanos:</strong> Guayaquil-Ecuador.
    <br>
    <br>
    <strong>Medicina General</strong>
    <br>
    <br>

    <div id="Foot">

        <div>
            <h4 id="acercaDe"><strong>Contactanos a nuestras Redes sociales</strong></h4>
        </div>
        <br>
        <a href="https://twitter.com/?lang=es" target="_BLANK"> <img src="../../../assets/img/twitter.png" alt="descripcion"
                height="50" width="50" /></a>
        <a href="https://www.instagram.com/accounts/login/" target="_BLANK"> <img src="../../../assets/img/instagram.png"
                alt="descripcion" height="50" width="50" /></a>
        <a href="https://www.facebook.com/" target="_BLANK"> <img src="../../../assets/img/facebook.png" alt="descripcion"
                height="50" width="50" /></a>
        <br>

        <h4> Derechos reservados &copy; 2020-2021</h4>
    </div>

</footer>

</body>
</html>