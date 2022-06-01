<div class="row justify-content-sm-center h-100">
    <div class="col-sm-6">
        <div class="card shadow-lg my-2">
            <div class="card-body">
                <h4 class="fs-2 card-title fw-bold mb-2">Facturación</h4>
                <form id="frmFactura" @if($Factura->idfactura != null)
                    action="/facturas/{{$Factura->idfactura}}/Editar" method="post"
                    @else
                    action="/facturas" method="post"
                    @endif
                    autocomplete="off">

                    @csrf

                    <input type="hidden" id="idfactura" , name="idfactura" value="{{ $Factura->idfactura}}">

                    <div class="mb-2">
                        <label class="mb-2 text-muted" for="idCliente">Cliente</label>
                        <select class="form-select  form-select-sm" id="idCliente" name="idCliente" @if($Factura->idfactura != null) disabled @endif required autofocus>
                            @foreach($Clientes as $cliente)
                                <option value="{{$cliente->idcliente}}"
                                    {{ ($Factura->idCliente) == ($cliente->idcliente) ? 'selected' : '' }}>
                                    {{$cliente->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="align-items-rigth d-flex">
                        <div class="btn-toolbar justify-content-right" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <button type="submit"
                                @if($Factura->idfactura != null) disabled @endif
                                class="btn btn-sm btn-primary me-2">Guardar</button>
                                <a href="/detalles/Nuevo" class="btn btn-sm btn-warning"
                                @if($Factura->idfactura == null) style="pointer-events: none" @endif>Agregar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @if($Factura->idfactura != null)
            <div class="card-footer m-2">
                <table class="table table-sm table-hover table-striped caption-top">
                    <caption>Detalle</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">SubTotal</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    @php
                        $numFila = 0;
                    @endphp
                    <tbody>
                        @foreach ($Detalles as $detalle )
                            <tr>
                                <th scope="row">{{ ++$numFila }}</th>
                                <td>{{ $detalle-> idproducto }}</td>
                                <td>{{ $detalle->producto->nombre }}</td>
                                <td>{{ $detalle-> cantidad }}</td>
                                <td>{{ $detalle->producto->precio }}</td>
                                <td>{{ $detalle-> subtotal }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="opciones">
                                       <a href="/detalles/{{ $detalle->idDetalleFactura }}/Eliminar" class="btn btn-danger btn-sm">Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
</div>
