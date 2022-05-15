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
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->text('descricao');
            $table->unsignedInteger('valor');
            $table->unsignedInteger('valor_pago')->nullable();
            $table->text('tipo_pagamento')->nullable();
            $table->text('tipo_conta')->nullable();
            $table->unsignedBigInteger('id_pagador')->nullable();
            $table->text('validade')->nullable();
            $table->text('data_pagamento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contas');
    }
};
