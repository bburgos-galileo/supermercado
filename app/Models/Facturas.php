<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    use HasFactory;
    protected $table = 'factura';
    protected $primaryKey = 'idfactura';
    public $timestamps = false;

    public function clientes()
    {
        return $this->belongsTo(Cliente::class, 'idCliente', 'idCliente');
    }

    public function detalle()
    {
        return $this->hasMany(DetalleFactura::class);
    }

}
