<?php

require_once 'modelo/dao/ConsultaModelo.php';
require_once 'modelo/dto/Consulta.php';

class ConsultaControlador
{

    private $consulta;

    public function __construct()
    {
        $this->consulta = new ConsultaModelo();
    }

    // funciones del controlador
    public function index()
    {
        // llamar al modelo
        $resultados = $this->consulta->listar();

        //llamo a la vista
        //require_once 'vista/citas/citas.nueva.php';
        require_once 'vista/Consultas/ReadConsulta.php';
    }

    public function buscar()
    {
        // leer parametros
        $busqueda = $_POST['busqueda'];
        if (empty($_POST['busqueda'])){
            //comunica con el modelo
            $resultados = $this->consulta->listar();
            }else{
                
                $resultados = $this->consulta->buscar($busqueda);
            }
        // comunicarnos a la vista
        require_once 'vista/Consultas/ReadConsulta.php';
    }

    public function nuevo()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // guardar
            // verificaciones
            //if(!isset($_POST['codigo'])){ header('');}
            // leer parametros
            $nombre = htmlentities($_POST['txtnombre']);
            $email = isset($_POST['txtemail']) ? htmlentities($_POST['txtemail']) : '';
            $celular = htmlentities($_POST['txtcelular']);
            $asunto = htmlentities($_POST['asunto']);
            $descripcion = htmlentities($_POST['txtDescripcion']);
            $subscripcion = isset($_POST['subscripcion']) ? htmlentities($_POST['subscripcion']) : 'false';
            //llamar al modelo
            $exito = $this->consulta->insertar($nombre, $email, $celular, $asunto, $descripcion, $subscripcion);
            $msj = 'Consulta registrada exitosamente';
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
            //  $this->index();
            header('Location:index.php?c=consulta&f=index');
        } else { // mostrar el formulario
            // mostrar el formulario de nuevo producto
            require_once 'vista/Consultas/CreateConsulta.php';
        }
    }

    // metodo que usa DTO Producto
    public function nuevo2()
    {
        //cuando la solicitud es por post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // insertar el producto
            // leer los parametros del formulario
            // verificaciones
            //if(!isset($_POST['codigo'])){ header('');}
            $consult = new Consulta();
            $consult->setNombre(htmlentities($_POST['nombres']));
            $consult->setEmail(htmlentities($_POST['email']));
            $consult->setCelular(htmlentities($_POST['celular']));
            $consult->setAsunto(htmlentities($_POST['asunto']));
            $consult->setDescripcion(htmlentities($_POST['descripcion']));
            $consult->setSubscripcion(htmlentities($_POST['subscripcion']));

            //comunicarme con el modelo
            $exito = $this->consulta->insertar2($consult);
            $msj = 'Consulta guardada exitosamente';
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

            // comunicarse con la vista
            require_once 'vista/Consultas/CreateConsulta.php';
        }
    }

    public function eliminar()
    {
        // leer parametros
        $id = htmlentities($_GET['id_consulta']);

        $exito = $this->consulta->eliminar($id);
        $msj = 'Consulta eliminada exitosamente';
        $color = 'primary';
        if (!$exito) {
            $msj = "No se pudo realizar la eliminacion";
            $color = "danger";
        }
        session_start();
        $_SESSION['mensaje'] = $msj;
        $_SESSION['color'] = $color;

        //llamar a la vista
        header('Location:index.php?c=Consulta&f=index'); // redireccionamiento, causa un cambio en la url

    }

    public function editar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // actualizar

            // leer parametros
            $id = htmlentities($_POST['txtid']);
            $nombres = htmlentities($_POST['txtnombre']);
            $email = isset($_POST['txtemail']) ? htmlentities($_POST['txtemail']) : '';
            $celular = htmlentities($_POST['txtcelular']);
            $asunto = htmlentities($_POST['asunto']);
            $descripcion = htmlentities($_POST['txtDescripcion']);
            $subscripcion = isset($_POST['subscripcion']) ? htmlentities($_POST['subscripcion']) : 'false';


            //llamar al modelo
            $exito = $this->consulta->actualizar($id, $nombres, $email, $celular, $asunto, $descripcion, $subscripcion);
            $msj = 'La consulta se ha actualizado exitosamente';
            $color = 'primary';
            if (!$exito) {
                $msj = "No se pudo realizar la actualizacion";
                $color = "danger";
            }
            if (!isset($_SESSION)) {
                session_start();
            };
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;

            //llamar a la vista
            header('Location:index.php?c=consulta&f=index');
        } else {
            //leeer parametros
            $id = $_REQUEST['id_consulta'];

            //comunicando con el modelo
            $consul = $this->consulta->buscarxId($id);
            // mostrar el formulario de editar producto
            require_once 'vista/Consultas/UpdateConsulta.php';
        }
    }
}
