<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organisation');
            $table->string('ration');
            $table->string('author');
            $table->string('executor');
            $table->string('href');
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
        Schema::drop('qrs');
    }
}
