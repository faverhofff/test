<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchace', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('client_id')->nullable(false);
            $table->foreign('client_id')->references('id')->on('clients');

            $table->unsignedInteger('product_stock_id')->nullable(false);
            $table->foreign('product_id')->references('id')->on('products');

            $table->unsignedInteger('count')->nullable(false)->default(0);

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
        Schema::dropIfExists('purchase');
    }
}
