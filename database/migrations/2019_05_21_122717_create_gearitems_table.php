<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGearitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gearitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 45);
            $table->longText('gearstats');
            $table->bigInteger('category');
            $table->bigInteger('gearset');
            $table->string('attribute', 45);
            $table->bigInteger('guidenumber');
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
        Schema::dropIfExists('gearitems');
    }
}
