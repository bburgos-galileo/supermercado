<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';
    public $timestamps = false;

    public function cliente()
    {
        return $this->hasMany(Cliente::class);
    }


}
