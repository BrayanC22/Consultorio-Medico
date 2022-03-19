<?php
require_once 'modelo/dao/EspecialistasDao.php';
require_once 'modelo/dto/EspecialistasDto.php';
class EspecialistasControlador{
private $modelo;

public function __construct(){
    $this->modelo = new EspecialistasDao();
}

public function presentar(){
    require_once 'vista/especialistas/especialistas.Registrar.php';
}

public function index(){
    $resultados = $this->modelo->listar();
    require_once 'vista/especialistas/especialistas.presentar.php';
}

public function buscar(){
    $busqueda = $_POST["busqueda"];
    if (empty($_POST['busqueda'])){
        //comunica con el modelo
        $resultados = $this->modelo->listar();
        }else{
            
            $resultados = $this->modelo->buscar($busqueda);
        }
    require_once 'vista/especialistas/especialistas.presentar.php';
}

public function insert(){
   if($_SERVER['REQUEST_METHOD']=='POST'){
       $espe = new EspecialistasDto();
       $espe->setTipoDocumento(htmlentities($_POST['dni']));
       $espe->setNumDocumento(htmlentities($_POST['cedula']));
       $espe->setNombre(htmlentities($_POST['nom']));
       $espe->setSexo(htmlentities($_POST['sexo']));
       $espe->setTelefono(htmlentities($_POST['telef']));
       $espe->setCorreo(htmlentities($_POST['correo']));
       $espe->setNEstudio(htmlentities($_POST['preparacion']));
       $espe->setEspecialidad(htmlentities($_POST['Carrera']));
       $espe->setExperiencia(htmlentities($_POST['expe']));
       $estado=(!isset($_POST['estado']))? 1: 0;
       $espe->setEstado($estado);
       $exito = $this->modelo->insertar($espe);
       $msj = "Registro guardado con exito";
       if(!$exito){
         $msj = "Error al realizar el registro";
       }
       header('Location:index.php?c=especialistas&f=index');
       require_once 'vista/especialistas/especialistas.Registrar.php';
    }


}

public function editar(){
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $data = [
        $id = htmlentities($_POST['txtid']),
        $cdu = htmlentities($_POST['txtndocum']),
        $nombre = htmlentities($_POST['txtnombre']),
        $telef = htmlentities($_POST['txttelefono']),
        $correo = htmlentities($_POST['txtemail']),
        $prepa = htmlentities($_POST['txtprepa']),
        $espe = htmlentities($_POST['txtespe']),
        $expe = htmlentities($_POST['txtexpe']),
    ];
      //llamar al modelo
      $exito = $this->modelo->actualizar($cdu, $nombre, $telef, $correo, $prepa, $espe, $expe, $id);
      $msj = 'Producto actualizado exitosamente';
      $color = 'primary';
      if (!$exito) {
          $msj = "No se pudo realizar la actualizacion";
          $color = "danger";
      }
       if(!isset($_SESSION)){ session_start();};
      $_SESSION['mensaje'] = $msj;
      $_SESSION['color'] = $color;
  //llamar a la vista
      //  $this->index();
         header('Location:index.php?c=especialistas&f=index');
     
  } else { // mostrar el formulario, cargando los datos del producto

    require_once 'modelo/dao/EspecialistasDAO.php';
     // require_once 'modelo/dao/CategoriasDAO.php';
      $mod = new EspecialistasDao();
      $categorias = $mod->listar();

      //leeer parametros
      $id= $_REQUEST['id'];
      
      //comunicando con el modelo
      $fila = $this->modelo->buscarxId($id);
      // mostrar el formulario de editar producto


     require_once 'vista/especialistas/especialistas.Actualizar.php';
    }
}

public function eliminar(){
    //leer parametros
    $id = $_REQUEST["id"];
    $cedula = 'numDocumento';
    $nom = 'nombre_completo';
    $exito = $this->modelo->eliminar($id, $cedula, $nom);
    $mensaje = "Registro elinado con exito";
    if(!$exito){
        $mensaje = "Error al eliminar el registro";
    }
    if(!isset($_SESSION)){ session_start();};
            $_SESSION['mensaje'] = $mensaje;
    header('Location:index.php?c=especialistas&f=index');
}

}
?>