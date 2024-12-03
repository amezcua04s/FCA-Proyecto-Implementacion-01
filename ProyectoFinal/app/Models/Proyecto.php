<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyecto'; 

    protected $fillable = [
        'nombre', 'activo', 'inicio', 'fin', 'subtotal', 'iva', 'total', 'concepto', 'comentarios',
    ];

    public function anticipos()
    {
        return $this->hasMany(Anticipo::class);
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
