<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetalleFactura;
use App\Models\Producto;
use App\Models\Facturas;
use App\Models\Cliente;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Detalles = new DetalleFactura();
        $Detalles -> idfactura = $id;
        $Productos = Producto::all();

        return view('detalles.nuevo', compact(['Detalles'],['Productos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Detalle = new DetalleFactura();
        $Producto = Producto::find($request ->idproducto);
        $Detalle -> idfactura = $request -> idfactura;
        $Detalle -> idproducto = $request -> idproducto;
        $Detalle -> cantidad = $request -> cantidad;

        $Subtotal = ($request -> cantidad) * ($Producto -> precio);

        $Detalle -> subtotal = $Subtotal;

        $Detalle->save();

        $Factura = Facturas::find($request -> idfactura);

        $Factura -> total += $Subtotal;

        $Factura -> save();

        $Clientes = Cliente::all();
        $Detalles = DetalleFactura::where('idfactura', $request -> idfactura)->get();

        return view('facturas.editar', compact(['Factura'],['Clientes'],['Detalles']));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $Detalle = DetalleFactura::find($id);

        $Detalle->delete();

        return redirect("/facturas");
    }
}
