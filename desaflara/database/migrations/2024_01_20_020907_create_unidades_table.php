<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadeTable extends Migration
{
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id(); 
            $table->string('nome_fantasia');
            $table->string('razao_social');
            $table->string('cnpj');
            $table->timestamps(); // Colunas created_at e updated_at para registro de timestamp
        });
    }

    public function down()
    {
        Schema::dropIfExists('unidades');
    }
    
}

