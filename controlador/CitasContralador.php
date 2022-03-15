<?php

require_once 'modelo/dao/CitasModelo.php';
require_once 'modelo/dto/Cita.php';

class CitasControlador {

    private $cita;

    public function __construct() {
        $this->cita = new CitasModelo();
    }

    // funciones del controlador
    public function index() {
        // llamar al modelo
        $resultados = $this->cita->listar();

        //llamo a la vista
        //require_once 'vista/citas/citas.nueva.php';
        require_once 'vista/citas/citas.list.php';

    }

    public function buscar() {
        // leer parametros
        $busqueda = $_POST['busqueda'];
    
        //comunica con el modelo
        $resultados = $this->cita->buscar($busqueda);
    
        // comunicarnos a la vista
        require_once 'vista/citas/citas.list.php';
    
    }
    
public function nuevo() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {// guardar
    // verificaciones
           //if(!isset($_POST['codigo'])){ header('');}
        // leer parametros
        $nombres = htmlentities($_POST['nombres']);
        $correo = isset($_POST['correo']) ? htmlentities($_POST['correo']) : '';
        $telefono = htmlentities($_POST['telefono']);
        $especialidad = htmlentities($_POST['especialidad']);
        $especialista = htmlentities($_POST['especialista']);
        $clinica = htmlentities($_POST['clinica']);
        $acuerdo = htmlentities($_POST['acuerdo']);
           
            //llamar al modelo
            $exito = $this->cita->insertar($nombres, $correo, $telefono, $especialidad, $especialista, $clinica, $acuerdo);
            $msj = 'Cita guardada exitosamente';
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
        header('Location:index.php?c=citas&f=index');
       
    } else { // mostrar el formulario
        require_once 'modelo/dao/Especialidad.php';
        $mod = new Especialidad();
        $Especialidad = $mod->listar();

        require_once 'modelo/dao/Especialista.php';
        $mod1 = new Especialista();
        $Especialista = $mod1->listar();


        require_once 'modelo/dao/Clinica.php';
        $mod2 = new Clinica();
        $Clinica = $mod2->listar();


        // mostrar el formulario de nuevo producto
        require_once 'vista/citas/citas.nueva.php';
    }
}

// metodo que usa DTO Producto
public function nuevo2() {
    //cuando la solicitud es por post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {// insertar el producto
        // leer los parametros del formulario
        // verificaciones
        //if(!isset($_POST['codigo'])){ header('');}
        $cit = new Cita();
        $cit->setNombres(htmlentities($_POST['nombres']));
        $cit->setCorreo(htmlentities($_POST['correo']));
        $cit->setTelefono(htmlentities($_POST['telefono']));
        $cit->setEspecialidad(htmlentities($_POST['especialidad']));
        $cit->setEspecialista(htmlentities($_POST['especialista']));
        $cit->setClinica(htmlentities($_POST['clinica']));
        $cit->setAcuerdo(htmlentities($_POST['acuerdo']));

        //comunicarme con el modelo
        $exito = $this->cita->insertar2($cit);
        $msj = 'Cita guardada exitosamente';
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
        header('Location:index.php?c=citas&f=index');
    } else {
        require_once 'modelo/dao/Especialidad.php';
        $mod = new Especialidad();
        $Especialidad = $mod->listar();

        require_once 'modelo/dao/Especialista.php';
        $mod1 = new Especialista();
        $Especialista = $mod1->listar();


        require_once 'modelo/dao/Clinica.php';
        $mod2 = new Clinica();
        $Clinica = $mod2->listar();


        // comunicarse con la vista
        require_once 'vista/citas/citas.nueva.php';
    }
}
    
    public function eliminar(){
        // leer parametros
      $id = htmlentities($_GET['id_citas']);

      $exito = $this->cita->eliminar($id);
      $msj = 'Cita eliminada exitosamente';
      $color = 'primary';
      if (!$exito) {
          $msj = "No se pudo realizar la eliminacion";
          $color = "danger";
      }
      session_start();
      $_SESSION['mensaje'] = $msj;
      $_SESSION['color'] = $color;

      //llamar a la vista
      header('Location:index.php?c=citas&f=index'); // redireccionamiento, causa un cambio en la url
      
  }

  public function editar() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar

       // leer parametros
        $id = htmlentities($_POST['id']);
        $nombres = htmlentities($_POST['nombres']);
        $correo = isset($_POST['correo']) ? htmlentities($_POST['correo']) : '';
        $telefono = htmlentities($_POST['telefono']);
        $especialidad = htmlentities($_POST['especialidad']);
        $especialista = htmlentities($_POST['especialista']);
        $clinica = htmlentities($_POST['clinica']);
        $acuerdo = htmlentities($_POST['acuerdo']);
        
      
      //llamar al modelo
      $exito = $this->cita->actualizar($id,$nombres, $correo, $telefono, $especialidad, $especialista, $clinica, $acuerdo);
      $msj = 'Cita se ha actualizado exitosamente';
      $color = 'primary';
      if (!$exito) {
          $msj = "No se pudo realizar la actualizacion";
          $color = "danger";
      }
      if(!isset($_SESSION)){ session_start();};
      $_SESSION['mensaje'] = $msj;
      $_SESSION['color'] = $color;

      //llamar a la vista
      header('Location:index.php?c=citas&f=index');
  } else { 

    require_once 'modelo/dao/Especialidad.php';
    $mod = new Especialidad();
    $Especialidad = $mod->listar();

    require_once 'modelo/dao/Especialista.php';
    $mod1 = new Especialista();
    $Especialista = $mod1->listar();


    require_once 'modelo/dao/Clinica.php';
    $mod2 = new Clinica();
    $Clinica = $mod2->listar();


    //leeer parametros
    $id= $_REQUEST['id_citas'];
    
    //comunicando con el modelo
    $cit = $this->cita->buscarxId($id);
    // mostrar el formulario de editar producto
    require_once 'vista/citas/citas.editar.php';
}

  }
}