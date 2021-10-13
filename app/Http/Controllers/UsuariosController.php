<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function getUsuarios(){
        // return Product::all();   ->>Devuellve todoooo
        // return Product::find(2); ->>Devuelve un registro
        // return Product::where('stock','>',14.99)->get();
        // return Product::select('id','nombre')->get();
        return Product::select('products.id','products.nombre as producto','categorias.nombre as categoria')->join('categorias','categorias.id','=','products.categoria')->get();
    }
}
