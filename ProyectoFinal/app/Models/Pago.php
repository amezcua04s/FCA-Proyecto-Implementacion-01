<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Proyecto;
use App\Models\Proveedor;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pago';
    protected $fillable = [
        'proyecto_id', 'proveedor_id', 'monto', 'fecha', 'metodo', 'referencia', 'activo',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }
}
