<?php

require_once 'config/Conexion.php';

class ConsultaModelo
{

    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function listar()
    {
        // sql de la sentencia
        $sql = "SELECT id_consulta, NombreUsuario, email, celular,Asunto, Descripcion, Subscripcion from consultas";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorna datos para el controlador
        return $resultados;
    }


    
    public function insertar($nombre, $email, $celular, $asunto, $descripcion, $subscripcion)
    {
        //sentencia sql
        $sql = "INSERT INTO consultas(id_consulta, NombreUsuario, email, celular, Asunto, Descripcion, Subscripcion) 
        VALUES(NULL, :nom, :mail,:cel,:asun,:descrp, :subs)";
        //bind parameters
        $sentencia = $this->con->prepare($sql);
        // $fechaActual = new DateTime('NOW');
        // $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'nom' => $nombre,
            'mail' => $email,
            'cel' => $celular,
            'asun' => $asunto,
            'descrp' => $descripcion,
            'subs' => $subscripcion

        ];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) { // verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
    }

    


    public function insertar2(Consulta $consult)
    {
        //sentencia sql
        $sql = "INSERT INTO `consultas` (`id_consulta`, `NombreUsuario`, `email`, `celular`, `Asunto`, `Descripcion`, `Subscripcion`) VALUES 
        values(NULL, :nom, :mail,:cel,:asunt,:descrip,:subs)";

        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
            'nom' =>  $consult->getNombre(),
            'mail' =>  $consult->getEmail(),
            'cel' =>  $consult->getCelular,
            'asunt' =>  $consult->getAsunto,
            'descrip' =>  $consult->getDescripcion,
            'subs' =>  $consult->getSubscripcion,
        ];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) { // verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
    }




    public function eliminar($id)
    {
        //prepare
        $sql = "delete from consultas where id_consulta = :id";
        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);

        $data = [
            'id' => $id
        ];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) { // verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
    }





    public function actualizar($Id,$nombres, $email, $celular, $asunto, $descripcion, $subscripcion)
    {

        $sql = "UPDATE consultas set NombreUsuario =:nom, email = :mail, celular = :cel, Asunto=:asunt, Descripcion=:descrp,Subscripcion=:subs
        WHERE id_consulta=:id";

        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);

        $data = [
            'id' => $Id,
            'nom' => $nombres,
            'mail' => $email,
            'cel' => $celular,
            'asunt' => $asunto,
            'descrp' => $descripcion,
            'subs' => $subscripcion
        
        ];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) { // verificar si se inserto 
            //rowCount permite obtner el numero de filas afectadas
            return false;
        }
        return true;
    }



    // sirve para el metodo actalizar

    public function buscarxId($id)
    { // buscar un producto por su id
        $sql = "SELECT id_consulta, NombreUsuario, email, celular,Asunto, Descripcion, Subscripcion from consultas where id_consulta=:id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $consult = $stmt->fetch(PDO::FETCH_ASSOC); // fetch retorna el primer registro
        // retornar resultados
        return $consult;
    }


    public function buscar($parametro)
    {
        $sql = "SELECT id_consulta, NombreUsuario, email, celular,Asunto, Descripcion, Subscripcion from consultas where NombreUsuario = '$parametro'";
        $sentencia = $this->con->prepare($sql);
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultados; 
        
        
    }
}
