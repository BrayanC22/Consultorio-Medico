<?php

require_once 'modelo/dao/CursosModelo.php';
require_once 'modelo/dto/Curso.php';

class CursosControlador {

    private $curso;

    public function __construct() {
        $this->curso = new CursosModelo();
    }

    // funciones del controlador
    public function index() {
        // llamar al modelo
        $resultados = $this->curso->listar();

        //llamo a la vista
        //require_once 'vista/citas/citas.nueva.php';
        require_once 'vista/cursos/cursos.list.php';

    }

    public function buscar() {
        // leer parametros
        $busqueda = $_POST['busqueda'];
    
        //comunica con el modelo
        $resultados = $this->curso->buscar($busqueda);
    
        // comunicarnos a la vista
        require_once 'vista/cursos/cursos.list.php';
      //  echo json_encode($resultados);
    
    }
    
public function nuevo() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {// guardar
    // verificaciones
           //if(!isset($_POST['codigo'])){ header('');}
        // leer parametros
        $nombres = htmlentities($_POST['nombres']);
        $apellidos = htmlentities($_POST['apellidos']);
        $correo = isset($_POST['correo']) ? htmlentities($_POST['correo']) : '';
        $telefono = htmlentities($_POST['telefono']);
        $tiempo = htmlentities($_POST['tiempo']);
        $id_productocurso = htmlentities($_POST['productoscurso']);
           
            //llamar al modelo
            $exito = $this->curso->insertar($nombres, $apellidos, $correo, $telefono, $tiempo, $id_productocurso);
            $msj = 'Curso guardada exitosamente';
            $color = 'primary';
            if (!$exito) {
                $msj = "No se pudo realizar el guardado";
                $color = "danger";
            }
      if(!isset($_SESSION)){ session_start();};
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;
    //llamar a la vista
          //  $this->index();
        header('Location:index.php?c=cursos&f=index');
       
    } else { // mostrar el formulario
        require_once 'modelo/dao/Productoscurso.php';
        $mod = new Productoscurso();
        $Productoscurso = $mod->listar();

        // mostrar el formulario de nuevo producto
        require_once 'vista/cursos/cursos.nueva.php';
    }
}

// metodo que usa DTO Producto
public function nuevo2() {
    //cuando la solicitud es por post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {// insertar el producto
        // leer los parametros del formulario
        // verificaciones
        //if(!isset($_POST['codigo'])){ header('');}
        $cur = new Curso();
        $cur->setNombres(htmlentities($_POST['nombres']));
        $cur->setApellidos(htmlentities($_POST['apellidos']));
        $cur->setCorreo(htmlentities($_POST['correo']));
        $cur->setTelefono(htmlentities($_POST['telefono']));
        $cur->setTiempo(htmlentities($_POST['tiempo']));
        $cur->setId_productocurso(htmlentities($_POST['productoscurso']));

        //comunicarme con el modelo
        $exito = $this->curso->insertar2($cur);
        $msj = 'Curso guardada exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo realizar el guardado";
            $color = "danger";
        }
        if (!isset($_SESSION)) {
            session_start();
        };
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;
        //llamar a la vista
        //   $this->index();
        header('Location:index.php?c=cursos&f=index');
    } else {
        require_once 'modelo/dao/Productoscurso.php';
        $mod = new Productoscurso();
        $Productoscurso = $mod->listar();

        // comunicarse con la vista
        require_once 'vista/cursos/cursos.nueva.php';
    }
}
    
    public function eliminar(){
        // leer parametros
      $id = htmlentities($_GET['id_cursos']);

      $exito = $this->curso->eliminar($id);
      $msj = 'Curso eliminado exitosamente';
      $color = 'primary';
      if (!$exito) {
          $msj = "No se pudo realizar la eliminacion";
          $color = "danger";
      }
      session_start();
      $_SESSION['mensaje'] = $msj;
      $_SESSION['color'] = $color;

      //llamar a la vista
      header('Location:index.php?c=cursos&f=index'); // redireccionamiento, causa un cambio en la url
      
  }

  public function editar() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar

      // leer parametros
      $id = htmlentities($_POST['id']);
      $nombres = htmlentities($_POST['nombres']);
        $apellidos = htmlentities($_POST['apellidos']);
        $correo = isset($_POST['correo']) ? htmlentities($_POST['correo']) : '';
        $telefono = htmlentities($_POST['telefono']);
        $tiempo = htmlentities($_POST['tiempo']);
        $id_productocurso = htmlentities($_POST['id_productocurso']);
        

      //llamar al modelo
      $exito = $this-> curso->actualizar($id,$nombres, $apellidos, $correo, $telefono, $tiempo, $id_productocurso);
      $msj = 'El Curso se ha actualizado exitosamente';
      $color = 'primary';
      if (!$exito) {
          $msj = "No se pudo realizar la actualizacion";
          $color = "danger";
      }
      if(!isset($_SESSION)){ session_start();};
      $_SESSION['mensaje'] = $msj;
      $_SESSION['color'] = $color;

      //llamar a la vista
      header('Location:index.php?c=cursos&f=index');
  } else { 

    require_once 'modelo/dao/Productoscurso.php';
    $mod = new Productoscurso();
    $Productoscurso = $mod->listar();

    //leeer parametros
    $id= $_REQUEST['id_cursos'];
    
    //comunicando con el modelo
    $cur = $this->curso->buscarxId($id);
    // mostrar el formulario de editar producto
    require_once 'vista/cursos/cursos.editar.php';
}

  }
}