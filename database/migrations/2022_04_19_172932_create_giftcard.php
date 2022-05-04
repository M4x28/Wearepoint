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
        Schema::create('giftcard', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('desc');
            $table->double('costo');
            $table->string('fornitore');
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
        Schema::dropIfExists('giftcard');
    }
};
