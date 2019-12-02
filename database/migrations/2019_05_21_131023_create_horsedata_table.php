<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorsedataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horsedata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('speed');
            $table->double('accel');
            $table->double('agility');
            $table->double('breaking');
            $table->bigInteger('horse_id')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horsedata');
    }
}
