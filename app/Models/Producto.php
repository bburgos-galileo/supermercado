<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primaryKey = 'idproducto';
    public $timestamps = false;

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'idmarca', 'idmarca');
    }
}
