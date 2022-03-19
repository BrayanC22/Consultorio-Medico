
        var form = document.querySelector("#form");
        form.addEventListener('submit', validar);
        let cont = 0;

        function validar(event) {
            var resultado = true;
            var txtradio = document.getElementsByName("dni");
            var txtCedula = document.getElementById("cedula");
            var txtNombre = document.getElementById("nombre");
            var txtExperiencia = document.getElementById("experiencia");
            var radiosGenero = document.getElementsByName("sexo");
            var preparacion = document.getElementById("grado");
            var Carrera = document.getElementById("profesion");
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
                    let res = txtradio[i].value;
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
            } else if (!cedulag.test(txtCedula.value)) {
                resultado = false;
                mensaje("La cedula o pasaporte debe ser de 10 digitos", txtCedula);
            }

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

            //Experiencia
            if (txtExperiencia.value === "") {
                resultado = false;
                mensaje("Experiencia es requerida", txtExperiencia);
            } else if (txtExperiencia.value < 2) {
                resultado = false;
                mensaje("Experiencia debe ser mayor que 1", txtExperiencia);
            } else if (txtExperiencia.value > 100) {
                resultado = false;
                mensaje("Experiencia debe ser menor a 100", txtExperiencia);
            }
            //validacion de un checkbox
            if (!aceptar.checked) {
                resultado = false;
                mensaje("Debe aceptar los teminos y condiciones.", aceptar);
            }
            /* return respuesta;*/
            //validacion radio button
            var sel = false;
            for (let i = 0; i < radiosGenero.length; i++) {
                if (radiosGenero[i].checked) {
                    sel = true;
                    let res = radiosGenero[i].value;

                    break;
                }
            }
            if (!sel) {
                resultado = false;
                mensaje("Debe seleccionar un genero", radiosGenero[0]);
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
            if (!resultado) {
                event.preventDefault(); // detener el evento  //stop form from submitting
            }
            return resultado;

            function falso() {
                return false;
            }
        }
        function validarAC(){
            var resultado = true;
            var txtCedula = document.getElementById("cedula");
            var txtNombre = document.getElementById("nombre");
            var txtExperiencia = document.getElementById("experiencia");
            var preparacion = document.getElementById("grado");
            var Carrera = document.getElementById("profesion");
            var txtTelefono = document.getElementById("telefono");
            var txtEmail = document.getElementById("correo");

            var letra = /^[a-z ,.'-]+$/i;
            var correo = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            var telefonoreg = /^[0-9]{10}$/g;
            var cedulag = /^[0-9]{10}$/g;

            limpiarMensajes();
            
            if (txtCedula.value === "") {
                resultado = false;
                mensaje("La cedula es requerida", txtCedula);
            } else if (!cedulag.test(txtCedula.value)) {
                resultado = false;
                mensaje("La cedula o pasaporte debe ser de 10 digitos", txtCedula);
            }

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

            //Experiencia
            if (txtExperiencia.value === "") {
                resultado = false;
                mensaje("Experiencia es requerida", txtExperiencia);
            } else if (txtExperiencia.value < 2) {
                resultado = false;
                mensaje("Experiencia debe ser mayor que 1", txtExperiencia);
            } else if (txtExperiencia.value > 100) {
                resultado = false;
                mensaje("Experiencia debe ser menor a 100", txtExperiencia);
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
    