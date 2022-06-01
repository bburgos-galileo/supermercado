<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    use HasFactory;
    protected $table = 'detalleFactura';
    protected $primaryKey = 'idDetalleFactura';
    public $timestamps = false;

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'idproducto', 'idproducto');
    }

    public function detalle()
    {
        return $this->belongsTo(Facturas::class, 'idCliente', 'idCliente');
    }



}
