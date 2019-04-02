<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlphabetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alphabets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('latynupper');
            $table->string('latynlower');
            $table->string('cyrillicupper');
            $table->string('cyrilliclower');
            $table->string('word');
            $table->string('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alphabets');
    }
}
