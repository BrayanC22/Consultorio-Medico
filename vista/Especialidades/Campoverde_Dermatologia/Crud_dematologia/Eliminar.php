<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar datos</title>
    <style>
         select{
    width: 18%;
    left: 20px;
    padding: 10px;
    font-size: 16px;
    background: #004C70;
    color: white;
}
    </style>
    <select name="CursosDisponibles" onchange="location = this.value;">
   <option value="1">CrudDermatologia</option> 
   <option value="Registrar.php">Registrar</option>
   <option value="presentar.php">Presentar</option>
   <option value="Actualizar.php">Actualizar</option> 
   <option value="Eliminar.php">Eliminar</option> 
</select>
</head>
<body>

<h2>Elimanar Registros</h2>
<p>Se eliminan datos obsoletos de los profesionales que se inscriben en los cursos proporcionados por el consultorio medico.</p>
    <?php
    require_once '../../../Conexion.php';

    if(!empty($_GET['idCurso'])){
        $data = ['idCurso'=> htmlentities($_GET['idCurso'])];
        $sql = "select * from registrarEspecialista where idCurso = :idCurso";

        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);

        $filas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($filas as $fila) {
                ?>
                <div>
                    <form method="post">
                        <!-- <input type="hidden" name="txtid" value=""> -->
                        <label>idCurso:</label><input type="text" name="txtid" readonly="" value="<?php echo $fila['idCurso'] ?>">
                        <label>Cedula:</label><input type="text" name="cedula" value="<?php echo $fila['numDocumento'] ?>">
                       <label>Nombre:</label><input type="text" name="nom" value="<?php echo $fila['nombre_completo'] ?>">
                       <td>
                       <label>Acciones:</label>
                       <a href="presentar.php?idCurso=<?php echo $fila['idCurso']?>">Presentar</a>
                       <a href="Registrar.php?idCurso=<?php echo $fila['idCurso']?>">Registrar</a>
                       <input type="submit" value="Eliminar">
                    </form>
                </div>
                
            <?php
            }
    }
    ?>
     <?php
        if (isset($_POST['txtid'])) {
            $data = ['idCurso' => htmlentities($_POST['txtid'])];
            $sql = "delete from registrarEspecialista where idCurso = :idCurso";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

            if ($stmt->rowCount() > 0) {
                header("location:presentar.php");
            } else {
                echo 'No se pudo eliminar el registro';
            }
        }
        ?>
</body>
</html>