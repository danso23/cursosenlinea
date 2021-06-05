<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoriaModel;
use App\Models\ProductoModel;
use Hamcrest\Util;
use Illuminate\Support\Facades\Response;
class CategoriaController extends Controller{
    public function index(){
    	$result = CategoriaModel::where('activo', '1')->get();
        return view('categoria', compact('result'));
    }

    public function productoXCategoria($id){
        $productos = ProductoModel::join('categorias', 'productos.id_categoria', 'categorias.id_categoria')
        ->selectRaw('productos.id_producto, categorias.nombre_categoria, productos.nombre_producto, productos.desc_producto, productos.url_imagen, productos.precio')
        ->where('productos.id_categoria', $id)
        ->where('productos.activo', 1)
        ->get();
        $categorias = CategoriaModel::where('activo', '1')->selectRaw('id_categoria, nombre_categoria')->get();
        
        $utils = new Utils();
        
        foreach($productos as $producto){
            $monedaConvertida = $utils->convertCurrency($producto->precio);//$this->convertCurrency($producto->precio);
            $producto->precio = $monedaConvertida;
        }
        $datos = array('productos' => $productos, 'categorias' => $categorias);
        //dd($datos);
        return view('categoria')->with('datos', $datos);
        
    }

}
