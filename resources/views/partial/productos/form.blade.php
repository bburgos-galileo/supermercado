<div class="row justify-content-sm-center h-100">
    <div class="col-sm-6">
        <div class="card shadow-lg my-2">
            <div class="card-body">
                <h4 class="fs-2 card-title fw-bold mb-2">Mantenimiento de Productos</h4>
                <form id="frmproducto"
                    @if($producto->idproducto != null)
                       action="/productos/{{$producto->idproducto}}/Editar" method="post"
                    @else
                       action="/productos" method="post"
                    @endif
                    autocomplete="off">

                    @csrf

                    <input type="hidden" id="idproducto" , name="idproducto" value="{{ $producto->idproducto}}">


                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="nombre">Nombre</label>
                        <input id="nombre" type="text" class="form-control" name="nombre"
                            value="{{ $producto->nombre}}" required autofocus>
                    </div>
                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="idMarca">Marca</label>
                        <select class="form-select" id="idMarca" name="idMarca" required autofocus>
                            @foreach($marcas as $marca)
                                <option value="{{$marca->idmarca}}"
                                    {{ ($producto->idMarca) == ($marca->idmarca) ? 'selected' : '' }}>
                                    {{$marca->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="precio">Precio</label>
                        <input id="precio" type="number"  min="0.00" step="0.01" class="form-control form-control-sm" name="precio"
                            value="{{ $producto->precio}}" required autofocus>
                    </div>

                    <div class="align-items-center d-flex">
                        <button type="submit" class="btn btn-primary ms-auto">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
