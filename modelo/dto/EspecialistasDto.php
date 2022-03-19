<?php 
class EspecialistasDto{
    public $id, $tipoDocumento, $numDocumento, $nombre, $sexo, $telefono, $correo, $nEstudio, $especialidad, $experiencia;

    function _constructor(){}
    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }
    function getTipoDocumento(){
        return $this->tipoDocumento;
    }
    function setTipoDocumento($tipoDocumento){
        $this->tipoDocumento = $tipoDocumento;
    }
    function getNumDocumento(){
      return $this->numDocumento;
    }
    function setNumDocumento($numDocumento){
        $this->numDocumento = $numDocumento;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function getSexo(){
        return $this->sexo;
    }
    function setSexo($sexo){
        $this->sexo = $sexo;
    }
    function getTelefono(){
        return $this->telefono;
    }
    function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    function getCorreo(){
        return $this->correo;
    }
    function setCorreo($correo){
        $this->correo = $correo;
    }
    function getNEstudio(){
        return $this->nEstudio;
    }
    function setNEstudio($nEstudio){
        $this->nEstudio = $nEstudio;
    }
    function getEspecialidad(){
        return $this->especialidad;
    }
    function setEspecialidad($especialidad){
        $this->especialidad =$especialidad;
    }
    function getExperiencia(){
        return $this->experiencia;
    }
    function setExperiencia($experiencia){
        $this->experiencia = $experiencia;
    }
    function getEstado(){
        return $this->estado;
    }
    function setEstado($estado){
        $this->estado = $estado;
    }

}
?>