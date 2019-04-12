<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaris', function (Blueprint $table) {
            $table->increments('salary_id');
            $table->integer('employee_id')->default(1);
            $table->string('month');
            $table->string('year');
            $table->integer('salary_status')->default(1);
            $table->string('advanced_salary');
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
        Schema::dropIfExists('salaris');
    }
}
