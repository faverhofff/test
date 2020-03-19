<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->decimal('price', 4, 1)->nullable(false)->default(0);
            $table->text('description')->nullable(false);
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
        Schema::drop('products');
    }
}
