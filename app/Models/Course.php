<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = ['course_code', 'course_name', 'lecturer', 'number_sks', 'description'];

    //dummy data Courses
    // private static $courses = [
    //     [
    //         'name' => 'Web Development',
    //         'code' => 'IMT2008',
    //         'lecturer' => 'Dipl.-Inf. Laura Mahendratta Tjahjono, M.I.T. & Evan Tanuwijaya, S.Kom., M.Kom.',
    //         'credits' => '4 SKS',
    //         'description' => 'Mata kuliah ini mempelajari teknologi pengembangan web dengan menggunakan salah satu framework yang memiliki desain pattern Model, View, Controller (MVC) yaitu Laravel.'
    //     ],
    //     [
    //         'name' => 'Mobile Application Development',
    //         'code' => 'IMT2009',
    //         'lecturer' => 'Mychael Maoeretz Engel, S.Kom., M.Cs.',
    //         'credits' => '4 SKS',
    //         'description' => 'Merupakan matakuliah lanjutan dari mata kuliah Algoritma Pemrograman & Teknik Pemrograman yang mendalami pemrograman berdasarkan prinsip pemrograman mobile apps development yang mencakup konsep dasar pemrograman mobile, advance layouting & advance cloud programming berbasis platform android. Melalui matakuliah ini nantinya di akhir semester kelas akan diadakan Mini Expo untuk memamerkan hasil karya Mobile Apps dari mahasiswa yang ada di dalam kelas. Hal ini juga membantu menyemangati & memberikan target terhadap pembelajaran yang akan dilalui oleh mahasiswa.'
    //     ],
    //     [
    //         'name' => 'Database',
    //         'code' => 'IMT2010',
    //         'lecturer' => 'Dipl.-Inf. Laura Mahendratta Tjahjono, M.I.T.',
    //         'credits' => '4 SKS',
    //         'description' => 'Database adalah sebuah tempat penyimpanan data dalam komputer. Data yang disimpan adalah data yang merepresentasikan sebuah sistem riil. Oleh karena itu perancangan database yang tepat menjadi hal yang penting agar data dapat disimpan dengan baik dan efisien. Setelah mengikuti mata kuliah ini, mahasiswa diharapkan dapat : kognitif : memahami konsep perancangan dan implementasi basis data afektif : merespon kebutuhan sistem, berdiskusi, dan bekerja sama psikomotorik : merancang diagram ER, menciptakan skema basis data,
    //         dan mengimplementasikan basis data.'
    //     ],
    //     [
    //         'name' => 'Discrete Mathematics',
    //         'code' => 'IMT2011',
    //         'lecturer' => 'Caecilia Citra Lestari, S.Kom., M.Kom.',
    //         'credits' => '3 SKS',
    //         'description' => 'Mata kuliah ini memberikan pengetahuan kepada mahasiswa mengenai konsep dasar matematika diskrit yang nantinya banyak dimanfaatkan pada mata kuliah selanjutnya. Mahasiswa juga diajarkan untuk menyelesaikan persoalan sederhana dengan menggunakan konsep matematika diskrit yang sudah diajarkan. Materi yang diajarkan meliputi logika, teori himpunan, relasi dan fungsi, induksi matematis, analisa kompleksitas algoritma, graf, dan tree. Semua materi yang diberikan dikaitkan dengan objek diskrit. Setelah menyelesaikan mata kuliah ini, mahasiswa diharapkan mampu menyelesaikan suatu permasalahan dengan menggunakan konsep matematika pada objek diskrit.'
    //     ],
    //     [
    //         'name' => 'Game Design',
    //         'code' => 'IMT2012',
    //         'lecturer' => 'Mychael Maoeretz Engel, S.Kom., M.Cs. & Januar Tanzil, S.Kom.',
    //         'credits' => '3 SKS',
    //         'description' => 'Mata kuliah ini akan mengenalkan dunia pengembangan permainan elektronik yang akan dimulai dengan pemahaman teori hingga praktek Game Design. Dimulai dengan pengenalan dan pengertian berbagai genre permainan yang ada, mekanika game dan pengenalan dasar-dasar pengembangan game elektronik menggunakan sebuah game engine.'
    //     ],
    //     [
    //         'name' => 'Becoming Indonesia',
    //         'code' => 'UNC2011',
    //         'lecturer' => 'Ikhsan Rosyid Mujahidul Anwari, S.S., M.A.',
    //         'credits' => '3 SKS',
    //         'description' => 'Mata kuliah ini bertujuan untuk memperkenalkan spektrum keindonesiaan bagi mahasiswa, memberikan pemahaman mengenai fenomena kebudayaan dan konstruksi nasionalisme sebagai sebuah proses dari realitas sejarah sosial yang pernah terjadi di Indonesia.'
    //     ]
    // ];

    //untuk mendapatkan semua dummy data dari Model Course
    // public static function allData()
    // {
    //     return collect(self::$courses);
    // }

    //untuk mendapatkan semua dummy data sesuai Kode Mata Kuliah
    // public static function dataWithCode($code)
    // {
    //     $allCourses = static::allData();
    //     return $allCourses->firstWhere('code', $code);
    // }
}
