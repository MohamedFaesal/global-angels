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
            $table->integer('quantity')->default(1)->index();
            $table->string('name')->index();
            $table->text('description');
            $table->enum('type', \App\Utils\ProductTypeUtil::getTypes())->index();
            $table->string('affiliate_link')->index();
            $table->string('source')->index();
            $table->string('source_id')->nullable()->index(); // (id) asin for amazon or best buy and so on
            $table->decimal('price')->index();
            $table->string('currency');
            $table->decimal('weight')->nullable()->index();
            $table->string('weight_unit')->nullable()->index();
            $table->integer('country_from')->index();
            $table->integer('country_to')->index();
            $table->integer('state_from')->nullable()->index();
            $table->integer('state_to')->nullable()->index();
            // next 3 fields filled in case of pre-orders
            $table->date('delivery_date')->nullable()->index();
            $table->date('order_before')->nullable()->index();
            $table->integer('trip_id')->nullable()->index();
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
