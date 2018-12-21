<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMydata2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mydata2s', function (Blueprint $table) {
            $table->increments('id');
            $table->double('D4');
            $table->double('D5');
            $table->double('D6');
            $table->string('mdate');
            $table->double('posx');
            $table->double('posy');
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
        Schema::dropIfExists('mydata2s');
    }
}
