<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('Users',function(Blueprint $table){
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('name');
            $table->integer('age');
            $table->string('sex');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('address');
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
        Schema::drop('Users');
    }
}
