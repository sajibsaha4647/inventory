<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaysalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paysalaries', function (Blueprint $table) {
            $table->increments('pay_id');
            $table->integer('employee_id')->default(1);
            $table->integer('salary_id')->default(1);
            $table->string('salary_month');
            $table->string('salary_paid_amount');
            $table->interger('pay_status')->default(1);
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
        Schema::dropIfExists('paysalaries');
    }
}
