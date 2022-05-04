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
        Schema::create('ricarica_telefonica', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->double('costo');
            $table->string('fornitore');
            $table->string('img_fornitore');
            $table->double('cash_back_utente');
            $table->double('cash_back_agente')->nullable();

            // Foreign Key piano
            $table->foreignId('fk_piano')->constrained('piani_utente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ricarica_telefonica');
    }
};
