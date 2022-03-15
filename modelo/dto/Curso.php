<?php

class Curso {

    //properties
    public $id, $nombres, $apellidos, $correo, $telefono, $tiempo, $id_productocurso;

    function __construct() {
        
    }
       function getId() {
        return $this->id;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getTelefono() {
        return $this->telefono;
    }
    function getTiempo() {
        return $this->tiempo;
    }

    function getId_productocurso() {
        return $this->id_productocurso;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
    function setTiempo($tiempo) {
        $this->tiempo = $tiempo;
    }

    function setId_productocurso($id_productocurso) {
        $this->id_productocurso = $id_productocurso;
    }

    
    // Methods get y set parametrizados
    public function __set($nombre, $valor) {
        // Verifica que la propiedad exista
        if (property_exists('Curso', $nombre)) {
            $this->$nombre = $valor;
        } else {
            echo $nombre . " No existe.";
        }
    }

    public function __get($var) {
        // Verifica que exista la propiedad
        if (property_exists('Curso', $var)) {
            return $this->$var;
        }
// Retorna null si no existe
        return NULL;
    }
}
