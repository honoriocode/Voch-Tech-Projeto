<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosColaboradoresTable extends Migration
{
    public function up()
    {
        Schema::create('cargo_colaboradores', function (Blueprint $table) {
            $table->id(); 
            $table->string('cargo_id');
            $table->string('colaborador_id');
            $table->integer('nota_desempenho');
            $table->timestamps(); // Colunas created_at e updated_at para registro de timestamp
        });
    }

    public function down()
    {
        Schema::dropIfExists('cargo_colaboradores');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
}
