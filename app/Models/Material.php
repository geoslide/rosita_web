<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',           // Nombre del material
        'description',     // Descripción del material (opcional)
        'price_per_unit',  // Precio por unidad del material
    ];

    /**
     * Obtener los detalles de transacción asociados al material.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalles()
    {
        return $this->hasMany(DetalleTransaccion::class);
    }
}