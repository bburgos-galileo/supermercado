<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::all();

        return view(view:'proveedores.index', data: compact(var_name: 'proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedor = new Proveedor();
        return view('proveedores.nuevo', compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Proveedor = new Proveedor();
        $Proveedor -> idProveedor = $request -> idProveedor;
        $Proveedor -> nombre = $request -> nombre;
        $Proveedor -> telefono = $request -> telefono;
        $Proveedor->save();

        return redirect('/proveedores');
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
        $proveedor = Proveedor::find($id);

        return view(view:'proveedores.editar', data: compact(var_name: 'proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $Proveedor = Proveedor::find($request -> idProveedor);
        $Proveedor -> idProveedor = $request -> idProveedor;
        $Proveedor -> nombre = $request -> nombre;
        $Proveedor -> telefono = $request -> telefono;

        $Proveedor -> save();

        return redirect("/proveedores");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Proveedor = Proveedor::find($id);

        $Proveedor->delete();

        return redirect("/proveedores");
    }
}
