<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->foreignId('categoryId')
            ->constrained('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('userId')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->float('price');
            $table->varchar('photo')->nullable();
            $table->float('discount');
            $table->float('rating');
            $table->boolean('available');
            $table->string('slug');
            $table->timestamps();
           
        });
        // Schema::table('products', function (Blueprint $table) {
            
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
