<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Marca;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Hola aqui va la lista de los productos :";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.new');

        $marcas = Marca::all();
        //selecionar la marca
        $categorias= Categoria::all();
        //Mostar la vista con las marcas uy categoria 
        return view('productos.new')
                   ->with('categorias',$categorias)
                   ->with('marcas',$marcas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //accerder a los datos del formulario con el objeto request
       // echo"<pre>";
        //var_dump($request->imagen);
        //echo"<pre>";

        $archivo = $request->imagen;
        //carturar nombre "original"
        $nombre_archivo = $archivo->getClientOriginalName();
        var_dump($nombre_archivo);
        //mover el archivo a la carpeta "public/img"
        $ruta = public_path();
        $archivo->move("$ruta/img", $nombre_archivo);
        //registrar producto 
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->desc = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->imagen = $nombre_archivo;
        $producto->marca_id = $request->marca;
        $producto->categoria_id = $request->categoria;
        $producto->save();
        echo "producto registrado";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo"<center>Aqui va el detalle del producto : $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo"<center>Aqui va el form para editar: $producto</center>";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
