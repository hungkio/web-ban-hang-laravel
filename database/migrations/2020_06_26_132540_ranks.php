<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ranks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ranks',function(Blueprint $table){
            $table->increments('id');
            $table->string('rank_name');
            $table->integer('sale_percent');
            $table->integer('bill_count');
            $table->integer('total_bills');

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
        Schema::drop('Ranks');
    }
}
