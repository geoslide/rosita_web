<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // BIGINT autoincremental
            $table->string('name'); // VARCHAR(255)
            $table->string('email')->nullable(); // VARCHAR(255), nullable
            $table->string('phone'); // VARCHAR(20)
            $table->text('address')->nullable(); // TEXT, nullable
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}