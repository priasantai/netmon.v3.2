<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fos', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');
            $table->string('perangkat');
            $table->string('ip')->unique();
            $table->string('odp');
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
        Schema::dropIfExists('fos');
    }
}
