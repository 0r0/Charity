<?php

namespace App\Http\Controllers;

use App\Charity;
use App\Project;
use App\Requirement;
use Auth;
use Illuminate\Http\Request;

class ProjectController extends Controller
{


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
        if ($request->has('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = $image->getClientOriginalName();
            $project->picture = $imageName;
            $image->move(public_path() . '/projects');

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
        if($request->archive){
            $project->is_archive=true;
        }
//        $project->picture = $picture; // work on it in future
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = $image->getClientOriginalName();
            $project->picture = $imageName;
            $image->move(public_path() . '/projects');
//
        }
        $project->save();

//        $prj = $project->money;
//        return response()->json('hhhhh');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project $project
     * @return \Illuminate\Http\Response
     */
    public function editRequirement(Request $request, $id)
    {
        $requirement = Requirement::find($id);
        $requirement->skill = $request->skill;


//save date in db
        $persianDate = $request->runDate;

        $persianDate = explode('-', $persianDate);
//        return response()->json( gettype($persianDate));

        $checkDate = \Morilog\Jalali\CalendarUtils::checkDate($persianDate[0], $persianDate[1], $persianDate[2], true);



        if ($checkDate) {
            $garegorian_date_array = \Morilog\Jalali\CalendarUtils::toGregorian($persianDate[0], $persianDate[1], $persianDate[2]);
            $garegorian_date_string = implode('-', $garegorian_date_array);
            $requirement->date = $garegorian_date_string;
//            return response()->json($garegorian_date_string);
        } else {
            return back()->withErrors(['errorMessage', 'لطفا تاریخ را در فرمت درست وارد کنید']);
        }

//        end  save date in db

        $requirement->place = $request->place;
        $requirement->bill_kind = $request->kind;
        $requirement->description = $request->description;
        $requirement->save();
        return response()->json((string)$requirement);
    }




    /**
     * store project Requirement in storage
     *
     * @return \Illuminate\Http\Response
     */
    public function storeRequirement(Request $request,$id)
    {

        $project=Project::find($id);
        $requirement=new Requirement();
        $requirement->skill=$request->skill;


        //save date in db
        $persianDate = $request->date;

        $persianDate = explode('-', $persianDate);


        $checkDate = \Morilog\Jalali\CalendarUtils::checkDate($persianDate[0], $persianDate[1], $persianDate[2], true);



        if ($checkDate) {
            $garegorian_date_array = \Morilog\Jalali\CalendarUtils::toGregorian($persianDate[0], $persianDate[1], $persianDate[2]);
            $garegorian_date_string = implode('-', $garegorian_date_array);


            $requirement->date = $garegorian_date_string;

        } else {
            return back()->withErrors(['errorMessage', 'لطفا تاریخ را در فرمت درست وارد کنید']);
        }
        //end save  date
        $requirement->place=$request->place;
        $requirement->bill_kind=$request->kind;
        $requirement->description=$request->description;
        $project->requirements()->save($requirement);



    }
}
