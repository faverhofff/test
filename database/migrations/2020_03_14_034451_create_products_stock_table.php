<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_stock', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('product_id')->nullable(false);
            $table->foreign('product_id')->references('id')->on('products');

            $table->decimal('stock')->nullable(false)->default(0);

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
        Schema::dropIfExists('products_stock');
    }
}
