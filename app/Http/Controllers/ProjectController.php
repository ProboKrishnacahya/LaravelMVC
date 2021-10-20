<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $projects = Project::all();
        return view(
            'project',
            compact('projects'),
            [
                'title' => 'Project',
                // 'pagetitle' => 'My Project',
                // 'projects' => Project::allData()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('projects')->insert([
            'project' => $request->project,
            'description' => $request->description,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return view(
            'project',
            [
                'title' => 'Project',
                'projects' => Project::all()
                // 'pagetitle' => 'My Project',
                // 'projects' => Project::allData()
            ]
        );
    }

    public function goToForm()
    {
        return view(
            'createProject',
            [
                'title' => 'Project'
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::where('id', $id)
            ->orderBy('project')
            ->get();
        return view(
            'showproject',
            compact('project'),
            [
                'title' => 'Project',
                //         'pagetitle' => 'Detail Project',
                //         'project' => Project::dataWithCode($code)
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        DB::table('projects')
            ->where('id', $request->id)
            ->update([
                'project' => $request->project,
                'description' => $request->description,
                'semester' => $request->semester,
                'mata_kuliah' => $request->mata_kuliah
            ]);

        return view(
            'project',
            [
                'title' => 'Project',
                'projects' => Project::all()
                // 'pagetitle' => 'My Project',
                // 'projects' => Project::allData()
            ]
        );
    }

    public function goToFormEdit($id)
    {
        $project = Project::where('id', $id)
            ->orderBy('project')
            ->get();
        return view(
            'editProject',
            compact('project'),
            [
                'title' => 'Project'
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('projects')
            ->where('id', $id)
            ->delete();

        return view(
            'project',
            [
                'title' => 'Project',
                'projects' => Project::all()
                // 'pagetitle' => 'My Project',
                // 'projects' => Project::allData()
            ]
        );
    }
}
