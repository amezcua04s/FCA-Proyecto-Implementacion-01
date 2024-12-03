<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anticipo extends Model
{
    use HasFactory;

    protected $table = 'anticipo'; // Asegúrate de que el nombre de la tabla sea correcto

    protected $fillable = [
        'proyecto_id', 'cliente_id', 'monto', 'fecha', 'metodo', 'referencia', 'activo'
    ];


    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id');
    }

    /**
     * Relación con el modelo Cliente
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
