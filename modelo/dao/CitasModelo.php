<?php

require_once 'config/Conexion.php';

class CitasModelo
{

    private $con;

    public function __construct()
    {
        $this->con = Conexion::getConexion();
    }

    public function listar()
    {
        // sql de la sentencia
        $sql = "SELECT ci.id_citas, ci.nombres, ci.correo, ci.telefono, esp.especialidad_nombre, es.especialista_nombre, cli.clinica_nombre,ci.acuerdo 
from citas ci JOIN  especialidad esp on ci.cita_id_especialidad=esp.id_especialidad  
JOIN  especialista es on ci.cita_id_especialista=es.id_especialista 
JOIN clinica cli on ci.cita_id_clinica = cli.id_clinica";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorna datos para el controlador
        return $resultados;
    }



    public function insertar($nombres, $correo, $telefono, $especialidad, $especialista, $clinica, $acuerdo)
    {
        //sentencia sql
        $sql = "INSERT INTO citas(id_citas, nombres, correo, telefono,cita_id_especialidad,cita_id_especialista,cita_id_clinica,acuerdo) 
        values(NULL, :nom, :corr,:telf,:espec,:esplista,:cli,:acue)";

        //bind parameters
        $sentencia = $this->con->prepare($sql);
        // $fechaActual = new DateTime('NOW');
        // $strfecha = $fechaActual->format('Y-m-d H:i:s');
        $data = [
            'nom' => $nombres,
            'corr' => $correo,
            'telf' => $telefono,
            'espec' => $especialidad,
            'esplista' => $especialista,
            'cli' => $clinica,
            'acue' => $acuerdo

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
    public function insertar2(Cita $cit)
    {
        //sentencia sql
        $sql = "INSERT INTO citas(id_citas, nombres, correo, telefono,cita_id_especialidad,cita_id_especialista,cita_id_clinica,acuerdo) 
        values(NULL, :nom, :corr,:telf,:espec,:esplista,:cli,:acue)";

        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
            'nom' =>  $cit->getNombres(),
            'corr' =>  $cit->getCorreo(),
            'telf' =>  $cit->getTelefono(),
            'espec' =>  $cit->getEspecialidad(),
            'esplista' =>  $cit->getEspecialista(),
            'cli' =>  $cit->getClinica(),
            'acue' =>  $cit->getAcuerdo(),
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
        $sql = "delete from citas where id_citas = :id";
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


    public function actualizar($id,$nombres, $correo, $telefono, $especialidad, $especialista, $clinica, $acuerdo)
    {
        $sql = "UPDATE Citas set nombres =:nombres, correo = :correo, telefono = :telefono, cita_id_especialidad=:especialidad, cita_id_especialista=:especialista,cita_id_clinica=:clinica, acuerdo=:acuerdo 
        WHERE id_citas=:id";

        //now());
        //bind parameters
        $sentencia = $this->con->prepare($sql);

        $data = [
            'id' => $id,
            'nombres' => $nombres,
            'correo' => $correo,
            'telefono' => $telefono,
            'especialidad' => $especialidad,
            'especialista' => $especialista,
            'clinica' => $clinica,
            'acuerdo' => $acuerdo
        
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
        $sql = "select ci.id_citas, ci.nombres, ci.correo, ci.telefono, esp.especialidad_nombre, es.especialista_nombre, cli.clinica_nombre,ci.acuerdo 
        from citas ci JOIN  especialidad esp on ci.cita_id_especialidad=esp.id_especialidad  
        JOIN  especialista es on ci.cita_id_especialista=es.id_especialista 
        JOIN clinica cli on ci.cita_id_clinica = cli.id_clinica where id_citas=:id";
        // preparar la sentencia
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        // ejecutar la sentencia
        $stmt->execute($data);
        // recuperar los datos (en caso de select)
        $cita = $stmt->fetch(PDO::FETCH_ASSOC); // fetch retorna el primer registro
        // retornar resultados
        return $cita;
    }


    public function buscar($parametro)
    {
        $sql = "SELECT ci.id_citas, ci.nombres, ci.correo, ci.telefono, esp.especialidad_nombre, es.especialista_nombre, cli.clinica_nombre 
        from citas ci 
        JOIN  especialidad esp on ci.cita_id_especialidad=esp.id_especialidad  
        JOIN  especialista es on ci.cita_id_especialista=es.id_especialista 
        JOIN clinica cli on ci.cita_id_clinica = cli.id_clinica where id_citas=$parametro";
      
        $sentencia = $this->con->prepare($sql);
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultados; 
        
        
    }
}
