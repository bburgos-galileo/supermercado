<div class="row justify-content-sm-center h-100">
    <div class="col-sm-6">
        <div class="card shadow-lg my-2">
            <div class="card-body">
                <h4 class="fs-2 card-title fw-bold mb-2">Mantenimiento de Proveedores</h4>
                <form id="frmProveedor"
                    @if($proveedor->idProveedor != null)
                       action="/proveedores/{{$proveedor->idProveedor}}/Editar" method="post"
                    @else
                       action="/proveedores" method="post"
                    @endif
                    autocomplete="off">

                    @csrf

                    <input type="hidden" id="idProveedor" , name="idProveedor" value="{{ $proveedor->idProveedor}}">

                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="nombre">Nombre</label>
                        <input id="nombre" type="text" class="form-control form-control-sm" name="nombre"
                            value="{{ $proveedor->nombre}}" required autofocus>
                    </div>

                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="telefono">No. Telefonico</label>
                        <input id="telefono" type="text" class="form-control form-control-sm" name="telefono"
                            value="{{ $proveedor->telefono}}" required autofocus>
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
