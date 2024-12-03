<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $fillable = [
        'razon', 'persona', 'rfc', 'domicilio', 'email', 'telefono', 'activo',
    ];

    public function anticipos()
    {
        return $this->hasMany(Anticipo::class);
    }


}
