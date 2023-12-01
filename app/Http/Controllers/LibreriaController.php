<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibreriaController extends Controller
{
    public function index()
    {
        // Puedes agregar aquí la lógica para obtener y mostrar la descripción de la tienda
        $descripcion = "Descubre un mundo de historias en UDELIBROS. Desde clásicos atemporales hasta las últimas novedades, ofrecemos una cuidada selección de libros que inspiran. Sumérgete en la magia de la lectura con nosotros.";

        return view('libreria.descripcion', ['descripcion' => $descripcion]);
    }
}
