<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mark', 50)->comment('Марка автомобиля');
            $table->string('model', 50)->comment('Модель автомобиля');
            $table->string('color', 50)->nullable()->comment('Цвет');
            $table->string('count', 5)->comment('Количество');
            $table->string('price', 15)->comment('Цена');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
