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
        Schema::create('agenti', function (Blueprint $table) {
            $table->id();
            $table->string('PEC');
            $table->string('indirizzo');
            $table->string('cellTitolare');
            $table->string('nome');
            $table->string('tel');
            $table->string('PIVA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenti');
    }
};
