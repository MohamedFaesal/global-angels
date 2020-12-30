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
            $table->id();
            $table->integer('category_id')->index();
            $table->string('name')->index();
            $table->text('description');
            $table->enum('type', \App\Utils\ProductTypeUtil::getTypes())->index();
            $table->string('affiliate_link')->index();
            $table->string('source')->index();
            $table->string('source_id')->nullable()->index(); // asin for amazon or best buy and so on
            $table->decimal('price')->index();
            $table->decimal('weight')->nullable()->index();
            $table->string('weight_type')->nullable()->index();
            $table->string('main_image');
            $table->decimal('added_by')->nullable()->index();
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
