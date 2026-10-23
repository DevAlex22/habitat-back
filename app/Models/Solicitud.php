<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $primaryKey = 'idsolicitud';
    protected $fillable = [
        'idsolicitud',
        'id_cliente',
        'idtipo_financiamiento',
        'monto',
        'fecha_solicitud'
    ];
    protected $table = 'solicitud';
    
    public $timestamps = false;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function tipofinanciamiento()
    {
        return $this->belongsTo(TipoFinanciamiento::class, 'idtipo_financiamiento');
    }
}
