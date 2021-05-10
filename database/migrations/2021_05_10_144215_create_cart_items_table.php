<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->integer('productId');
            $table->integer('cartId');
            $table->integer('quantity');
                       
        });
        Schema::table('cart_items', function (Blueprint $table) {
            $table->foreignId('productId')
            ->constrained('products')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('cartId')
            ->constrained('carts')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
}
