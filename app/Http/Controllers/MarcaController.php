<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Proveedor;

class MarcaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Marcas = Marca::all();

        return view(view:'marcas.index', data: compact(var_name: 'Marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Marca = new Marca();
        $Proveedores = Proveedor::all();

        return view(view:'marcas.nuevo', data: compact(['Marca'],['Proveedores']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Marca = new Marca();
        $Marca -> idProveedor = $request -> idProveedor;
        $Marca -> nombre = $request -> nombre;
        $Marca->save();

        return redirect('/marcas');
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
        $Marca = Marca::find($id);
        $Proveedores = Proveedor::all();

        return view(view:'marcas.editar', data: compact(['Marca'],['Proveedores']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $Marca = Marca::find($request -> idmarca);
        $Marca -> idProveedor = $request -> idProveedor;
        $Marca -> nombre = $request -> nombre;

        $Marca -> save();

        return redirect("/marcas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Marca = Marca::find($id);

        $Marca->delete();

        return redirect("/marcas");
    }

}
