<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facturas;
use App\Models\Cliente;
use App\Models\DetalleFactura;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Facturas = Facturas::all();


        return view('facturas.index', compact('Facturas'));
    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Factura = new Facturas();
        $Detalles = new DetalleFactura();
        $Clientes = Cliente::all();

        return view('facturas.nuevo', compact(['Factura'],['Clientes'],['Detalles']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Factura = new Facturas();
        $Factura -> idfactura = $request -> idfactura;
        $Factura -> idCliente = $request -> idCliente;

        $Factura->save();

        return redirect('/facturas');
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
        $Factura = Facturas::find($id);
        $Clientes = Cliente::all();
        $Detalles = DetalleFactura::where('idfactura', $id)->get();

        return view('facturas.editar', compact(['Factura'],['Clientes'],['Detalles']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $Factura = Facturas::find($request -> idfactura);
        $Factura -> idfactura = $request -> idfactura;
        $Factura -> idCliente = $request -> idCliente;

        $Factura -> save();

        return redirect("/facturas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Factura = Facturas::find($id);

        $Factura->delete();

        return redirect("/facturas");
    }


}
