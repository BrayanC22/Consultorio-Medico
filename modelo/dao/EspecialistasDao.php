<?php
require_once 'config/Conexion.php';
Class EspecialistasDao{
    private $con;
   public function __construct(){
       $this->con = Conexion::getConexion();
   } 
   
   public function listar() {
    // sql de la sentencia
    $sql = "select * from especialistas where estado = 1";
    //preparacion de la sentencia
    $stmt = $this->con->prepare($sql);
    //ejecucion de la sentencia
    $stmt->execute();
    //recuperacion de resultados
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // retorna datos para el controlador
    return $resultados;
}
   

   public function insertar(EspecialistasDto $esp){
   // sentencia sql;
   $sql = "insert into especialistas (idEspecialista, tipoDocumento, numDocumento, nombre_completo, sexo, telefono, correo, grado_preparacion, especialidad, experiencia, estado)
   Values(NULL, :tdocum, :ndocum, :nombre, :sexo, :tlf, :correo, :gprepa, :espe, :exp, :est)";

  $sentencia=$this->con->prepare($sql);
   $data = [
    'tdocum' => $esp->getTipoDocumento(),
    'ndocum' => $esp->getNumDocumento(),
    'nombre' => $esp->getNombre(),
    'sexo' => $esp->getSexo(),
    'tlf' => $esp->getTelefono(),
    'correo' => $esp->getCorreo(),
    'gprepa' => $esp->getNEstudio(),
    'espe' => $esp->getEspecialidad(),
    'exp' => $esp->getExperiencia(),
    'est' => $esp->getEstado()
  ];
  $sentencia->execute($data);
  
   if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
    //rowCount permite obtner el numero de filas afectadas
    return false;
   }
 return true;
 }

 public function buscar($cedula){
     //sentencia sql
     $sql = "select * from especialistas where numDocumento = :cdu ";

     $stmt=$this->con->prepare($sql);
     //$conlike = '%'. $cedula = '%';
     $data = ['cdu'=>$cedula];
     $stmt->execute($data);
     //obtener resultados
     $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     return $resultado;

 }

 public function buscarxId($id) { // buscar un producto por su id
    $sql = "select * from especialistas where idEspecialista =:id";
    // preparar la sentencia
    $stmt = $this->con->prepare($sql);
    $data = ['id' => $id];
    // ejecutar la sentencia
    $stmt->execute($data);
    // recuperar los datos (en caso de select)
    $producto = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
    // retornar resultados
    return $producto;
}

public function actualizar($cdu, $nombre, $telef, $correo, $prepa, $espe, $expe, $id){
    $sql = "update especialistas set numDocumento = :cdu, nombre_completo = :nombre, telefono= :telf, correo= :correo, grado_preparacion  = :prepa, especialidad = :espe,
    experiencia = :expe where idEspecialista = :id";
    $sentencia = $this->con->prepare($sql);
    $data = [
        'cdu' => $cdu,
        'nombre' => $nombre,
        'telf'=> $telef,
        'correo' => $correo,
        'prepa' => $prepa,
        'espe' => $espe,
        'expe' => $expe,
        'id' => $id
    ];
    $sentencia->execute($data);
    //retornar resultados
    if($sentencia->rowcount()<=0){
        return false;
    }
    return true;
}

public function eliminar($id, $cedula, $nom){
$sql = "Update especialistas set estado =0, numDocumento = :cedula, nombre_completo = :nom where idEspecialista = :id";
$sentencia=$this->con->prepare($sql);
$data =[
'id'=> $id,
'cedula'=> $cedula,
'nom'=>$nom
];
$sentencia->execute($data);
if($sentencia->rowCount()<=0){
    return false;

}
return true;
}

}


?>