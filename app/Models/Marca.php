<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $table = 'marca';
    protected $primaryKey = 'idmarca';
    public $timestamps = false;

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'idProveedor', 'idProveedor');
    }
}
