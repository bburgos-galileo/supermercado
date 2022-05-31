<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
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
        $Productos = Producto::all();

        return view(view:'productos.index', data: compact(var_name: 'Productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $marcas = Marca::all();

        return view(view:'productos.nuevo', data: compact(['producto'],['marcas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Producto = new Producto();
        $Producto -> idMarca = $request -> idMarca;
        $Producto -> nombre = $request -> nombre;
	    $Producto -> precio = $request -> precio;
        $Producto -> save();

        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $marcas = Marca::all();

        return view(view:'productos.editar', data: compact(['producto'],['marcas']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $Producto = Producto::find($request -> idproducto);

        $Producto -> idMarca = $request -> idMarca;
        $Producto -> nombre = $request -> nombre;
	    $Producto -> precio = $request -> precio;
        $Producto -> save();

        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Producto = Producto::find($id);
        $Producto -> delete();

        return redirect('/productos');
    }
}
