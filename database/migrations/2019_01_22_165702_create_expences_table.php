<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expences', function (Blueprint $table) {
            $table->increments('expence_id');
            $table->string('expence_details');
            $table->string('expence_amount');
            $table->string('expence_month');
            $table->string('expence_date');
            $table->string('expence_year');
            $table->string('expence_img',50)->default('avatar.png');
            $table->integer('expence_status')->default(1);
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
        Schema::dropIfExists('expences');
    }
}
