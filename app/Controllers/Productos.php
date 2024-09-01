<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index()
    {
       //Instanciar el modelo ProductosModel
       $productosModel = new ProductosModel();

        //Obtener todos los datos de la base de datos
       $productos =$productosModel->findAll();

   
        //Cargar la vista 'index' y pasarle los datos de los productos
        return view('productos/index',['productos'=>$productos]);
    }

    public function detalle($id)
    {
        $productosModel = new ProductosModel();
        $producto = $productosModel->find($id);
        return view('productos/detalle', ['producto' => $producto]);
    }

          
}