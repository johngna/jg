<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campos', function (Blueprint $table) {
            //
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('label');
            $table->string('tipo');
            $table->string('form')->nullable();
            $table->string('grid')->nullable();
            $table->string('obrigatorio')->nullable();
            $table->text('opcoes')->nullable();
            $table->text('observacoes')->nullable();
            $table->string('tamanho')->nullable();
            $table->string('ordem')->nullable();
            $table->string('valor_padrao')->nullable();
            $table->string('desabilitado')->nullable();
            $table->string('somente_leitura')->nullable();
            $table->string('classe')->nullable();
            $table->string('style')->nullable();
            $table->string('onclick')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('modulo_id');
            $table->foreign('modulo_id')->references('id')->on('modulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campos');
    }
}
