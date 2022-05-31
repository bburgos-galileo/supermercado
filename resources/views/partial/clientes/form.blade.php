<div class="row justify-content-sm-center h-100">
    <div class="col-sm-6">
        <div class="card shadow-lg my-2">
            <div class="card-body">
                <h4 class="fs-2 card-title fw-bold mb-2">Mantenimiento de Clientes</h4>
                <form id="frmCliente"
                    @if($cliente->idcliente != null)
                       action="/clientes/{{$cliente->idcliente}}/Editar" method="post"
                    @else
                       action="/clientes" method="post"
                    @endif
                    autocomplete="off">

                    @csrf

                    <input type="hidden" id="idcliente" , name="idcliente" value="{{ $cliente->idcliente}}">

                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="nombre">Nombre</label>
                        <input id="nombre" type="text" class="form-control form-control-sm" name="nombre"
                            value="{{ $cliente->nombre}}" required autofocus>
                    </div>

                    <div class="mb-2">
                        <label class="mb-1 text-muted" for="nit">Nit</label>
                        <input id="nit" type="text" class="form-control form-control-sm" name="nit"
                        value="{{$cliente->nit}}" required>
                    </div>

                    <div class="mb-2">
                        <label class="mb-1 text-muted" for="direccion">Dirección</label>
                        <input id="direccion" type="text" class="form-control form-control-sm" name="direccion"
                            value="{{ $cliente->direccion}}" required>
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
