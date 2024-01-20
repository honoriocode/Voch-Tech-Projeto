<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosTable extends Migration
{
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
            $table->string('Cargo');
            $table->timestamps(); // Colunas created_at e updated_at para registro de timestamp
        });
    }

    public function down()
    {
        Schema::dropIfExists('cargos');
    }

    
}
