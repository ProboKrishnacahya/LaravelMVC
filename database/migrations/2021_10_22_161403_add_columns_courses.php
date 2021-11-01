<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsCourses extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('course_name');
            $table->string('lecturer');
            $table->smallInteger('number_sks');
            $table->text('description');
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
}
