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
        Schema::create('intermedia_telefonica', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fk_piano')->constrained('piani_utente');
            $table->foreignId('fk_ricarica')->constrained('ricarica_telefonica');
            $table->foreignId('fk_user')->constrained('users');
            $table->string('tel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intermedia_telefonica');
    }
};
