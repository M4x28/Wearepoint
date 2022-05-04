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
        Schema::create('richieste_agente', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('dataInizio');
            $table->integer('durata');
            $table->string('PEC');
            $table->string('tel');
            $table->string('cellTitolare');
            $table->string('PIVA');
            $table->string('imgRetro');
            $table->string('imgFronte');
            $table->string('nome');

            // Foreign Key user
            $table->foreignId('fk_user')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('richiesta_agente');
    }
};
