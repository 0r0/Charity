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
        $searchResult_id = [];
//        if($request->word_search){
//            return 'mehdi';
//        }
//        else{
//            return 'hello';
//        }
        if ($request->word_search) {
            $projectsearch = Project::search($request->word_search)->get();

            if ($projectsearch->first()) {
                if ($request->place_search) {//if request has word_search and place_search
                    $placeSearch = $request->place_search;

                    if ($request->free_checkbox) {//if request have word_search and place_search and free_checkbox

                        if ($request->earned_checkbox) { //if request have word_search and place_search  and free_checkbox and earned_checkbox
                            foreach ($projectsearch as $prj) {

                                $search = $prj->requirements()->search($placeSearch)->get();
                                if ($search->first()) {
                                    foreach ($search as $s) {
                                        array_push($searchResult_id, $s->project_id);
                                    }

                                }

                            }
                            $searchResult_id = array_unique($searchResult_id);
//                            dd('garsia cambojia');
                        } else {//if request have word_search and place_search  and free_checkbox and  no earned_checkbox
                            foreach ($projectsearch as $prj) {

                                $search = $prj->requirements()->search($placeSearch, 0)->get();
                                if ($search->first()) {
                                    foreach ($search as $s) {
                                        array_push($searchResult_id, $s->project_id);
                                    }

                                }

                            }
                            $searchResult_id = array_unique($searchResult_id);
//                            dd($searchResult_id);

                        }

                    } else {// if request has word_search and  place_search and no free_checkbox

                        if ($request->earned_checkbox) {// if request have word_search and place_search and  earned_checkbox and no free_checkbox

                            foreach ($projectsearch as $prj) {

                                $search = $prj->requirements()->search($placeSearch, 1)->get();

                                if ($search->first()) {
                                    foreach ($search as $s) {
                                        array_push($searchResult_id, $s->project_id);
                                    }

                                }

                            }
                            $searchResult_id = array_unique($searchResult_id);
//                            dd($searchResult_id);

                        } else {// if request have word_search place_search and no earned_checkbox and no free_checkbox

                            foreach ($projectsearch as $prj) {

                                $search = $prj->requirements()->search($placeSearch)->get();
//                                dd($search);
                                if ($search->first()) {
                                    foreach ($search as $s) {
                                        array_push($searchResult_id, $s->project_id);
                                    }


                                }
                            }
                            $searchResult_id = array_unique($searchResult_id);
//                            dd($searchResult_id);
                        }
                    }
                } else {// if request have word_search no place_search

                    if ($request->free_checkbox) {// if request have word_search no place_search and free_checkbox
                        if ($request->earned_checkbox) {// if request have  word_search and no place_search and free_checkbox  and earned_checkbox

                            foreach ($projectsearch as $prj) {

                                array_push($searchResult_id, $prj->id);

                            }
                            $searchResult_id = array_unique($searchResult_id);
//                            dd($searchResult_id);
                        } else {// if request have word_search and no place_search and free_checkbox  and  no earned_checkbox
                            foreach ($projectsearch as $prj) {
//                                dd($prj);
                                $search = $prj->requirements()->search('', 0)->get();
                                if ($search->first()) {
//
                                    array_push($searchResult_id, $prj->id);

                                }

                            }
                            $searchResult_id = array_unique($searchResult_id);
//                            dd($searchResult_id);

                        }

                    } else {// if request have word_search and no place_search  and no free_checkbox
                        if ($request->earned_checkbox) {// if request have word_search and no place_search and no free_checkbox and earned_checkbox
                            foreach ($projectsearch as $prj) {
                                $search = $prj->requirements()->search('', $request->earned_checkbox)->get();
                                if ($search->first()) {
                                    array_push($searchResult_id, $search->id);

                                }

                            }
                            $searchResult_id = array_unique($searchResult_id);
//                            dd('hello my love');
                        } else {// if request have  word_search and no place search and no free_checkbox and no earned_checkbox
                            foreach ($projectsearch as $prj) {

                                array_push($searchResult_id, $prj->id);
                            }
                            $searchResult_id = array_unique($searchResult_id);
//                            dd($searchResult_id);
                        }
                    }
                }
            } else {
//                $allProject = Project::all();// I think must do sth ;)
                dd('dont exsist');
            }


        } else { //if request has no word_search
            $allProject = Project::all();

            if ($request->place_search) {//if request have no word_search and place_search
                $placeSearch = $request->place_search;

                if ($request->free_checkbox) {//if request have no word_search and place_search and free_checkbox

                    if ($request->earned_checkbox) { //if request have no word_search and place_search  and free_checkbox and earned_checkbox
                        foreach ($allProject as $project) {
                            $search = $project->requirements()->search($placeSearch)->get();
                            foreach ($search as $s) {
                                array_push($searchResult_id, $s->project_id);
                            }
                        }
                        $searchResult_id = array_unique($searchResult_id);
//                        dd($searchResult_id);


                    } else {//if request have no word_search, and place_search  and free_checkbox and  no earned_checkbox

                        foreach ($allProject as $project) {
                            $search = $project->requirements()->search($placeSearch, 0)->get();
                            foreach ($search as $s) {
                                array_push($searchResult_id, $s->project_id);

                            }
                        }
                        $searchResult_id = array_unique($searchResult_id);
//                        dd($searchResult_id);

                    }

                } else {// if request have no word_search, and  place_search and no free_checkbox

                    if ($request->earned_checkbox) {// if request have no word_search and place_search and  earned_checkbox and no free_checkbox
                        foreach ($allProject as $project) {
                            $search = $project->requirements()->search($placeSearch, 1)->get();
                            foreach ($search as $s) {
                                array_push($searchResult_id, $s->project_id);
                            }
                        }
                        $searchResult_id = array_unique($searchResult_id);
//                        dd($searchResult_id);

                    } else {// if request have no word_search place_search and no earned_checkbox and no free_checkbox
                        foreach ($allProject as $project) {
                            $search = $project->requirements()->search($placeSearch)->get();
                            foreach ($search as $s) {
                                array_push($searchResult_id, $s->project_id);
                            }
                        }
                        $searchResult_id = array_unique($searchResult_id);
//                        dd($searchResult_id);

                    }
                }
            } else {// if request have no word_search no place_search


                if ($request->free_checkbox) {// if request have  no word_search no place_search and free_checkbox
                    if ($request->earned_checkbox) {// if request have no  word_search and no place_search and free_checkbox  and earned_checkbox
                        $searchResult = $allProject;
//                        dd($searchResult);
                    } else {// if request have no word_search and no place_search and free_checkbox  and  no earned_checkbox
                        foreach ($allProject as $project) {
                            $search = $project->requirements()->search('', 0)->get();
                            foreach ($search as $s)
                                array_push($searchResult_id, $s->project_id);
                        }
                        $searchResult_id = array_unique($searchResult_id);
//                        dd($searchResult_id);

                    }

                } else {// if request have no  word_search and no place_search  and no free_checkbox
                    if ($request->earned_checkbox) {// if request have no  word_search and no place_search   and no free_checkbox and earned_checkbox
                        foreach ($allProject as $project) {
                            $search = $project->requirements()->search('', 1)->get();
                            foreach ($search as $s) {
                                array_push($searchResult_id, $s->project_id);
                            }
                        }
                        $searchResult_id = array_unique($searchResult_id);
//                        dd($searchResult_id);


                    } else {// if request have no  word_search and no place search and no free_checkbox and no earned_checkbox
                        $searchResult = $allProject;
//                        dd('player');

                    }

                }
            }
        }

        if (!empty($searchResult)) {
            return view('project-search')->with('projects', $searchResult);

        } else {
            if (!empty($searchResult_id)) {
                $searchResult = Project::whereIn('id', $searchResult_id)->get();
                return view('project-search')->with('projects', $searchResult);
            } else {
                return view('project-search')->with('not_find', 'جستجو بدون نتیجه بود!');
            }
        }

    }

}
