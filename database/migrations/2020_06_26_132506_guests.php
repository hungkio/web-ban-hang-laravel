<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Guests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema:: create('Guests',function(Blueprint $table){
            $table->increments('guest_id');
            $table->string('name');
            $table->string('sex');
            $table->integer('age');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('address');
            $table->string('sale_rank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Guests');
    }
}
