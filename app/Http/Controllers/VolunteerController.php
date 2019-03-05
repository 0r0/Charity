<?php

namespace App\Http\Controllers;

use App\Volunteer;
use Auth;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->middleware('auth:volunteer');
    }

    public function index()
    {
        $id = Auth::guard('volunteer')->user()->id;
        $volunteer = Volunteer::find($id);
        $volunteerProjects = $volunteer->projects()->get();

        return view('volunteer-dashboard', compact('volunteerProjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = Auth::guard('volunteer')->user()->id;
        $volunteer = Volunteer::find($id);
        return view('edit-volunteer-info', compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::guard('volunteer')->user()->id;
        $volunteer = Volunteer::find($id);
        $volunteer->userName = $request->userName;
        $volunteer->firstName = $request->FirstName;
        $volunteer->lastName = $request->LastName;
        $volunteer->company = $request->company;
        $volunteer->address = $request->address;
        if (isset($request->password) && isset($request->confirmPassword)) {
            $volunteer->password = $request->password;
            $volunteer->confirmPassword = $request->confirmPassword;
        }
        $volunteer->mobileNumber=$request->mobile;
        $volunteer->phoneNumber=$request->phone_number;
        if($request->has('resume_file'))
        {
            $resume=$request->file('resume_file');
            $resumeName=$resume->getClientOriginalName();
            $resume->move(public_path().'/resumes/',$resumeName);
            $volunteer->resume=$resumeName;
        }
        if($request->has('profile_picture')){
            $picture=$request->file('profile_picture');
            $pictureName=$picture->getClientOriginalName();
            $picture->move(public_path().'/images/profile',$pictureName);
            $volunteer->imagename=$pictureName;
        }
        $volunteer->site=$request->site;
//        $volunteer->intrest=$request->interest;
        $volunteer->skill=$request->profession;
        $volunteer->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//    public function showAll()
//    {
//
//    }
}
