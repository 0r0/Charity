<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Notifications\CommentNotification;
use App\Project;
use Illuminate\Http\Request;

class CommentController extends Controller
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
        $request->validate([
            'comment_body' => 'required'
        ]);
        $comment = new Comment();
        $comment->body = $request->comment_body;
        if (auth('charity')->check()) {
            $user = auth('charity')->user();
            $comment->Charity()->associate($user);
        } elseif (auth('volunteer')->check()) {
            $user = auth('volunteer')->user();
            $comment->volunteer()->associate($user);
        } else {
            return back()->with('error', 'شما برای نظر دادن حتما باید وارد سیستم شوید');
        }
        $project = Project::find($request->project_id);
        $user->notify(new CommentNotification($user, $request->project_id));
        $project->comments()->save($comment);
        return redirect()->back()->with('message', 'دیدگاه مورد نظر با موفقیت ثبت شد');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * replay Comment save .
     *
     * @param  \Illuminate\Http\Request $request
     * //     * @return \Illuminate\Http\Response
     */
    public function replyStore(Request $request)
    {
        if (auth('charity')->check() || auth('volunteer')->check()) {
            $request->validate([
                'comment_body' => 'required',
            ]);
            $reply = new Comment();
            $reply->body = $request->get('comment_body');

            if (auth('charity')->check())
                $reply->charity()->associate(auth('charity')->user());
            elseif (auth('volunteer')->check())
                $reply->volunteer()->associate(auth('volunteer')->user());

            $reply->parent_id = $request->get('comment_id');
            $project = Project::find($request->get('project_id'));

            $project->comments()->save($reply);

            return back()->with('message', 'دیدگاه شما با موفقیت ثبت شد');
        } else {
            return back()->with('error', 'برای ثبت دیدگاه باید ابتدا وارد سیستم شوید');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
