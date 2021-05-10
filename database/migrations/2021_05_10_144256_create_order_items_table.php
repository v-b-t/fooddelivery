<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('productId');
            $table->integer('orderId');
            $table->integer('quantity');
            $table->float('price');
            $table->timestamps();
        });
        Schema::table('order_items', function (Blueprint $table) {
            $table->foreignId('productId')
            ->constrained('products')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('orderId')
            ->constrained('orders')
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
        Schema::dropIfExists('order_items');
    }
}
