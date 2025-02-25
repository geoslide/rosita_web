<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialesTable extends Migration
{
    public function up()
    {
        Schema::create('materiales', function (Blueprint $table) {
            $table->id(); // BIGINT autoincremental
            $table->string('name'); // VARCHAR(255)
            $table->text('description')->nullable(); // TEXT, nullable
            $table->decimal('price_per_unit', 10, 2); // DECIMAL(10, 2)
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('materiales');
    }
}