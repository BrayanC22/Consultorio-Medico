<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>CARDIOLOGÍA</title>
    <meta name="description" content="Información de cardiología">
    <meta name="autor" content="Yermin Lino">
    <meta name="Keywords" content="Cardiología, Enfermedad del corazón">
    <link rel="stylesheet" href="assets/css/Cardiologia.css">
    <script src="js/CardiologiaProcesos.js"></script>
    <link rel="icon" href="assets/img/medical-icon.ico">
</head>
<script>
    var Nimagenes = new Array(
    ['assets/img/Cardiologia/Rotacion/img1.png'],
    ['assets/img/Cardiologia/Rotacion/img2.png'],
    ['assets/img/Cardiologia/Rotacion/img3.png']);
var contador = 0;

function rotarImagenes() {
    contador++
    document.getElementById("imagenPrincipal").src = Nimagenes[contador % Nimagenes.length][0];
}


/* Alternar colores de "a" agendar cita*/

var Colores = new Array(
    ['#3e73b6'],
    ['#0f7986'],
    ['#00b1ff']);
var ColoresLetra = new Array(
    ['#ffffff'],
    ['#ffffff'],
    ['#0b080e']);
var contadorColores = 0;

function AlternarColores() {
    contadorColores++
    document.getElementById("Agendar").style.background = Colores[contadorColores % Colores.length][0];
    document.getElementById("Agendar").style.color = ColoresLetra[contadorColores % ColoresLetra.length][0];
}

onload = function () {
    rotarImagenes();
    setInterval(rotarImagenes, 2000);
    AlternarColores();
    setInterval(AlternarColores, 2000);
}

</script>

<body>
<?php  require_once 'vista/Templates/encabezado.php'; ?>

        
            <div class = "Sprincipal">
                    <h2 class="mensaje"><strong>CARDIOLOGÍA</strong></h2>
                    <img id="imagenPrincipal" src="assets/img/Cardiologia/Rotacion/img1.png" alt="Imagen Principal" title="Cardiología">
                    <h2 class="mensaje"><strong>CON NOSOTROS TU CORAZÓN ESTÁ SEGURO</strong><a id="Agendar" href="../../index.php?c=Consulta&f=nuevo">AGENDAR CITA</a></h2>     
            </div>

            <div>
                    Fecha de publicación: <time datetime="2021">Diciembre</time>

            </div>

        <div class="Seccion">
            <h2 class="titulo2">DIAGNOSTICO</h2><hr>
            <div class="parrafo">
                <p>
                    Tu médico te realizará un examen físico y te preguntará acerca de tus antecedentes médicos y familiares. Las
                    pruebas que
                    se necesitarán para diagnosticarte una enfermedad cardíaca dependen de lo que piense el médico acerca de qué
                    afección
                    tienes. Además de los análisis de sangre y una radiografía de tórax, las pruebas para diagnosticar una
                    enfermedad
                    cardíaca pueden comprender: electrocardiograma, monitoreo Holter, ecocardiograma, prueba de esfuerzo,
                    pateterismo cardíaco,
                    exploración por tomografía computarizada e imágenes por resonancia magnética
                </p>
            </div>
            <img class="imagen" src="assets/img/Cardiologia/Cardiologia1.png" alt="">
        </div>


        <div class="Seccion" style="background: #004c70; color: white;">
            <h2 class="titulo2">TRATAMIENTOS</h2>
            <img class="imagen"
                src="assets/img/Cardiologia/cardiologia2.jpg"
                alt="">
            <div class="parrafo">
                <ul>
                    <li>Cambios en el estilo de vida. Puedes reducir el riesgo de enfermedad cardíaca con una dieta con bajo
                        contenido de grasa y bajo contenido de sodio, hacer por lo menos 30 minutos de ejercicio moderado la
                        mayoría de los días de la semana, dejar de fumar y limitar el consumo de alcohol.</li>
                    <li>Medicamentos. Si los cambios en el estilo de vida no son suficientes, es posible que el médico te recete
                        medicamentos para controlar la enfermedad cardíaca. El tipo de medicamentos que tomes dependerá del tipo
                        de enfermedad cardíaca.</li>
                    <li>Procedimientos médicos o cirugía. Si los medicamentos no son suficientes, es posible que el médico te
                        recomiende procedimientos específicos o una cirugía. El tipo de procedimiento o la cirugía dependerá del
                        tipo de enfermedad cardíaca y del grado de daño al corazón</li>
                </ul>
            </div>
        </div>

        <div class="SeccionDoctores">

            <h2 class="titulo2">DOCTORES DISPONIBLES</h2>

            <div class="infoDoctores">
                <div class="doctores">
                    <img src="assets/img/Cardiologia/dr1.jpeg" alt="Isabel Ruilova" title="Isabel Ruilova">
                </div>
                <div class="doctores">
                    <h3>Isabel Ruilova</h3>
                </div>
                <div class="doctores">
                    <h4>CARDIÓLOGA</h4>
                </div>
                <div class="doctores">
                    <a href="https://doctopro.com/dr/draruilova" target="_BLANK">VER PERFIL</a>
                </div>
            </div>


            <div class="infoDoctores">
                <div class="doctores">
                    <img src="assets/img/Cardiologia/dr2.jpeg" alt="David Puga" title="David Puga">
                </div>
                <div class="doctores">
                    <h3>David Puga</h3>
                </div>
                <div class="doctores">
                    <h4>CARDIÓLOGO</h4>
                </div>
                <div class="doctores">
                    <a href="https://doctopro.com/dr/davidpugabermudez8302" target="_BLANK">VER PERFIL</a>
                </div>
            </div>


            <div class="infoDoctores">
                <div class="doctores">
                    <img src="assets/img/Cardiologia/dr3.jpeg" alt="Jazmin Benavides" title="Jazmin Benavides">
                </div>
                <div class="doctores">
                    <h3>Jazmin Benavides</h3>
                </div>
                <div class="doctores">
                    <h4>CARDIÓLOGA</h4>
                </div>
                <div class="doctores">
                    <a href="https://doctopro.com/dr/melissagonzalez" target="_BLANK">VER PERFIL</a>
                </div>
            </div> 
        </div>
        

    <div class ="SeccionVideos">
        <h2 class="titulo2">CONOCIMIENTO GENERAL</h2>
        <div class="itemsV">
            <h4>¿QUÉ ES LA CARDIOLOGÍA?</h4>
        </div>
        <div class="itemsV">
            <h4>CARDIOPATÍA</h4>
        </div>
        <div class="itemsV">
            <iframe src="https://www.youtube.com/embed/oRClKnCYoAc" height="215" width="460" allowfullscreen></iframe>
        </div>
        <div class="itemsV">
            <iframe src="https://player.vimeo.com/video/656281863?h=671fab70a0&color=f31129&title=0&byline=0&portrait=0" height="215" width="460" allowfullscreen></iframe>
        </div>
</div>


<?php  require_once 'vista/Templates/piePagina.php'; ?>
    
</body>

</html>
