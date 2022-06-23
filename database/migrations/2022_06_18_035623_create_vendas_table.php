<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id('codigo');
            
            $table->unsignedBigInteger('cliente');
            $table->foreign('cliente')->references('codigo')->on('clientes');

            $table->unsignedBigInteger('produto');
            $table->foreign('produto')->references('codigo')->on('produtos');

            $table->decimal('quantidade');
            $table->decimal('valorunitario');
            $table->decimal('valortotal');
            $table->longText('descricao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
};
