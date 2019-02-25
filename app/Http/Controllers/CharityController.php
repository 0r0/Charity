<?php

namespace App\Http\Controllers;

use App\Charity;
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
        $id = Auth::guard('charity')->user()->id;
        $charity = Charity::find($id);
        $projects = $charity->projects()->get();
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
    public function show(Charity $charity)
    {
        //
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
        $charity = Charity::find($id);
        $firstName = $request->FirstName;
        $lastName = $request->LastName;
        $company = $request->company;
        $email = $request->email;
        $address = $request->address;

        $bio = $request->bio;
        $skill = $request->skill;
//        $interests = $request->interests;// work on interest section in future
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

        $charity->userName=$userName;
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
}
