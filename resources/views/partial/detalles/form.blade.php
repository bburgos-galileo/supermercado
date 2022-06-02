<div class="row justify-content-sm-center h-100">
    <div class="col-sm-6">
        <div class="card shadow-lg my-2">
            <div class="card-body">
                <h4 class="fs-2 card-title fw-bold mb-2">Ingreso de Producto</h4>
                <form id="frmMarcas" action="/detalles" method="post" autocomplete="off">

                    @csrf

                    <input type="hidden" id="idfactura" , name="idfactura" value="{{ $Detalles->idfactura }}">

                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="idproducto">Producto</label>
                        <select class="form-select form-select-sm" id="idproducto" name="idproducto" required autofocus>
                            @foreach($Productos as $producto)
                                <option value="{{$producto->idproducto}}"
                                    {{ ($Detalles->idproducto) == ($producto->idproducto) ? 'selected' : '' }}>
                                    {{$producto->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="cantidad">Cantidad</label>
                        <input id="cantidad" name="cantidad" type="number" class="form-control form-control-sm" name="name"
                            value="1" min="1" required autofocus/>
                    </div>

                    <div class="align-items-center d-flex m-2">
                        <a href="{{ url()->previous() }}" class="btn btn-warning btn-sm me-2">Cancelar</a>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
