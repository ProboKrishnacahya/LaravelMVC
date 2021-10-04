<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    private static $projects = ['Calculator', 'Accounting', 'Student Report', 'POS Resto', 'Online Store', 'Pet Shop'];

    public static function allData(){
        return self::$projects;
    }
}
