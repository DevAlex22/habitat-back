<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'idcliente';
    protected $fillable = [
        'idcliente',
        'nombre_cliente',
        'dpi_cliente',
        'edad_cliente',
        'direccion_cliente'
    ];
    protected $table = 'cliente';
    
    public $timestamps = false;
}
