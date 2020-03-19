<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsPackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_pack', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('product_as_pack_id')->comment('Id new product created in Product\'s table.')->nullable(false);
            $table->foreign('product_as_pack_id')->references('id')->on('products');

            $table->unsignedInteger('product_id')->comment('Id product contain the new product.')->nullable(false);
            $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('products_pack');
    }
}
