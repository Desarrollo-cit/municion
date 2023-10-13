<?php

namespace Controllers;

use Model\Producto;
use MVC\Router;
class ProductoController{

    public static function index(Router $router)
    {
        $router->render('productos/index');
    }

    public static function guardarAPI(){
        getHeadersApi();
        $producto = new Producto($_POST);
        
        $resultado = $producto->guardar();

        if($resultado['resultado'] == 1){
            echo json_encode([
                "resultado" => 1
            ]);
            
        }else{
            echo json_encode([
                "resultado" => 0
            ]);

        }
    }

    public static function buscarAPI(){
        getHeadersApi();
        $productos = Producto::where('situacion', '1');
        echo json_encode($productos);
    }

    public static function modificarAPI(){
        getHeadersApi();
        $producto = new Producto($_POST);
        
        $resultado = $producto->guardar();

        if($resultado['resultado'] == 1){
            echo json_encode([
                "resultado" => 1
            ]);
            
        }else{
            echo json_encode([
                "resultado" => 0
            ]);

        }
    }

    public static function eliminarAPI(){
        getHeadersApi();
        $_POST['situacion'] = 0;
        $producto = new Producto($_POST);
        
        $resultado = $producto->guardar();

        if($resultado['resultado'] == 1){
            echo json_encode([
                "resultado" => 1
            ]);
            
        }else{
            echo json_encode([
                "resultado" => 0
            ]);

        }
    }
} 

