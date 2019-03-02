<?php

namespace App\Http\Controllers;

use App\Charity;
use App\Project;
use Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::guard('charity')->user()->id;
        $charity = Charity::find($id);
        $project = new Project();
        $project->title = $request->title;
        $project->runDate = $request->runDate;
        $project->supporter = $request->supporter;
        $project->money = $request->budget;
        $project->description = $request->description;
        $project->report = $request->report;
        if ($request->has('profile_picture'))
        {
            $image=$request->file('profile_picture');
            $imageName=$image->getClientOriginalName();
            $project->picture=$imageName;
            $image->move(public_path().'/projects');

        }
//        $project->picture
        $charity->projects()->attach($project);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $charityId = Auth::guard('charity')->user()->id;
        $charity = Charity::find($charityId);
        $projects = $charity->projects()->get();
        $prj = $projects->where('id', $id);
        if ($prj->first()) {
            $project = Project::find($id);

            $project_requirement = $project->requirements()->get();
            return view('project-more-info', compact('project_requirement', 'project'));
        } else {
            return redirect('/charity-dashboard');
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $project = Project::find($id);
        //get fields from request
        $title = $request->title;
        $summery = $request->summery;
        $description = $request->description;
        $money = $request->money;
        $report = $request->report;
        $supporter = $request->supporter;
        $runDate = $request->runDate;
        $picture = $request->picture;
        //update fields
        $project->title = $title;
        $project->summery = $summery;
        $project->description = $description;
        $project->money = $money;
        $project->report = $report;//
        $project->supporter = $supporter;
        $project->runDate = $runDate;
//        $project->picture = $picture; // work on it in future
        $project->save();

        $prj = $project->money;
        return response()->json($summery);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
