<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaccionesTable extends Migration
{
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id(); // BIGINT autoincremental
            $table->foreignId('client_id')->constrained()->onDelete('cascade'); // Clave foránea
            $table->enum('type', ['compra', 'venta']); // ENUM
            $table->decimal('total_amount', 10, 2); // DECIMAL(10, 2)
            $table->date('date'); // DATE
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('transacciones');
    }
}