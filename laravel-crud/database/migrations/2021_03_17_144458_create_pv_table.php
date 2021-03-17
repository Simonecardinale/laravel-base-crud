<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv', function (Blueprint $table) {
            $table->id();
            $table->string('tipologia-prodotto');
            $table->string('colore', 20);
            $table->string('liquidi-supportati', 10);
            $table->float('prezzo',5,2);
            $table->text('description');
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
        Schema::dropIfExists('pv');
    }
}
