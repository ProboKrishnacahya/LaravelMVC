<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    private static $projects = [
        [
            'title'=>'Calculator',
            'code'=>'cal',
            'course'=>'Algorithm & Programming'
        ],
        [
            'title'=>'Accounting',
            'code'=>'acc',
            'course'=>'Web Programming'
        ],
        [
            'title'=>'Student Report',
            'code'=>'stu',
            'course'=>'Web Programming'
        ],
        [
            'title'=>'POS Resto',
            'code'=>'pos',
            'course'=>'Algorithm & Programming'
        ],
        [
            'title'=>'Online Resto',
            'code'=>'onl',
            'course'=>'Entrepreneurship'
        ],
        [
            'title'=>'Pet Shop',
            'code'=>'pet',
            'course'=>'Mobile App Development'
        ]
    ];

    public static function allData(){
        return self::$projects;
    }
}
