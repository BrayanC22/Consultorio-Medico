function validarFormulario(){
    var resultado=true;
    var txtNombres = document.getElementById("nombres");
    var txtTelefono = document.getElementById("telefono");
    var selectEspecialidad = document.getElementById("especialidad");
    var selectEspecialista = document.getElementById("especialista");
    var txtemail = document.getElementById("correo");
    var selectclinica = document.getElementById("clinica");
    var chkSuscrip = document.getElementById("acuerdo");
   

    var letra = /^[a-z ,.'-]+$/i;// letrasyespacio   ///^[A-Z]+$/i;// solo letras
    var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var telefonoreg = /^[0-9]{10}$/g; // para validar datos que deban tener 10 numeros
    
    limpiarAdvertencias();
    
    //validacion para nombres
     if (txtNombres.value === '') {
        respuesta = false;
        mensaje("Nombre es obligatorio", txtNombres);
    } else if (!letra.test(txtNombres.value)) {
      respuesta = false;
        mensaje("Nombre solo debe contener letras", txtNombres);
    } else if (txtNombres.value.length > 20) {
      respuesta = false;
        mensaje("Nombre maximo 20 caracteres", txtNombres);
    }
   
   //validacion telefono
    if (txtTelefono.value === "") {
      respuesta = false;
        mensaje("Telefono es obligatorio", txtTelefono);
    } else if (!telefonoreg.test(txtTelefono.value)) {
      respuesta = false;
        mensaje("Telefono debe ser tener 10 digitos", txtTelefono);
    }

    //validacion email
    if (txtemail.value === "") {
      respuesta = false;
        mensaje("Email es obligatorio", txtemail);
    } else if (!correo.test(txtemail.value)) {
      respuesta = false;
        mensaje("Email no es correcto", txtemail);
    }

    //validacion combo box
    if (selectEspecialista.value === null || selectEspecialista.value === '0') {
       respuesta = false;
        mensaje("Seleccionar un especialista", selectEspecialista);
    }
     if (selectclinica.value === null || selectclinica.value === '0') {
        respuesta = false;
        mensaje("Seleccionar un clinica", selectclinica);
    }
    if (selectEspecialidad.value === null || selectEspecialidad.value === '0') {
      respuesta = false;
      mensaje("Seleccionar un especialidad", selectEspecialidad);
    }

//validacion de un checkbox
    if(!chkSuscrip.checked){
      resultado=false;
      mensaje("Debe marcar la opcion", chkSuscrip);
    }
    return respuesta;
}

 
function mensaje(cadenaMensaje, elemento) {
    elemento.focus();
    var nodoPadre = elemento.parentNode;
    var nodoMensaje = document.createElement("span");
    nodoMensaje.innerHTML = cadenaMensaje;
    nodoMensaje.style.color = "white";
    nodoMensaje.style.length=4;
    nodoMensaje.display = "block";
    nodoMensaje.setAttribute("class", "mensaje");
    nodoPadre.appendChild(nodoMensaje);
}

function limpiarAdvertencias() {
    var mensajes = document.querySelectorAll(".mensaje");
    for (let i = 0; i < mensajes.length; i++) {
        mensajes[i].remove();
 }
}