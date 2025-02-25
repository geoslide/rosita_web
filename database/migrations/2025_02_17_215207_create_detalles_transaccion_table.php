<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTransaccionTable extends Migration
{
    public function up()
    {
        Schema::create('detalles_transaccion', function (Blueprint $table) {
            $table->id(); // BIGINT autoincremental
            $table->foreignId('transaction_id')->constrained()->onDelete('cascade'); // Clave foránea
            $table->foreignId('material_id')->constrained()->onDelete('cascade'); // Clave foránea
            $table->decimal('quantity', 10, 2); // DECIMAL(10, 2)
            $table->decimal('subtotal', 10, 2); // DECIMAL(10, 2)
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('detalles_transaccion');
    }
}