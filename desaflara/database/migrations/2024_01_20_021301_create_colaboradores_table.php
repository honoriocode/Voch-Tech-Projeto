<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradoresTable extends Migration
{
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->id(); 
            $table->string('Unidade_id');
            $table->string('Nome');
            $table->string('Cpf');
            $table->string('Email');
            $table->timestamps(); // Colunas created_at e updated_at para registro de timestamp
        });
    }

    public function down()
    {
        Schema::dropIfExists('colaboradores');
    }

    
}
