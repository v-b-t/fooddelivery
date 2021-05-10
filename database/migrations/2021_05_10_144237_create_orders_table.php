<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('cartId');
            $table->string('firstName');
            $table->integer('middleName');
            $table->integer('lastName');
            $table->string('mobile',20);
            $table->string('email',50);
            $table->string('adress');
            $table->enum('status',['processed','canceled','on delivery']);
            $table->timestamps();
            $table->text('comment');
        });
        Schema::table('orders', function (Blueprint $table) {
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
        Schema::dropIfExists('orders');
    }
}
