var form = document.querySelector("#formulario");
form.addEventListener('submit', validar);
let cont = 0;
function validarC(event){
    var resultado = true;
    var txtNombre = document.getElementById("nombre");
    var asunt = document.getElementById("asunto");
    var txtTelefono = document.getElementById("telefono");
    var txtEmail = document.getElementById("correo");
    var aceptar = document.getElementById("check");
    var txtdescripcion = document.getElementById("txtArea");
    var letra = /^[a-z ,.'-]+$/i;
    var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var telefonoreg = /^[0-9]{10}$/g;
    
    limpiarMensajes();

    if (txtNombre.value === '') {
        resultado = false;
        mensaje("Debe ingresar el nombre", txtNombre);
    } else if (!letra.test(txtNombre.value)) {
        resultado = false;
        mensaje("Solo se debe ingresar letras", txtNombre);
    } else if (txtNombre.value.length > 20) {
        resultado = false;
        mensaje("Solo se permiten un maximo de 20 caracteres", txtNombre);
    }
    //validacion de un checkbox
    if (!aceptar.checked) {
        resultado = false;
        mensaje("Debe aceptar los teminos y condiciones.", aceptar);
    }
    
    if (asunt.value === null || asunt.value === '0') {
        respuesta = false;
         mensaje("Seleccionar un tipo de asunto", asunt);
     }
    //validacion telefono
    if (txtTelefono.value ==="") {
        resultado = false;
        mensaje("Telefono es requerido", txtTelefono);
    } else if (!telefonoreg.test(txtTelefono.value)) {
        resultado = false;
        mensaje("Telefono debe ser de 10 digitos", txtTelefono);
    }
    // tetxarea
    if( txtdescripcion == null || txtdescripcion.length == 0 || /^\s+$/.test(txtdescripcion) ) {
        resultado = false;
        mensaje("Introducir una descripcion.", txtdescripcion);
      }


    //validacion email
    if (txtEmail.value === "") {
        resultado = false;
        mensaje("Email es requerido", txtEmail);
    } else if (!correo.test(txtEmail.value)) {
        resultado = false;
        mensaje("Email no es correcto", txtEmail);
    }
    
    if (!resultado) {
        event.preventDefault(); // detener el evento  //stop form from submitting
    }
    return resultado;

    function falso() {
        return false;
    }
}

function validarUC(event){
    var resultado = true;
    var txtNombre = document.getElementById("nombre");
    var asunt = document.getElementById("asuntos");
    var txtTelefono = document.getElementById("telefono");
    var txtEmail = document.getElementById("correo");
    var aceptar = document.getElementById("check");
    var letra = /^[a-z ,.'-]+$/i;
    var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var telefonoreg = /^[0-9]{10}$/g;
    
    limpiarMensajes();

    if (txtNombre.value === '') {
        resultado = false;
        mensaje("Debe ingresar el nombre", txtNombre);
    } else if (!letra.test(txtNombre.value)) {
        resultado = false;
        mensaje("Solo se debe ingresar letras", txtNombre);
    } else if (txtNombre.value.length > 20) {
        resultado = false;
        mensaje("Solo se permiten un maximo de 20 caracteres", txtNombre);
    }
    //validacion de un checkbox
    if (!aceptar.checked) {
        resultado = false;
        mensaje("Debe aceptar los teminos y condiciones.", aceptar);
    }
    
    if (asunt.value === null || asunt.value === '0') {
        respuesta = false;
         mensaje("Seleccionar un tipo de asunto", asunt);
     }
    //validacion telefono
    if (txtTelefono.value ==="") {
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
    
    if (!resultado) {
        event.preventDefault(); // detener el evento  //stop form from submitting
    }
    return resultado;

    function falso() {
        return false;
    }

}
function mensaje(cadenaMensaje, elemento) {
    elemento.focus();
    var nodoPadre = elemento.parentNode;
    var nodoMensaje = document.createElement("span");
    nodoMensaje.textContent = cadenaMensaje;
    nodoMensaje.style.color = "white";
    nodoMensaje.style.display = "block";
    nodoMensaje.setAttribute("class", "mensajeError");
    nodoPadre.appendChild(nodoMensaje);

}

function limpiarMensajes() {
    var mensajes = document.querySelectorAll(".mensajeError");
    for (let i = 0; i < mensajes.length; i++) {
        mensajes[i].remove(); // remueve o elimina un elemento de mi doc html
    }

}


