<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array<string>
     */
    protected $fillable = [
        'client_id',    // ID del cliente asociado
        'type',         // Tipo de transacción (compra/venta)
        'total_amount', // Monto total de la transacción
        'date',         // Fecha de la transacción
    ];

    /**
     * Obtener el cliente asociado a la transacción.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'client_id');
    }

    /**
     * Obtener los detalles de la transacción.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalles()
    {
        return $this->hasMany(DetalleTransaccion::class);
    }
}