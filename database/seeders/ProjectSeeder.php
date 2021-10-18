<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'code' => 'cal',
            'project' => 'Calculator',
            'description' => "My very FIRST project",
            'semester' => 'ODD',
            'mata_kuliah' => 'Algorithm & Programming',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'acc',
            'project' => 'Accounting',
            'description' => "Lorem ipsum dolor sit amet",
            'semester' => 'EVEN',
            'mata_kuliah' => 'Web Programming',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'stu',
            'project' => 'Student Report',
            'description' => "Lorem ipsum dolor sit amet",
            'semester' => 'ODD',
            'mata_kuliah' => 'Web Programming',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'pos',
            'project' => 'POS Resto',
            'description' => "Lorem ipsum dolor sit amet",
            'semester' => 'EVEN',
            'mata_kuliah' => 'Algorithm & Programming',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'onl',
            'project' => 'Online Resto',
            'description' => "Lorem ipsum dolor sit amet",
            'semester' => 'ODD',
            'mata_kuliah' => 'Entrepreneurship Essentials',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'pet',
            'project' => 'Pet Shop',
            'description' => "My LAST project",
            'semester' => 'EVEN',
            'mata_kuliah' => 'Mobile Application Development',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
