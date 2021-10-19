<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'course_code' => 'IMT2008',
            'course_name' => 'Web Development',
            'lecturer' => 'Dipl.-Inf. Laura Mahendratta Tjahjono, M.I.T. & Evan Tanuwijaya, S.Kom., M.Kom.',
            'number_sks' => 4,
            'description' => 'Mata kuliah ini mempelajari teknologi pengembangan web dengan menggunakan salah satu framework yang memiliki desain pattern Model, View, Controller (MVC) yaitu Laravel.'
        ]);
    }
}
