<?php

namespace App\Http\Controllers;

use App\Charity;
use App\Project;
use App\Volunteer;
use Illuminate\Http\Request;

class FirstPageController extends Controller
{

    public function index()
    {

        $latestProjects = Project::take(10)->orderBy('created_at', 'desc')->get();
        $elitProjects = Project::take(5)->orderBy('created_at')->get();//it must change in future after add elite column in project DB

        $charities = Charity::all();
        return view('index', compact('latestProjects', 'elitProjects', 'charities'));
    }

    public function allVolunteer()
    {
        $allVolunteers = Volunteer::all();
        return view('all-volunteers', compact('allVolunteers'));
    }

    public function projectMoreInfo($id)
    {

        $project = Project::find($id);
        $requirements = $project->requirements()->get();
        if (auth('volunteer')->check()) {
            $volunteer = auth('volunteer')->user();


            $projectVolunteerCheck = $project->volunteers()->find($volunteer->id);
            if ($projectVolunteerCheck) {
                $projectRequirement = $project->requirements()->where('skill', $projectVolunteerCheck->pivot->skill)->first();
                if ($projectRequirement) {

                    $situation = $projectVolunteerCheck->pivot->situation;
                    $reservedRequirementId=$projectRequirement->id;
                } else {
                    $situation = 3;
                    $reservedRequirementId=null;
                }

            } else {
                $situation = 3;
                $reservedRequirementId=null;

            }
        } else {
            $situation = 4;
        }

        return view('all-project-more-info', compact('project', 'requirements', 'situation','reservedRequirementId'));

    }

    public function charityMoreInfo($id)
    {
        $charity = Charity::find($id);
        $projects = $charity->projects()->get();
        return view('charity-more-info', compact('charity', 'projects'));
    }
}
