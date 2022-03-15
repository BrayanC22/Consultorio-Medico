<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="description" content="Ejemplo de HTML5">
    <meta name="Keywords" content="HTML5,CSS3,JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css" />
    <link rel="stylesheet" href="../../../assets/css/General.css" />
    <link rel="icon" href="../../../assets/img/medical-icon.ico">
    
    <title>Buscar Cirujia</title>
        <style>
        table {
            background-color: white;
            text-align: left;
            border-collapse: collapse;
            width: 100%;
            font-size:20px;

        }

        td {
            font-size: 15px;
        }

        td,
        th {
            padding: 15px;
        }

        tr:nth-child(even) {
            background-color: #ddd;
        }

        tr:hover td {
            background-color: #24303c;
            color: white;
        }

        thead {
            background-color: #24303c;

            color: white;
        }

            #Header1 {
            font-size: 16px;
            background: #004C70;
            color: black;
            font-family: Century Schoolbook;
            width: 100%;
            height: 100%;
            text-align: center;
            line-height: 150px;
            border-bottom: 0.20px solid black;
        }

        #contendor {
            width: 100%;
            margin: 0px;
            min-width: 105px;
            background: #EBEDEF;
        }

    

        .elemento {
            display: inline-block;


        }

        .elemento:nth-child(1) {
            width: 60%;
            padding: 20px;
        }

        .elemento:nth-child(2) {
            width: 30%;
            position: relative;
            bottom: 50px;
            box-shadow: 5px 5px 5px #000;
        }

        .formularios {

            width: 60%;
            background: #0F2738;
            padding: 10px;
            min-width: 105px;
            margin: auto;
            border-radius: 4px;
            font-family: Century Schoolbook;
            color: white;
            box-shadow: 5px 5px 5px #000;
            text-align: center;
            line-height: 50px;

        }

        .formItem {
            background: #24303c;
            padding: 8px;
            border-radius: 2px;
            margin-bottom: 16px;
            border: 1px solid black;
            font-family: Century Schoolbook;
            font-size: 18px;
            color: white;

        }


        .segundo {
            margin-right: 85px;
        }

        .tercero {

            margin-left: 27px;

        }

        .gen :nth-child(1),
        .gen:nth-child(2) {
            margin-left: 28px;

        }

        .btn {
            width: 40%;
            padding: 10px;
            border: none;
            margin: 16px 0;
            font-size: 16px;
            color: white;
            background: #34495E;
            display: inline-block;
            width: 30%;


        }
        .buscarboton {
           
            padding: 10px;
            border: none;
            margin: 16px 0;
            font-size: 16px;
            color: white;
            background: #34495E;
        
        }

        #Contenedorc{
          padding-bottom: 10% ;
         padding-left: 8%;
         padding-top: 2%;
         padding-right: 3%;
        }
      #H2{
        text-align:center ;
      }

      #boton {
            text-align: center;
            padding-top: 1%;
            padding-right: 12%;

        }

        #agregadoboton{
        text-align: center;
        }

        #butonAgregar {
            text-align: center;
            padding: 8px;
            background: #24303c;
            border: 1px solid black;
            font-family: Century Schoolbook;
            color: white;
        }
        .formItem {
            background: white;
            padding: 8px;
            border-radius: 2px;
            margin-bottom: 16px;
            border: 1px solid black;
            font-family: Century Schoolbook;
            font-size: 18px;
            color: black;


        }
        #BusquedaPanel{
            text-align: center;
        }
       .btn-editar{
        padding: 3%;
        color:black;
        
        }

    </style>

    </head>
    
    <body>
        
    <div id="contendor">
        <header class="Encabezado">
            <h1 class="Contenido"> <img src="../../assets/img/Logo.png" alt="" />CONSULTORIO MEDICO</h1>
            <nav class="Contenido">
                <ul class="menu">
                    <li><a href="../../index.html">Home</a></li>
                    <li><a href="../../Especialidades/Quisnancela_Cirugia/QuisnancelaCirugia.html">Cirugía General</a></li>
                    <li><a href="../../Especialidades/Calvopina_Nutricion/BrayanNutricion.html">Nutrición y Dietética</a></li>
                    <li><a href="../../Especialidades/Campoverde_Dermatologia/CampoverdeDermatologia.html">Dermatología</a></li>
                    <li><a href="../../Especialidades/Lino_Cardiologia/LinoCardiologia.html">Cardiología</a></li>
                    <li><a href="../../acercaNosotros.html">Acerca de</a></li>
                </ul>
            </nav>
    
    </header>
    <br>
    <div id="H2">

        <h1 i>Mostrar Cursos</h1>
    </div>
       
        <div id="Contenedorc">
        <div class="col-md-12" id="BusquedaPanel">
                <form action="../../index.php?c=cursos&f=buscar" method="POST">
                    <input type="text" name="busqueda" id="busqueda" class="formItem" placeholder="Ingrese el id de su curso" />
                    <button type="submit" class="buscarboton"><i class="fas fa-search"></i>Buscar por id</button><br>
                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id_Curso</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Duraccion</th>
                        <th>Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultados as $fila) {
                        ?>
                        <tr>
                            <td><?php echo $fila['id_cursos'] ?></td>
                            <td><?php echo $fila['nombres'] ?></td>
                            <td><?php echo $fila['apellidos'] ?></td>
                            <td><?php echo $fila['correo'] ?></td>
                            <td><?php echo $fila['telefono'] ?></td>
                            <td><?php echo $fila['tiempo'] ?></td>
                            <td><?php echo $fila['produc_nombre'] ?></td>
                            <td>

                            <td><a class=" btn-editar" id="btn-editar" href="../../index.php?c=cursos&f=editar&id_cursos=<?php echo  $fila['id_cursos']; ?>"> Editar<i class="fas fa-marker"></i></a>
                                <a class=" btn-editar" onclick="if(!confirm('Esta seguro de eliminar el curso?'))return false;" href="../../index.php?c=cursos&f=eliminar&id_cursos=<?php echo  $fila['id_cursos']; ?>">Eliminar<i class="fas fa-trash-alt"></i></a>
                            </td>
                             
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="col-md-12" id="agregadoboton">
                <a href="../../index.php?c=cursos&f=nuevo">
                    <button type="button" class="btn btn-primary" id="butonAgregar"><i class="fas fa-plus"></i>Agregar nuevo curso </button>
                </a>
            </div>

        </div>
        
        
     <footer id="Footer1">
      <strong>Autor:</strong> Grupo 6.
      <br>
      <strong>Visitanos:</strong> Guayaquil-Ecuador.
      <br>
      <br>
      <strong>Medicina General</strong>
      <br>
      <br>

        <div id="Foot">

<div>
  <h4 id="acercaDe"><strong>Contactanos a nuestras Redes sociales</strong></h4>
</div>
<br>
<a href="https://twitter.com/?lang=es" target="_BLANK"> <img src="../../../assets/img/twitter.png" alt="descripcion" height="50" width="50" /></a>
<a href="https://www.instagram.com/accounts/login/" target="_BLANK"> <img src="../../../assets/img/instagram.png" alt="descripcion" height="50" width="50" /></a>
<a href="https://www.facebook.com/" target="_BLANK"> <img src="../../../assets/img/facebook.png" alt="descripcion" height="50" width="50" /></a>
<br>

<h4> Derechos reservados &copy; 2020-2021</h4>
</div>

</footer>



    </body>
</html>