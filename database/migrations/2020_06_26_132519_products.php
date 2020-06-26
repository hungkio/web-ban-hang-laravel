<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema:: create('Products',function(Blueprint $table){
            $table->increments('id');
            $table->string('product_name');
            $table->integer('product_counts');
            $table->string('products_type');
            $table->integer('product_in_prices');
            $table->integer('product_out_prices');
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
        Schema::drop('Products');
    }
}
