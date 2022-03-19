<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/General.css">
    <link rel="stylesheet" href="css/CampoverdeSergio.css">
    <link rel="icon" href="../../assets/img/medical-icon.ico">
    <title>AGENDAR - DERMATOLOGÍA</title>
    <style>
    body {
  
  font-family: Century Schoolbook;
  /*background: gray;*/
  
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


main{
    display: flex;
    flex-direction: column;
    align-items: center;
}
       .form-box {
            margin-top: 4%;
            margin-bottom: 4%;
            width: 400px;
            padding: 30px;
            background: #004C70;
            border-radius: 30px;
            text-align: center;
 
        }
     select{
    width: 18%;
    left: 20px;
    padding: 10px;
    font-size: 16px;
    background: #004C70;
    color: white;
}
        .form-box h4 {
  font-size: 22px;
  margin-bottom: 20px;
  margin-left: 40px;
}
.textbox{
      width: 85%;
      background: white;
      padding: 8px;
      margin-bottom: 16px;
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
  padding-left: 1.6cm;
  text-align: center;
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
  width: 300px;
  font-size: 14px;
}
.form-box button[type="submit"]:hover {
  background: none;
}
    </style>
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
          
        <h2><strong>Formulario de Registro.</strong></h2>
        <p>Formulario para el registro de profesionales que deseen ingresar a los cursos disponibles que oferta el consultorio medico.</p>

    <form class="form-box animated fadeInUp" id = "form" method="post">
        <div class="col-md-12">
        <div class="radio">
        <h4>Completar informción</h4>
        <input type="radio" name="dni"  id="dni" value="Cedula" class="formItem">
        <label for="cedula">Cedula</label>
        &nbsp; &nbsp;
        <input type="radio" name="dni" id="ruc" value="Pasaporte"> 
        <label for="ruc">Pasaporte</label>
    </div>
 </div>
    <div class="col-md-12">
    <input class="textbox" type="text" name="cedula"   id="cedula" placeholder="Ingrese cedula o pasaporte">
</div>
<div class="col-md-12">
    <input class="textbox" type="text" name="nom" id="nombre"  placeholder="Ingrese su nombre" >
</div>
<div class="radio">
    <input type="radio" name="sexo"  id="Masculino" value="Masculino">
    <label id="masculino">Masculino</label>
    &nbsp;  &nbsp;
    <input type="radio" name="sexo" id="Femenino" value="Femenino">
    <label id="femenino">Femenino</label>
</div>
<div class="col-md-12">
    <input class="textbox" type="text" name="telef" id="telefono"  placeholder="Ingrese su numero de telefono"> 
</div>
<div class="col-md-12">
    <input class="textbox" type="email" name="correo" id="correo"  placeholder="Ingrese su correo"> 
</div>
<div class="col-md-12">
    <input class="textbox" type="text" name="preparacion" id ="grado" placeholder ="Seleccione el grado de estudio" list ="preparacion"> 
    <datalist id = "preparacion">

        <option  value = "Pregrado">  
        <option value="Postgrado">
        </option>
    </datalist>
</div>
<div class="col-md-12">
    <input class="textbox" type="text" name="Carrera" id ="profesion" placeholder ="Seleccione su especialidad" list ="Carrera"> 
    <datalist id = "Carrera"> 
        <option value="Medicina general">
        <option  value = "Cirugía general">  
        <option value="Nutricion y Dietetica">
        <option  value = "Dermatología"> 
        <option  value = "Cardiología">   
        </option>
    </datalist>
</div>
<div class="col-md-12">
    <input  class="textbox" type="number"name ="expe" id="experiencia" placeholder="Ingrese los años de experiencia." >
</div>

<div class="col-md-12">
    <input class="textbox" type="date"  id="fecha" name="fecha" >
 </div>
 <div class="col-md-12">
    <input class="textbox" type="text" name="curso" id ="curse" placeholder ="Seleccione un curso." list ="Curso"> 
    <datalist id = "Curso">
        <option  value = "Cirugía general">  
        <option value="Nutricion y Dietetica">
        <option  value = "Dermatología"> 
        <option  value = "Cardiología">  
        </option>
    </datalist>
</div>
 <div class="col-md-12">
    <input class="textbox" type="text" name="especialista" id ="txt" placeholder ="Seleccione un docente" list ="especialista"> 
    <datalist id = "especialista">
        <option value="Dr. Victor Leon Cherres">
        <option  value = "Dra. Paola Wilches">  
        <option value="Dr. Jorge Quintaro">
        <option  value = "Dr. Marcus Smith"> 
        <option value="Dra. Ambar Figueroa">
        </option>
    </datalist>
</div>
    
<div class="col-md-12">
 <input type="checkbox" name="check" value="1" id="check"> &nbsp Acepto los terminos y condiciones.
   </div>    
    <button type = "submit">Agregar</button>

    </form>
 
    <?php
  //  require_once '/Especialidades/Campoverde_Dermatologia/conexion.php';
  require_once '../../../Conexion.php';
    if(!empty($_POST['dni']) && !empty($_POST['cedula']) && !empty($_POST['nom']) && !empty($_POST['sexo']) && !empty($_POST['telef']) && !empty($_POST['correo'])&& !empty($_POST['preparacion']) && 
    !empty($_POST['Carrera']) && !empty($_POST['expe'])&& !empty($_POST['fecha']) && !empty($_POST['curso']) && !empty($_POST['especialista'])){
        $tipoDocumento = htmlentities($_POST['dni']);
        $numDocumento = htmlentities($_POST['cedula']);
        $nombre_completo = htmlentities($_POST['nom']);
        $sexo = htmlentities($_POST['sexo']);
        $telefono = htmlentities($_POST['telef']);
        $correo = isset($_POST['correo'])? htmlentities($_POST['correo']):'';
        $grado_preparacion = htmlentities($_POST['preparacion']);
        $especialidad = htmlentities($_POST['Carrera']);
        $experiencia = htmlentities($_POST['expe']);
        $fechaInicio = htmlentities($_POST["fecha"]);
        $Curso = htmlentities($_POST['curso']);
        $nomDocente = htmlentities($_POST['especialista']);
    
        $data = [
        'tdocum' => $tipoDocumento,
        'ndocum'=> $numDocumento,
        'nombre' => $nombre_completo,
        'sexo' => $sexo,
        'tlf' => $telefono,
        'correo'=> $correo,
        'gprepa' => $grado_preparacion,
        'espe' => $especialidad,
        'exp' => $experiencia,
        'fecha' => $fechaInicio,
        'curso' => $Curso,
        'docent' => $nomDocente
       ];

       $sql = "insert into registrarEspecialista(idCurso, tipoDocumento, numDocumento, nombre_completo, sexo, telefono, correo, grado_preparacion, especialidad, experiencia, fechaInicio, Curso, nomDocente)values(NULL, :tdocum, :ndocum, :nombre, :sexo, :tlf, :correo, :gprepa, :espe, :exp, :fecha, :curso, :docent)";
       $stmt = $pdo->prepare($sql);
       $stmt->execute($data);
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

      <script>
          var form = document.querySelector("#form");
         form.addEventListener('submit', validar);
          let cont=0;
          function validar(event){
            var resultado = true;
            var txtradio = document.getElementsByName("dni");
            var txtCedula = document.getElementById("cedula"); 
            var txtNombre = document.getElementById("nombre"); 
            var txtFecha = document.getElementById("fecha");
            var txtExperiencia = document.getElementById("experiencia"); 
            var radiosGenero = document.getElementsByName("sexo");
            var preparacion = document.getElementById("grado");
            var Carrera = document.getElementById("profesion");
            var Curso = document.getElementById("curse");
            var especialista = document.getElementById("txt");
            var txtTelefono = document.getElementById("telefono");
            var aceptar = document.getElementById("check");
            var txtEmail = document.getElementById("correo");

            var letra = /^[a-z ,.'-]+$/i;
            var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            var telefonoreg = /^[0-9]{10}$/g;
            var cedulag = /^[0-9]{10}$/g;
    
            limpiarMensajes();
         //validacion radio button
     var sel = false;
    for (let i = 0; i < txtradio.length; i++) {
        if (txtradio[i].checked) {
            sel = true;
            let res=txtradio[i].value; 
            break;
          }
        }
    
    if (!sel) {
        resultado = false;
        mensaje("Debe seleccionar un tipo de credencial", txtradio[0]);
    }
         
     if (txtCedula.value === "") {
        resultado = false;
        mensaje("La cedula es requerida", txtCedula);
    } else if(!cedulag.test(txtCedula.value)) {
        resultado = false;
        mensaje("La cedula o pasaporte debe ser de 10 digitos", txtCedula);
    }
 
            if(txtNombre.value === ''){
                resultado = false;
                mensaje("Debe ingresar el nombre", txtNombre);
            }else if(!letra.test(txtNombre.value)){
            resultado = false;
            mensaje("Solo se debe ingresar letras", txtNombre);
            }else if(txtNombre.value.length > 20){
                resultado = false;
                mensaje("Solo se permiten un maximo de 20 caracteres", txtNombre);
            }
 //validacion de fecha
     var dato=  txtFecha.value;
    var fechaN = new Date(dato);
    var anioN=fechaN.getFullYear();

    var fechaActual = new Date();// fecha actual
    var anioA = fechaActual.getFullYear();    
    if(txtFecha.value === ""){
        resultado = false;
        mensaje("Selecione la fecha para iniciar el curso ", txtFecha);
    }else
    if(fechaN <= fechaActual){
        resultado = false;
        mensaje("La fecha no puede ser inferior a la actual", txtFecha);
   }else if(anioN >= fechaActual){
        resultado = false;
        mensaje("El año no puede ser menor a la fecha actual", txtFecha);
   }else if((anioA - anioN) < 0){
       resultado = false;
        mensaje("debe ser mayor de a 0 años", txtFecha);
   }
    //Experiencia
  if(txtExperiencia.value === ""){
    resultado = false;
        mensaje("Edad es requerido", txtExperiencia);
  }else if(txtExperiencia.value < 1){
    resultado = false;
        mensaje("Experiencia debe ser mayor que 0", txtExperiencia);
  }

  else if(txtExperiencia.value > 100){
    resultado = false;
        mensaje("Experiencia debe ser menor a 100", txtExperiencia);
  }
  //validacion de un checkbox
  if(!aceptar.checked){
      resultado=false;
      mensaje("Debe aceptar los teminos y condiciones.", aceptar);
    }
   /* return respuesta;*/
    //validacion radio button
 var sel = false;
    for (let i = 0; i < radiosGenero.length; i++) {
        if (radiosGenero[i].checked) {
            sel = true;
            let res=radiosGenero[i].value;
            
            break;
        }
    }
    if (!sel) {
        resultado = false;
        mensaje("Debe seleccionar un genero", radiosGenero[0]);
    }
    //validacion select
    if (especialista.value === null || especialista.value === "") {
        resultado = false;
        mensaje("Debe seleccionar un docente para el curso", especialista);
    }
    //validacion select
    if (preparacion.value === null || preparacion.value === "") {
        resultado = false;
        mensaje("Debe seleccionar el grado de preparación", preparacion);
    }
    //validacion select
    if (Carrera.value === null || Carrera.value === "") {
        resultado = false;
        mensaje("Debe seleccionar el tipo de especialidad", Carrera);
    }
     //validacion select
     if (Curso.value === null || Curso.value === "") {
        resultado = false;
        mensaje("Debe seleccionar el curso al que desea ingresar", Curso);
    }
            //validacion telefono
    if (txtTelefono.value === "") {
        resultado = false;
        mensaje("Telefono es requerido", txtTelefono);
    } else if (!telefonoreg.test(txtTelefono.value)) {
        resultado = false;
        mensaje("Telefono debe ser de 10 digitos", txtTelefono);
    }
   
             //validacion email
    if (txtEmail.value === "") {
        resultado = false;
        mensaje("Email es requerido", txtEmail);
    } else if (!correo.test(txtEmail.value)) {
        resultado = false;
        mensaje("Email no es correcto", txtEmail);
    }
    if(!resultado){
        event.preventDefault();  // detener el evento  //stop form from submitting
    }
    return resultado;     

function falso(){
return false;
}
}

function mensaje(cadenaMensaje, elemento) {
    elemento.focus();
    var nodoPadre = elemento.parentNode;
    var nodoMensaje = document.createElement("span");
    nodoMensaje.textContent = cadenaMensaje;
    nodoMensaje.style.color = "red";
    nodoMensaje.style.display = "block";
    nodoMensaje.setAttribute("class", "mensajeError");
    nodoPadre.appendChild(nodoMensaje);

}

function limpiarMensajes() {
    var mensajes = document.querySelectorAll(".mensajeError");
    for (let i = 0; i < mensajes.length; i++) {
        mensajes[i].remove();// remueve o elimina un elemento de mi doc html
    }

}
</script>
</body>
</html>
