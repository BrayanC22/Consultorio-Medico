<?php

class Cita {

    //properties
    public $id, $nombres, $correo, $telefono, $especialidad, $especialista, $clinica, $acuerdo;

    function __construct() {
        
    }
       function getId() {
        return $this->id;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEspecialidad() {
        return $this->especialidad;
    }
    function getEspecialista() {
        return $this->especialista;
    }

    function getClinica() {
        return $this->clinica;
    }

    function getAcuerdo() {
        return $this->acuerdo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }
    function setEspecialista($especialista) {
        $this->especialista = $especialista;
    }

    function setClinica($clinica) {
        $this->clinica = $clinica;
    }

    function setAcuerdo($acuerdo) {
        $this->acuerdo = $acuerdo;
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
