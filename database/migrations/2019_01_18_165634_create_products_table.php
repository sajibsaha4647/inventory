<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('product_id');
            $table->integer('catagory_id')->default(1);
            $table->integer('supplier_id')->default(1);
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_godown');
            $table->string('product_rout');
            $table->string('product_img');
            $table->string('product_buy_date');
            $table->string('product_expaire_date');
            $table->string('product_buting_price');
            $table->string('product_selling_price');
            $table->integer('product_status')->default(1);
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
