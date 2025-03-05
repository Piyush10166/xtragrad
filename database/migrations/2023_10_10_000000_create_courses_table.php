<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('short_description');
            $table->text('long_description');
            $table->decimal('price', 8, 2);
            $table->decimal('selling_price', 8, 2);
            $table->string('images');
            $table->string('file');
            $table->date('start_date');
            $table->string('skill_level');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
