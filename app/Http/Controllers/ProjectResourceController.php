<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ProjectResourceController extends Controller
{
    //* Read all data pada table di halaman /project
    public function index()
    {
        $active_welcome = "";
        $active_projects = "active";
        $active_courses = "";

        //Ambil semua data yang ada di table Projects pada database
        $projects = Project::all();

        return view(
            'project',
            [
                "title" => "Project",
                "pagetitle" => "My Project"
            ],
            compact('active_welcome', 'active_projects', 'active_courses', 'projects')
        );
    }

    //* Memanggil View createProject.blade.php
    public function create()
    {
        return view('createProject', ['title' => 'Create Project']);
    }

    //* Create new data hasil submit dari createProject.blade.php
    public function store(Request $request)
    {
        //? Validator untuk input jumlah karakter pada Project Name
        $this->validate($request, [
            'project' => 'required|min:5|max:50',
        ]);

        //? Mengambil 3 karakter yang paling depan dari Project Name + diubah dalam bentuk uppercase untuk menjadi Code nya
        $code = Str::upper(Str::substr($request->project, 0, 3));

        Project::create([
            'code' => $code,
            'project' => $request->project,
            'description' => $request->description,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah
        ]);
        return redirect(route('project.index')); //? seperti <a href=""></a>
    }

    //* Menampilkan detail data sesuai Project Name
    public function show($id)
    {
        $projects = Project::where('code', $id)->first();
        $title = "My Project";
        return view('showproject', compact('projects', 'title'));
    }

    public function edit($code)
    {
        $projects = Project::findOrFail($code); //? findOrFail mencari id di table Project yang sama dengan $code, maka semua data akan diambil & data disimpan di $projects
        $title = "My Project";
        return view('editProject', compact('projects', 'title'));
    }

    //* Update existing data pada editProject.blade.php
    public function update(Request $request, $id)
    {
        $code = Str::upper(Str::substr($request->project, 0, 3));
        $projects = Project::findOrFail($id);
        $projects->update([
            'code' => $code,
            'project' => $request->project,
            'description' => $request->description,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah
        ]);
        return redirect(route('project.index'));
    }

    //* Delete selected data pada database
    public function destroy($id)
    {
        $projects = Project::findOrFail($id);
        $projects->delete();
        return redirect(route('project.index'));
    }
}
    // public function index()
    // {
    //     return view('project', [
    //         'title'=>'Project',
    //         'projects'=>Project::allData()
    //     ]);
    // }

    // public function show($code)
    // {
    //     return view('showproject', [
    //         'title'=>'Project',
    //         'project'=>Project::dataWithCode($code)
    //     ]);
    // }

//     public function index()
//     {
//        $project = Project::all();
//        return view('project', [
//            'title' => 'Project',
//            'project' => $project
//        ]);
//     }

//     public function show($code)
//     {
//         $project = Project::firstWhere('code', $code);
//         return view('showproject', [
//             'title' => 'Project',
//             'project' => $project
//     ]);
// }


//     public function store(Request $request)
//     {
//         DB::table('project')->insert([
//             'code' => $request->code,
//             'project' => $request->project,
//             'description' => $request->description,
//             'semester' => $request->semester,
//             'mata_kuliah' => $request->mata_kuliah,
//             'created_at' => \Carbon\Carbon::now(),
//             'updated_at' => \Carbon\Carbon::now()
//         ]);

//         return view(
//             'project',
//             [
//                 'title' => 'Project',
//                 'project' => Project::all()
//             ]
//         );
//     }


// public function goToForm()
//     {
//         return view(
//             'createProject',
//             [
//                 'title' => 'Project'
//             ]
//         );
//     }


// public function edit(Request $request)
//     {
//         DB::table('project')
//             ->where('id', $request->id)
//             ->update([
//                 'project' => $request->project,
//                 'description' => $request->description,
//                 'semester' => $request->semester,
//                 'mata_kuliah' => $request->mata_kuliah
//             ]);

//         return view(
//             'project',
//             [
//                 'title' => 'Project',
//                 'project' => Project::all()
//             ]
//         );
//     }

//     public function goToFormEdit($id)
//     {
//         $project = Project::where('id', $id)
//             ->orderBy('project')
//             ->get();
//         return view(
//             'editProject',
//             compact('project'),
//             [
//                 'title' => 'Project'
//             ]
//         );
//     }

//     public function destroy(Project $id)
//     {
//        Project::destroy($id->id);
//        return redirect('/project'
//        );
//     }
// }
