<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',       // Nombre del cliente
        'email',      // Correo electrónico (opcional)
        'phone',      // Teléfono del cliente
        'address',    // Dirección del cliente (opcional)
    ];

    /**
     * Los atributos que deben ser convertidos a tipos nativos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime', // Fecha de creación
        'updated_at' => 'datetime', // Fecha de actualización
    ];

    /**
     * Obtener las transacciones asociadas al cliente.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transacciones()
    {
        return $this->hasMany(Transaccion::class);
    }
}