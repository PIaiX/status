<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('title');
            $table->integer('volume');
            $table->integer('price');
            $table->text('characteristics');
            $table->string('img');
            $table->string('short_desc');
            $table->text('full_desc');
            $table->text('direction'); // Способ применения
            $table->text('compound'); // Состав
            $table->integer('category_id');
            $table->integer('hair_type_id');
            $table->integer('brand_id');
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
};
