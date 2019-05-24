<?php

namespace App\Http\Controllers;

use App\Charity;
use App\Notifications\AcceptVolunteerRequestNotification;
use App\Project;
use App\Volunteer;
use Illuminate\Http\Request;
use Auth;

class CharityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:charity');
    }

    public function index()
    {
//        $id = Auth::guard('charity')->user()->id;
        $projects=Auth::guard('charity')->user()->projects()->get();
//        $charity = Charity::find($id);
//        $projects2 = $charity->projects()->get();

        return view('charity-dashboard', compact('projects'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Charity $charity
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Auth::guard('charity')->user()->id;
        $charity = Charity::find($id);
        $projects = $charity->projects()->get();
        $volunteersArray = [];
        $allInfo = [];
        if ($projects->first()) {//check project is exist
            foreach ($projects as $project) {
//                $volunteers = $project->volunteers()->get();// must deleted
                $requirements = $project->requirements()->get();//get all project requirements
                if($requirements->first()) {
                    foreach ($requirements as $requirement) {
                        $volunteers = $requirement->volunteers()->get();//get all volunteers that request for project requirement
//                    array_push($volunteersArray, $volunteers);
                        if($volunteers->first()) {
                            $info = [$project, $requirement, $volunteers];
                            array_push($allInfo, $info);//add info array in allInfo array
                        }

                    }
//
                }
            }
        }
        return view('volunteers-request', compact('allInfo'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Charity $charity
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = Auth::guard('charity')->user()->id;
        $charity = Charity::find($id);
        return view('edit-charity-info', compact('charity'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Charity $charity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            ''
        ]);
        $charity = Charity::find($id);
        $firstName = $request->FirstName;
        $lastName = $request->LastName;
        $company = $request->company;
        $email = $request->email;
        $address = $request->address;

        $bio = $request->bio;
        $skill = $request->skill;
//        $interests = $request->interests;// work on interest section in future
//        dd($request->file('profile_picture'));
        if ($request->has('resume_file')) {
            $resume = $request->file('resume_file');
            $resumeName = $resume->getClientOriginalName();
            $resume->move(public_path() . '/resumes/', $resumeName);// save resume file in public/resumes
            $charity->resume = $resumeName;//add resume name in resume db field
        }
        if ($request->has('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $pictureName = $profilePicture->getClientOriginalName();
            $profilePicture->move(public_path() . '/images/profile/', $pictureName);
            $charity->imagename = $pictureName;
        }

        $mobile = $request->mobile;
        $phoneNumber = $request->phone_number;
        $site = $request->site;
        $userName = $request->userName;
        $charity->userName = $userName;
        $charity->firstName = $firstName;
        $charity->lastName = $lastName;
        $charity->email = $email;
        $charity->company = $company;
        $charity->mobileNumber = $mobile;
        $charity->phoneNumber = $phoneNumber;
        $charity->site = $site;
//        $charity->interests=$interests //in db intrest must changeto interests ;)

        $charity->skill = $skill;
        $charity->bio = $bio;
        $charity->address = $address;

        $charity->save();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Charity $charity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charity $charity)
    {
        //
    }


    public function accept1(Request $request, $id)

    {
        $volunteer = Volunteer::find($id);
        $project = $volunteer->projects()->find($request->project_id);

//        if($request->situation!=)
        $volunteer->projects()->updateExistingPivot($request->project_id, ['situation' => $request->situation]);
        $situation = $request->situation;
        if ($situation == 1) {
            $data = ' تایید شد ' . $project->title . 'درخواست شما در پروژه ';
        } elseif ($situation == 0) {
            $data = ' رد شد ' . $project->title . ' درخواست شما در پروژه ';

        }
        $projectTitle = $project->title;
        $volunteer->notify(new AcceptVolunteerRequestNotification($data, $projectTitle));
//        return response()->json($volunteer->projects()->find($request->project_id));
    }
    public function accept(Request $request, $id)

    {
//        return response()->json('successfull change situation');
        $volunteer = Volunteer::find($id);
        $requirement = $volunteer->requirements()->find($request->requirement_id);//use in data variable for sending in notification

//        if($request->situation!=)
        $volunteer->requirements()->updateExistingPivot($request->requirement_id, ['situation' => $request->situation]);//update situation
        $situation = $request->situation;
        if ($situation == 1) {
            $data = ' تایید شد ' . $requirement->skill . 'درخواست شما در نیازمندی ';
        } elseif ($situation == 0) {
            $data = ' رد شد ' . $requirement->skill . ' درخواست شما در نیازمندی ';

        }
        $project=Project::find($request->project_id);
        $projectTitle = $project->title;
        $volunteer->notify(new AcceptVolunteerRequestNotification($data, $projectTitle));
        return response()->json('successfull change situation');
    }
}
