@extends('layouts.app')

@section('content')

<div class="col-md-10 bg-light shadow">
    <div class="col-md-10 float-start m-2">
        <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
            <a href="/marcas/Nuevo" class="btn btn-primary btn-sm me-2">Nuevo</a>
        </div>
    </div>
    <table class="table table-hover table-striped caption-top">
        <caption>Listado de Marcas</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Marca</th>
                <th scope="col">Proveedor</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @php
            $numFila = 0;
        @endphp
        <tbody>
            @foreach ($Marcas as $marca )
                <tr>
                    <th scope="row">{{ ++$numFila }}</th>
                    <td>{{ $marca->idmarca }}</td>
                    <td>{{ $marca->nombre }}</td>
                    <td>{{ $marca->proveedor->nombre }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="opciones">
                            <a href="/marcas/{{ $marca->idmarca }}/Editar" class="btn btn-warning btn-sm me-2">Editar</a>
                            <a href="/marcas/{{ $marca->idmarca }}/Eliminar" class="btn btn-danger btn-sm">Eliminar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
