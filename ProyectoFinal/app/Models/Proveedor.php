<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anticipo;
use App\Models\Pago;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedor';

    protected $fillable = [
        'razon', 'persona', 'rfc', 'domicilio', 'email', 'telefono', 'activo',
    ];

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
