<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function projectSearch(Request $request)
    {
//        if($request->has(''))
//        foreach($projectSearch as $ps){
//            $o=$ps->requirements()->search('بندرعباس'
//                ,0)->get();

        $searchResult = [];
        $searchResult_id = null;
        if ($request->has('word_search')) {
            $projectsearch = Project::search($request->word_search);

            if ($request->has('place_search')) {//if request has word_search and place_search
                $placeSearch = $request->place_search;

                if ($request->has('free_checkbox')) {//if request has word_search and place_search and free_checkbox

                    if ($request->has('earned_checkbox')) { //if request has word_search and place_search  and free_checkbox and earned_checkbox
                        foreach ($projectsearch as $prj) {

                            $search = $prj->requirements()->search($placeSearch)->get();
                            if ($search->first()) {
                                array_push($searchResult_id, $search->project_id);

                            }

                        }
                        $searchResult_id = array_unique($searchResult_id);
                    } else {//if request has word_search and place_search  and free_checkbox and  no earned_checkbox
                        foreach ($projectsearch as $prj) {

                            $search = $prj->requirements()->search($placeSearch, $request->free_checkbox)->get();
                            if ($search->first()) {
                                array_push($searchResult_id, $search->project_id);

                            }

                        }
                        $searchResult_id = array_unique($searchResult_id);

                    }

                } else {// if request has word_search and  place_search and no free_checkbox

                    if ($request->has('earned_checkbox')) {// if request has word_search and place_search and  earned_checkbox and no free_checkbox

                        foreach ($projectsearch as $prj) {

                            $search = $prj->requirements()->search($placeSearch, $request->earned_checkbox)->get();

                            if ($search->first()) {

                                array_push($searchResult_id, $search->project_id);
                                $searchResult_id = array_unique($searchResult_id);
                            }

                        }

                    } else {// if request has word_search place_search and no earned_checkbox and no free_checkbox

                        foreach ($projectsearch as $prj) {

                            $search = $prj->requirements()->search($placeSearch)->get();

                            if ($search->first()) {

                                array_push($searchResult_id, $search->project_id);


                            }
                        }
                        $searchResult_id = array_unique($searchResult_id);
                    }
                }
            } else {// if request have word_search no place_search

                if ($request->has('free_checkbox')) {// if request have word_search no place_search and free_checkbox
                    if ($request->has('earned_checkbox')) {// if request have  word_search and no place_search and free_checkbox  and earned_checkbox

                        foreach ($projectsearch as $prj) {
                            array_push($searchResult_id, $prj->project_id);

                        }
                        $searchResult_id = array_unique($searchResult_id);
                    } else {// if request have word_search and no place_search and free_checkbox  and  no earned_checkbox
                        foreach ($projectsearch as $prj) {

                            $search = $prj->requirements()->search('', $request->free_checkbox)->get();
                            if ($search->first()) {
                                array_push($searchResult_id, $search->project_id);

                            }

                        }
                        $searchResult_id = array_unique($searchResult_id);

                    }

                } else {// if request have word_search and no place_search  and no free_checkbox
                    if ($request->has('earned_checkbox')) {// if request have word_search and no place_search and no free_checkbox and earned_checkbox
                        foreach ($projectsearch as $prj) {
                            $search = $prj->requirements()->search('', $request->earned_checkbox)->get();
                            if ($search->first()) {
                                array_push($searchResult_id, $search->project_id);

                            }

                        }
                        $searchResult_id = array_unique($searchResult_id);
                    } else {// if request have  word_search and no place search and no free_checkbox and no earned_checkbox
                        foreach ($projectsearch as $prj) {

                            array_push($searchResult_id, $prj->project_id);
                        }
                        $searchResult_id = array_unique($searchResult_id);
                    }
                }
            }
        } else { //if request has no word_search
            $allProject = Project::all();

            if ($request->has('place_search')) {//if request have no word_search and place_search
                $placeSearch = $request->place_search;

                if ($request->has('free_checkbox')) {//if request have no word_search and place_search and free_checkbox

                    if ($request->has('earned_checkbox')) { //if request have no word_search and place_search  and free_checkbox and earned_checkbox
                        foreach ($allProject as $project) {
                            $search = $project->requirements()->search($placeSearch)->get();
                            array_push($searchResult_id, $search->id);
                        }
                        $searchResult_id = array_unique($searchResult_id);

                    } else {//if request have no word_search, and place_search  and free_checkbox and  no earned_checkbox

                        foreach ($allProject as $project) {
                            $search = $project->requirements()->search($placeSearch, $request->free_checkbox);
                            array_push($searchResult_id, $search->id);
                        }
                        $searchResult_id = array_unique($searchResult_id);
                    }

                } else {// if request have no word_search, and  place_search and no free_checkbox

                    if ($request->has('earned_checkbox')) {// if request have no word_search and place_search and  earned_checkbox and no free_checkbox
                        foreach ($allProject as $project) {
                            $search = $project->requirements()->search($placeSearch, $request->earned_checkbox)->get();
                            array_push($searchResult_id, $search->id);
                        }
                        $searchResult_id = array_unique($searchResult_id);
                    } else {// if request have no word_search place_search and no earned_checkbox and no free_checkbox
                        foreach ($allProject as $project) {
                            $search = $project->requirements()->search($placeSearch)->get();
                            array_push($searchResult_id, $search->id);
                        }
                        $searchResult_id = array_unique($searchResult_id);

                    }
                }
            } else {// if request have no word_search no place_search


                if ($request->has('free_checkbox')) {// if request have  no word_search no place_search and free_checkbox
                    if ($request->has('earned_checkbox')) {// if request have no  word_search and no place_search and free_checkbox  and earned_checkbox
                        $searchResult = $allProject;
                    } else {// if request have no word_search and no place_search and free_checkbox  and  no earned_checkbox
                        foreach ($allProject as $project) {
                            $prj = $project->requirements()->search('', $request->free_checkbox)->get();
                            array_push($searchResult_id, $prj->project_id);
                        }
                        $searchResult_id = array_unique($searchResult_id);
                    }

                } else {// if request have no  word_search and no place_search  and no free_checkbox
                    if ($request->has('earned_checkbox')) {// if request have no  word_search and no place_search   and no free_checkbox and earned_checkbox
                        foreach ($allProject as $project) {
                            $prj = $project->requirements()->search('', $request->earned_checkbox);
                            array_push($searchResult_id, $prj->id);
                        }
                        $searchResult_id = array_unique($searchResult_id);

                    } else {// if request have no  word_search and no place search and no free_checkbox and no earned_checkbox
                        $searchResult = $allProject;

                    }

                }
            }
        }
    }

}
