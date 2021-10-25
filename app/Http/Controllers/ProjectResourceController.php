<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ProjectResourceController extends Controller
{
    public function index()
    {
        $active_welcome = "";
        $active_projects = "active";
        $active_courses = "";

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

    public function create()
    {
        return view('createProject', ['title' => 'Create Project']);
    }

    public function store(Request $request)
    {
        $code = Str::upper(Str::substr($request->project, 0, 3));

        Project::create([
            'code' => $code,
            'project' => $request->project,
            'description' => $request->description,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah
        ]);
        return redirect(route('project.index'));
    }

    public function show($code)
    {
        $projects = Project::where('code', $code)
            ->orderBy('project')
            ->first();
        $title = "My Project";
        return view('showproject', compact('projects', 'title'));
    }

    public function edit($code)
    {
        $projects = Project::findOrFail($code);
        $title = "My Project";
        return view('editProject', compact('projects', 'title'));
    }

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
