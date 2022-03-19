<!DOCTYPE html>

<html lang="es">

<head>
    <title>NUTRICIÓN Y DIETÉTICA</title>
    <meta charset="UTF-8">
    <meta name="description" content="Ejemplo de HTML5">
    <meta name="Keywords" content="HTML5,CSS3,JavaScript">
    <link rel="stylesheet" href="assets/css/Nutricion.css"/>
    <link rel="icon" href="assets/img/medical-icon.ico">

    <script>
        var imagenes = new Array(
            ['assets/img/Nutricion/nutricionpagina1.jpg'],
            ['assets/img/Nutricion/nutricionpagina2.jpg'],
            ['assets/img/Nutricion/nutricionpagina3.jpg'],
            ['assets/img/Nutricion/nutricion2.jpg'],
        );
        var contador = 0;

        function rotarImagenes() {
            contador++
            document.getElementById("imagen").src = imagenes[contador % imagenes.length][0];
        }

        onload = function () {
            rotarImagenes();
            setInterval(rotarImagenes, 3000);
        }

        //funcion para rutinas
        function cambiarPestania(enlaceSeleccionado) {
            var enlaces = document.querySelectorAll("#titulos a");
            for (let i = 0; i < enlaces.length; i++) {
                enlaces[i].style.border = '';
            }

            var pe = document.getElementById("parrafo");
            var dive = document.getElementById("imagen1");

            var id = enlaceSeleccionado.getAttribute("id");
            enlaceSeleccionado.style.border = "4px solid black";
            enlaceSeleccionado.style.color = "white";

            let imge = document.getElementById('imagen1');
            let parrafo = document.getElementById('parrafo');

            switch (id) {
                case "uno":

                    parrafo = "Si haces ejercicio por la mañana, levántate lo suficientemente temprano para terminar el desayuno al menos una hora antes de tu entrenamiento. Debes estar bien alimentado antes de empezar a entrena. Los estudios sugieren que ingerir carbohidratos en comidas o bebidas antes de hacer ejercicio puede mejorar el rendimiento del entrenamiento y podría permitirte entrenar durante más tiempo o a una intensidad mayor. Si no comes, es posible que te sientas perezoso o mareado al hacer ejercicio.";
                    imge.src = "assets/img/Nutricion/cereales1.jpg";
                    break;
                case "dos":

                    parrafo = "Ten cuidado de no excederte cuando se trata de cuánto comes antes de hacer ejercicio. Comer demasiado antes de hacer ejercicio puede hacer que te sientas perezoso. Comer muy poco puede no darte la energía que necesitas para seguir sintiéndote fuerte durante tu entrenamiento.";
                    imge.src = "assets/img/Nutricion/segundopunto.jpg";
                    break;
                case "tres":

                    parrafo = "La mayoría de las personas pueden comer pequeñas colaciones justo antes y durante el ejercicio. La clave es cómo te sientes. Haz lo que funcione mejor para ti. Las colaciones que se comen poco antes de hacer ejercicio probablemente no te darán energía adicional si tu entrenamiento dura menos de 60 minutos, pero pueden prevenir los retortijones de hambre que distraen. Si tu entrenamiento es de más de 60 minutos, puedes beneficiarte al incluir un alimento o bebida rico en carbohidratos durante el entrenamiento.";
                    imge.src = "assets/img/Nutricion/tercerpunto.jpg";
                    break;

                case "cuatro":

                    parrafo = "Para que los músculos se recuperen y reemplacen las reservas de glucógeno, ingiere alguna comida que contenga hidratos de carbono y proteínas en el plazo de las dos horas posteriores a la sesión de ejercicios, si es posible. ";
                    imge.src = "assets/img/Nutricion/comeejercicio.jpg";
                    break;

                case "cinco":

                    parrafo = "No te olvides de tomar líquidos. Tú necesitas líquidos adecuados antes, durante y después del ejercicio para ayudar a prevenir la deshidratación.El agua es generalmente la mejor manera de reemplazar los líquidos perdidos. Pero si estás haciendo ejercicio durante más de 60 minutos, usa una bebida deportiva. Las bebidas deportivas pueden ayudar a mantener el equilibrio electrolítico del cuerpo y darte un poco más de energía porque contienen hidratos de carbono.";
                    imge.src = "assets/img/Nutricion/beber.jpg";
                    break;
            }
            pe.innerHTML = parrafo;
            dive.innerHTML = imge;
        }

    </script>

</head>

<body>
    <div id="contendor">

    <?php  require_once 'vista/Templates/encabezado.php'; ?>

        <div class="Sprincipal">
            <h2 class="mensaje"><strong>NUTRICIÓN Y DIETETICA</strong></h2>
            <img class="imagenPrincipal" src="assets/img/Nutricion/pngwing.png" title="Nutricion">
            <h3 class="mensaje"><strong>CUIDA TU FIGURA TAN SOLO CON</strong><br><br><a
                    href="../../index.php?c=citas&f=index">AGENDAR TU CITA</a></h3>

        </div>

        <div id="Contenedor-Pa-Vi">
            <div class="artic1">

                <h4><strong>¿Sabías que nutrición, no es lo mismo que alimentación?</strong></h4>
                <br>

                <p>La nutrición se refiere a los nutrientes que componen los alimentos, implica los procesos que suceden
                    en tu cuerpo después de comer, es decir la obtención, asimilación y digestión de los nutrimientos
                    por el organismo. </p>
                <p>El cuerpo necesita nutrientes para funcionar adecuadamente. Los nutrientes necesarios son los
                    hidratos de carbono, las proteínas, las grasas, las vitaminas y los minerales. El organismo obtiene
                    estos nutrientes de los alimentos. Siempre son numerosos los artículos sobre alimentación y
                    nutrición en las noticias.</p>
                <p>Mientras que la alimentación es la elección, preparación y consumo de alimentos, lo cual tiene mucha
                    relación con el entorno, las tradiciones, la economía y el lugar en donde vives.</p>
                <p>Comer sanamente significa hacerlo en porciones equilibradas, tomando de los 3 grupos de alimentos,
                    que son: los carbohidratos (azucares), grasas y proteínas (leguminosas, carnes y lácteos).</p>
                <p>Hay 4 procesos fundamentales que realiza la nutrición. – Proceso Digestivo: Se realiza en el Aparato
                    Digestivo. Mediante este proceso obtenemos los nutrientes para ser aprovechados por nuestro cuerpo.
                    Empieza con la digestión en la boca realizando la masticación y la salivación. Se mastica y se
                    mezcla con la saliva para conseguir que pase al estómago a través del esófago, un tubo largo de
                    paredes musculares. </p>
            </div>

            <div class="artic1">
                <img src="assets/img/Nutricion/nutricion2.jpg" alt="" id="imagen" height="260" width="440" />
            </div>
        </div>
        <br>
        <br>
        <hr>


        <div id="titulos">
            <a class="tit" id="uno" onmouseover="cambiarPestania(this)" href="#titulos">Desayuna de forma saludable</a>
            <a class="tit" id="dos" onmouseover="cambiarPestania(this)" href="#titulos">Controla el tamaño de la porción</a>
            <a class="tit" id="tres" onmouseover="cambiarPestania(this)" href="#titulos">Come buenas colaciones</a>
            <a class="tit" id="cuatro" onmouseover="cambiarPestania(this)" href="#titulos">Come después de hacer ejercicio</a>
            <a class="tit" id="cinco" onmouseover="cambiarPestania(this)" href="#titulos">Toma buen líquido</a>
        </div>
        <div id="contenido">
            <p id="parrafo"> Saber cuándo y qué comer puede marcar una diferencia en tus ejercicios. Comprende la
                conexión entre la alimentación y el ejercicio. Te mostramos 5 consejos para maximizar tus ejercicios y
                mantener tu figura con estas rutinas</p><br>
            <img id="imagen1" src="assets/img/Nutricion/TituloPrincipal.jpg" alt="">
        </div>

        <hr>

        <div class="artic2">
            <article id="at1">
                <h3><strong>Cambios en tu estilo de alimentación</strong></h3>
                <br>
                <p> Te recomendamos dos videos acerca de la nutricion y una excelente rutina de alimentos para que
                    puedas
                    tener una vida en forma y saludable y te mantengas informado</p>
            </article>
        </div>


        <aside id="Aside1">
            <div class="artic3">
                <blockquote>
                    <h5> Video explicativo de la nutrición</h5>
                    <iframe src="https://www.youtube.com/embed/ETIwmxTAxB4" height="350" width="450"
                        allowfullscreen></iframe>
                </blockquote>
            </div>

            <div class="artic3">

                <blockquote>
                    <h5>Consejos para una mejor nutrición en adolescentes</h5>
                    <iframe src="https://www.youtube.com/embed/LIx-Z2WTYMk" height="350" width="430"
                        allowfullscreen></iframe>
                </blockquote>
            </div>
        </aside>

        <?php  require_once 'vista/Templates/piePagina.php'; ?>
        
    </div>
</body>

</html>
