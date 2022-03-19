 <!DOCTYPE html>
<html lang="es-ES">
<head>
        <title>CONSULTORIO MÉDICO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Consultorio Médico">
        <link rel="icon" href="../../assets/img/medical-icon.ico">
        <meta name="Keywords" content="Consultorio, Medicina">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../assets/css/General.css"/>
        
        
<style>
#Foot h4{
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 0%;
}

.Encabezado img{
    width: 6%;
    margin-right: 1%;
}
li:nth-child(1){
  background: #004C70;
  border-top: solid 3px #0b080e;
}

.Contenido:nth-child(1){
  /*Centrar contenido*/
  display: flex;
  align-items: center;
  justify-content: center;
  /*--------------------*/
  padding: 2.7%;
  font-size: 100%;
}
.Contenido:nth-child(2){
  display: flex;
  width: 100%; 
  background: #0b080e;
  font-size: 12px;
  text-align: left;
}
.menu li a{
text-decoration: none;
color: white;
padding: 20px;
display: block;
font-size: initial;
}
.menu li{
display: inline-block;
text-align: center;
}
/* ------------------- USO DE BOOTSTRAP ---------------- */
.container, .container-sm {
    max-width: 100%;
    margin-right: 0%;
}

/* ----------------------------------------------------------*/
.row{
    align-items: center;
    justify-content: center;
    text-align: center;
}
.row h2{
    text-align: center;
    padding: 3%;
}
.row:nth-child(2), .row:nth-child(1){
    background: #0b080e;
    color: white;

}
.row:nth-child(2){
    padding-bottom: 4%;
    
}

.row:nth-child(2) img{
    width: 40%;
    padding-bottom: 4%;
}

.row:nth-child(2) p{
    text-align: center;
    padding: 5%;
    font-size:1.5em;
    color: white;
    background-color: #004C70;
}
.row a h5{
    width: 80%;
    margin-bottom: 0%;
    font-weight: bolder;
    line-height: 1.5;
    display: flex;
    flex-direction: column;
    text-decoration: none;
    padding: 3%;
    background: #0b080e;
    color: white;
}


.row:nth-child(3){
    align-items: center;
    justify-content: center;
    padding-top: 3%;
    background-color: #004C70;
    text-align: -webkit-center;
}
.row:nth-child(3) img{
    width: 80%;
    border: 6px solid #0b080e;
}

.col-md-6 {
    flex: 0 0 auto;
    width: 50%;
    padding-bottom: 2%;
}

.row:nth-child(3) h2 {
    padding: 5%;
    margin-bottom: 3%;
    font-weight: bolder;
    background: #0b080e;
    color: white;
}
</style>

<script>
    function aumentarImagen(imagen) {
        //1. obtener elementos a manipular
        let img = document.getElementById(imagen);
        img.style.opacity = ".5";
        img.style.border = "3px solid #0b080e";
        //Imagen.textContent = 'Encendido';

    }
    function reducirImagen(imagen) {
        //1. obtener elementos a manipular
        let img = document.getElementById(imagen);
        img.style.border = "6px solid #0b080e";
        img.style.opacity = "1";
        //Imagen.textContent = 'Encendido';

    }
    
</script>
</head>

<body>
<?php  require_once 'vista/Templates/encabezado.php'; ?>
    

    <div id="ContenedorPrincipal">
        <div id="elementos" class="container">
            <div class="row">
                <div class="elemento col-md-12">
                    <h2><strong>ACCESO A LOS MEJORES MÉDICOS Y TRATAMIENTOS DEL ECUADOR</strong></h2>
                </div>
            </div>



        <div class="row">
            <img class="elemento col-md-12" src="../../assets/img/doctores.png" alt="imagen">
            <div class="elemento col-md-12">
                <p> Atención Médica Experta, Tratamientos Innovadores, Innovación Médica, Programación de Citas. <br>
                    Somos una empresa dedicada a la prestación de servicios médicos integrales; la cual asume el compromiso
                    de garantizar el bienestar laboral cuidando la seguridad, salud y medio ambiente, manteniendo
                    condiciones seguras y saludables de trabajo para sus trabajadores, proveedores y clientes. </p>
            </div>
        </div>



        <div class="row">
            <div class="elemento col-md-12">
                <h2>NUESTROS SERVICIOS</h2>
            </div>
            <div class="elemento col-md-6">
                    <a href="Especialidades/Quisnancela_Cirugia/QuisnancelaCirugia.php" target="_BLANK"><h5>CIRUGÍA GENERAL</h5><img id="imagen1" onmouseover="aumentarImagen('imagen1')" onmouseleave="reducirImagen('imagen1')" height="300" width="600" src="../../assets/img/cirugiaGeneral.jpg" alt=""/></a>            
            </div>
            <div class="elemento col-md-6">   
                    <a href="Especialidades/Calvopina_Nutricion/BrayanNutricion.php" target="_BLANK"><h5>NUTRICIÓN Y DIETETICA</h5><img id="imagen2" onmouseover="aumentarImagen('imagen2')" onmouseleave="reducirImagen('imagen2')" height="300" width="600" src="../../assets/img/nutrición.jpg" alt="" /></a>
                    
                
            </div>
            <div class="elemento col-md-6">
                    <a href="Especialidades/Campoverde_Dermatologia/CampoverdeDermatologia.php" target="_BLANK"><h5>DERMATOLOGÍA</h5><img id="imagen3" onmouseover="aumentarImagen('imagen3')" onmouseleave="reducirImagen('imagen3')" height="300" width="600" src="../../assets/img/dermatología.jpg" alt=""/></a>
                
            </div>
            <div class="elemento col-md-6">
                    <a href="Especialidades/Lino_Cardiologia/LinoCardiologia.php" target="_BLANK"><h5>CARDIOLOGÍA</h5><img id="imagen4" height="300" onmouseover="aumentarImagen('imagen4')" onmouseleave="reducirImagen('imagen4')" width="600" src="../../assets/img/Cardiología.jpg" alt="" /></a>
            </div>
        </div>
    </div>
</div>




<?php  require_once 'vista/Templates/piePagina.php'; ?>

</body>

</html>
