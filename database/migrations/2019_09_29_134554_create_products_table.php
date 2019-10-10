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
            $table->string('name');
            $table->string('sub_title')->nullable();
            $table->string('slug');
            $table->string('category_ids')->nullable();
            $table->decimal('price');
            $table->decimal('sale_price');
            $table->string('product_photo')->nullable();
            $table->text('description')->nullable();
            $table->text('weight', 50)->nullable();
            $table->integer('stock');
            $table->tinyInteger('featured');
            $table->enum('status', ['Publish', 'Draft', 'Inactive'])->default('Publish');
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
        Schema::dropIfExists('products');
    }
}
