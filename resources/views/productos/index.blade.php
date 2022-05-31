@extends('layouts.app')

@section('content')
<div class="col-md-12 bg-info shadow">
    <div class="row align-items-center">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="row justify-content-sm-center h-100">
                <div class="col-md-6">
                    @php
                    $registro = 0;
                    @endphp
                    <div class="carousel-inner">
                        @foreach ($Productos as $producto)
                        <div class="{{ $registro == 1 ? 'carousel-item active' : 'carousel-item' }}">
                            <div class="mt-2 mb-2">
                                <div class="btn-group btn-group-sm" role="group" aria-label="Nuevo">
                                    <a href="/productos/Nuevo" class="btn btn-primary btn-sm">Nuevo</a>
                                </div>
                            </div>
                            <div class="container">
                                <img src="{{ URL::asset('assets/image/product2.png') }}"
                                    class="rounded mx-auto d-block w-25" alt="{{ ++$registro }}">
                            </div>
                            <div class="container">
                                <div class="carousel-caption text-center">
                                    <h4>{{ $producto->nombre }} {{ $producto->precio }}</h4>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="opciones">
                                        <p><a class="btn btn-sm btn-warning me-3"
                                                href="/productos/{{ $producto->idproducto }}/Editar"
                                                role="button">Editar</a>
                                        </p>
                                        <p><a class="btn btn-sm btn-danger"
                                                href="/productos/{{ $producto->idproducto }}/Eliminar"
                                                role="button">Borrar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

</div>
@endsection
