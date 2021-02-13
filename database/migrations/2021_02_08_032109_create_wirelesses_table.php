<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWirelessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wirelesses', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->string('perangkat');
            $table->string('ip')->unique();
            $table->string('ketinggian');
            $table->string('bandwith');
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
        Schema::dropIfExists('wirelesses');
    }
}
