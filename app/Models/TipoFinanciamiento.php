<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoFinanciamiento extends Model
{
    protected $primaryKey = 'idtipo_financiamiento';
    protected $fillable = [
        'idtipo_financiamiento',
        'tipo_financiamiento',
        'activo',
    ];
    protected $table = 'tipo_financiamiento';
    
    public $timestamps = false;
}
