<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_features', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('product_stock_id')->nullable(false);
            $table->foreign('product_stock_id')->references('id')->on('products_stock');

            $table->unsignedInteger('feature_id')->nullable(false);
            $table->foreign('feature_id')->references('id')->on('features');

            $table->string('value')->nullable(true);

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
        Schema::dropIfExists('products_features');
    }
}
