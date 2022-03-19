var Nimagenes = new Array(
    ['img/Rotacion/img1.png'],
    ['img/Rotacion/img2.png'],
    ['img/Rotacion/img3.png']);
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






/* ------------------------------- Validacions ---------------------------------- */
function soloNumeros(evento){
    
        var Caracter = (evento.which) ? evento.which : evento.keyCode;
        if(Caracter>=48 && Caracter<=57) {
          return true;
        }
        if(Caracter==8) {
          return true;
        }
         else{
          return false;
        }
}

function soloLetras(evento){
    var Caracter = (evento.which) ? evento.which : evento.keyCode;
    if(Caracter==8) {
      return true;
    } else if(Caracter>=65 && Caracter<=90) {
      return true;
    } else if(Caracter>=96 && Caracter<=122) {
        return true;
      } else{
      return false;
    }
}


var form = document.querySelector("#formulario");
form.addEventListener('submit', validar);
    function validar(evento) {
        var resultado = true;
        var txtNombre = document.getElementById('nombre');
        var txtCedula = document.getElementById('cedula');
        var txtFecha = document.getElementById('fecha');
        var txtemail = document.getElementById('mail');
        var listClinica = document.getElementById('clinica');
        var txtPass = document.getElementById('contra');
        var dato = txtFecha.value;
        var fechaN = new Date(dato);
        var fechaActual = new Date();

        var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        var longitud = /^[0-9]{10}$/g;
        if (txtNombre.value === '') {
            resultado = false;
            txtNombre.placeholder='Campo obligatorio';
            txtNombre.classList.add('Holder');
        }
        if (txtCedula.value === '') {
            resultado = false;  
            txtCedula.placeholder='Campo obligatorio';
            txtCedula.classList.add('Holder');
        }else if (!longitud.test(txtCedula.value)) {
            resultado = false;
            alert("Cedula debe tener 10 digitos");
        }
        
        if (txtemail.value === "") {
            resultado = false;
            txtemail.placeholder='Campo obligatorio';
            txtemail.classList.add('Holder');
        }
        if (listClinica.value === null || listClinica.value === 'Seleccionar') {
            resultado = false;
            alert('Debe seleccionar una clínica');
        }

        if (txtFecha.value === "") {
            resultado = false;
            alert('Seleccione una fecha, por favor');
        }
        if (fechaN <= fechaActual) {
            resultado = false;
            alert("La fecha no puede ser menor a la actual");
        }
        if (txtPass.value === '') {
            resultado = false;
            txtPass.placeholder='Campo obligatorio';
            txtPass.classList.add('Holder');
        }
        if (!resultado) {
            evento.preventDefault();
        }else{
            alert("Datos enviados correctamente")
        }

    }