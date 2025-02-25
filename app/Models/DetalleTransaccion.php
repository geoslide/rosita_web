<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleTransaccion extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array<string>
     */
    protected $fillable = [
        'transaction_id', // ID de la transacción asociada
        'material_id',    // ID del material asociado
        'quantity',       // Cantidad de material
        'subtotal',       // Subtotal de la transacción
    ];

    /**
     * Obtener la transacción asociada al detalle.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaccion()
    {
        return $this->belongsTo(Transaccion::class, 'transaction_id');
    }

    /**
     * Obtener el material asociado al detalle.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }
}