<?php

class Consulta {

    //properties
    public $id, $nombreUsuario, $email, $celular, $asunto, $descripcion, $subscripcion;

    function __construct() {
        
    }
       function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombreUsuario;
    }

    function getEmail() {
        return $this->email;
    }

    function getCelular() {
        return $this->celular;
    }

    function getAsunto() {
        return $this->asunto;
    }
    function getDescripcion() {
        return $this->descripcion;
    }

    function getSubscripcion() {
        return $this->subscripcion;
    }

    /*--------------------- Setters ---------------------*/


    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombres) {
        $this->nombreUsuario = $nombres;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    function setSubscripcion($subscripcion) {
        $this->subscripcion = $subscripcion;
    }

    
    // Methods get y set parametrizados
    public function __set($nombre, $valor) {
        // Verifica que la propiedad exista
        if (property_exists('Cita', $nombre)) {
            $this->$nombre = $valor;
        } else {
            echo $nombre . " No existe.";
        }
    }

    public function __get($var) {
        // Verifica que exista la propiedad
        if (property_exists('Cita', $var)) {
            return $this->$var;
        }
// Retorna null si no existe
        return NULL;
    }

    
    
}
