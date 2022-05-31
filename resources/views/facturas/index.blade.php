@extends('layouts.app')

@section('content')

<div class="col-md-10 bg-light shadow">
    <div class="col-md-10 float-start m-2">
        <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
            <a href="/facturas/Nuevo" class="btn btn-primary btn-sm me-2">Nuevo</a>
        </div>
    </div>
    <table class="table table-hover table-striped caption-top">
        <caption>Listado de Facturas</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">No Factura</th>
                <th scope="col">Nit</th>
                <th scope="col">Nombre Cliente</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @php
            $numFila = 0;
        @endphp
        <tbody>
            @foreach ($Facturas as $factura )
                <tr>
                    <th scope="row">{{ ++$numFila }}</th>
                    <td>{{ $factura->idfactura }}</td>
                    <td>{{ $factura->cliente->nit }}</td>
                    <td>{{ $factura->cliente->nombre }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="opciones">
                            <a href="/facturas/{{ $factura->idfactura }}/Editar" class="btn btn-warning btn-sm me-2">Editar</a>
                            <a href="/facturas/{{ $factura->idfactura }}/Eliminar" class="btn btn-danger btn-sm">Eliminar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
