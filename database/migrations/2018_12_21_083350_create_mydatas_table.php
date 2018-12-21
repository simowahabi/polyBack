<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMydatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mydatas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('D1');
            $table->double('D2');
            $table->double('D3');
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
        Schema::dropIfExists('mydatas');
    }
}
