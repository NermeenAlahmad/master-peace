<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->string('age');
            $table->text('health');
            $table->text('description');
            $table->string('family');
            $table->string('gender');
            $table->text('main_image');
            $table->text('sub_image1');
            $table->text('sub_image2');
            $table->foreignId('user_id')
                  ->unsigned()
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

                  $table->foreignId('category_id')
                  ->unsigned()
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('animals');
    }
}
