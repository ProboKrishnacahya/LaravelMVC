<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('Courses', function (Blueprint $table) {
            $table->string('course_code')->primary();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Courses');
    }
}
