@extends('layouts.app')

@section('content')

<div class="col-md-10 bg-light shadow">
    <div class="col-md-10 float-start m-2">
        <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
            <a href="/proveedores/Nuevo" class="btn btn-primary btn-sm me-2">Nuevo</a>
        </div>
    </div>
    <table class="table table-hover table-striped caption-top">
        <caption>Listado de Proveedores</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">No. Telefono</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @php
            $numFila = 0;
        @endphp
        <tbody>
            @foreach ($proveedores as $proveedor )
                <tr>
                    <th scope="row">{{ ++$numFila }}</th>
                    <td>{{ $proveedor -> idProveedor }}</td>
                    <td>{{ $proveedor -> nombre }}</td>
                    <td>{{ $proveedor -> telefono }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="opciones">
                            <a href="/proveedores/{{ $proveedor->idProveedor }}/Editar" class="btn btn-warning btn-sm me-2">Editar</a>
                            <a href="/proveedores/{{ $proveedor->idProveedor }}/Eliminar" class="btn btn-danger btn-sm">Eliminar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
