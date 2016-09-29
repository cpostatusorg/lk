<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique');
            $table->string('name');
            $table->string('email')->default('none');
            $table->string('password');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('midName');
            $table->string('parallel');
            $table->string('class');
            //связи
            $table->integer('school_table_id');
            $table->integer('card_table_id')->default(0);
            //конец связи
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
