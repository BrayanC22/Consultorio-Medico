<?php

class inicioControlador{
public function index() {
        //llamo a la vista
        require_once 'vista/Especialidades/inicio.php';

    }
    public function cirugia() {
        //llamo a la vista
        require_once 'vista/Especialidades/Quisnancela_Cirugia/QuisnancelaCirugia.php';

    }
    public function cardiologia() {
        //llamo a la vista
        require_once 'vista/Especialidades/Lino_Cardiologia/LinoCardiologia.php';

    }
    public function dermatologia() {
        //llamo a la vista
        require_once 'vista/Especialidades/Campoverde_Dermatologia/CampoverdeDermatologia.php';

    }
    public function nutricion() {
        //llamo a la vista
        require_once 'vista/Especialidades/Calvopina_Nutricion/BrayanNutricion.php';
    }
    public function acercaDe() {
        //llamo a la vista
        require_once 'vista/Especialidades/acercaNosotros.php';

    }
}