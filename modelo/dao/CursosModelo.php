<?php

require_once 'config/Conexion.php';

class CursosModelo
{

    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function listar()
    {
        // sql de la sentencia
        $sql = "SELECT cu.id_cursos, cu.nombres, cu.apellidos, cu.correo, cu.telefono, cu.tiempo,pro.produc_nombre 
        from cursos cu 
        JOIN productoscurso pro on cu.id_productocurso=pro.id_productocurso";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorna datos para el controlador
        return $resultados;
    }



    public function insertar($nombres, $apellidos, $correo, $telefono, $tiempo, $id_productocurso)
    {
        //sentencia sql
        $sql = "INSERT INTO cursos(id_cursos, nombres, apellidos, correo,telefono, tiempo,id_productocurso) 
        values(NULL, :nom, :ape,:corr,:telef,:tiemp,:produc)";

        //bind parameters
        $sentencia = $this->con->prepare($sql);
        // $fechaActual = new DateTime('NOW');
        // $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'nom' => $nombres,
            'ape' => $apellidos,
            'corr' => $correo,
            'telef' => $telefono,
            'tiemp' => $tiempo,
            'produc' => $id_productocurso

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
    public function insertar2(Curso $cur)
    {
        //sentencia sql
        $sql = "INSERT INTO cursos(id_cursos, nombres, apellidos, correo,telefono, tiempo,id_productocurso) 
        values(NULL, :nom, :ape,:corr,:telef,:tiemp,:produc)";

        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
            'nom' =>  $cur->getNombres(),
            'ape' =>  $cur->getApellidos(),
            'corr' =>  $cur->getCorreo(),
            'telef' =>  $cur->getTelefono(),
            'tiemp' =>  $cur->getTiempo(),
            'produc' =>  $cur->getId_productocurso(),
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
        $sql = "delete from cursos where id_cursos = :id";
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


    public function actualizar($id,$nombres, $apellidos, $correo, $telefono, $tiempo, $id_productocurso)
    {
        $sql = "UPDATE Cursos set nombres=:nombres, apellidos=:apellidos, correo =:correo, telefono =:telefono, tiempo=:tiempo,id_productocurso =:id_productocurso
         WHERE id_cursos=:id";

        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);

        $data = [
            'id' => $id,
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'correo' => $correo,
            'telefono' => $telefono,
            'tiempo' => $tiempo,
            'id_productocurso' => $id_productocurso

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
        $sql = "SELECT cu.id_cursos, cu.nombres, cu.apellidos, cu.correo, cu.telefono, cu.tiempo,pro.produc_nombre 
        from cursos cu 
        JOIN productoscurso pro on cu.id_productocurso=pro.id_productocurso where id_cursos=:id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $curso = $stmt->fetch(PDO::FETCH_ASSOC); // fetch retorna el primer registro
        // retornar resultados
        return $curso;
    }


    public function buscar($parametro)
    {
        $sql = "SELECT cu.id_cursos, cu.nombres, cu.apellidos, cu.correo, cu.telefono, cu.tiempo,pro.produc_nombre 
        from cursos cu 
        JOIN productoscurso pro on cu.id_productocurso=pro.id_productocurso where id_cursos=$parametro";
        // preparar la sentencia
        $sentencia = $this->con->prepare($sql);
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultados; 
      
    }
}
