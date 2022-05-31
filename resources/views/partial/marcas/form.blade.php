<div class="row justify-content-sm-center h-100">
    <div class="col-sm-6">
        <div class="card shadow-lg my-2">
            <div class="card-body">
                <h4 class="fs-2 card-title fw-bold mb-2">Mantenimiento de Marcas</h4>
                <form id="frmMarcas" @if($Marca->idmarca != null)
                    action="/marcas/{{$Marca->idmarca}}/Editar" method="post"
                    @else
                    action="/marcas" method="post"
                    @endif
                    autocomplete="off">

                    @csrf

                    <input type="hidden" id="idmarca" , name="idmarca" value="{{ $Marca->idmarca}}">

                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="nombre">Nombre</label>
                        <input id="nombre" type="text" class="form-control form-control-sm" name="nombre"
                            value="{{ $Marca->nombre}}" required autofocus>
                    </div>

                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="IdProveedor">Proveedor</label>
                        <select class="form-select" id="idProveedor" name="idProveedor" required autofocus>
                            @foreach($Proveedores as $proveedor)
                                <option value="{{$proveedor->idProveedor}}"
                                    {{ ($Marca->idProveedor) == ($proveedor->idProveedor) ? 'selected' : '' }}>
                                    {{$proveedor->nombre}}
                                </option>
                            @endforeach
                        </select>
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
