<?php
    namespace App\Http\Controllers;
    use Illuminate\Routing\Controller as BaseController;

    class TestController extends BaseController{
        // Metodo
        public function index(){
            return "Primer Controlador";
            $arrayData = array(
                "title" => "Programacion Computacional 4",
                "descripcion" => "Me gusta el arroz blanco",
                "studentName" => "Nestor Chavez"
            );
            
        }
    }
?>