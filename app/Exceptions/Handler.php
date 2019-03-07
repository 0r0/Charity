<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);

        }
        if ($request->is('charity-dashboard') || $request->is('charity-dashboard/*')) {
            return redirect()->guest('/login/charity');
        }
        if ($request->is('volunteer-dashboard') || $request->is('volunteer-dashboard/*')) {
            return redirect()->guest('/login/volunteer');
        }
        if($request->is('edit-charity-info')||$request->is('edit-charity-info/*')){
            return redirect()->guest('/login/charity');
        }
        if($request->is('edit-volunteer-info')||$request->is('edit-volunteer-info/*')){
            return redirect()->guest('/login/volunteer');
        }
        if($request->is('volunteers-request') ||$request->is('volunteers-request/*')){
            return redirect()->guest('/login/charity');
        }
        if($request->is('projects/more-info')|| $request->is('projects/more-info/*')){
            return redirect()->guest('/login/charity');
        }
        if($request->is('projects/update') || $request->is('projects/update/*')){
            return redirect()->guest('/login/charity');
        }
        if($request->is('create-project') || $request->is('create-project/*')){
            return redirect()->guest('/login/charity');
        }
        return redirect()->guest(route('login'));


    }
}
