@extends('layouts.admin')
@section('dashboard-address',url('/charity-dashboard'))
@section('info-url',url('/edit-charity-info'))
@section('requests-url',url('/volunteers-request'))
@section('header-page')
    جزئیات بیشتر پروژه {{$project->title}}
    @endsection
@section('user-login')
    {{Auth::guard('charity')->user()->firstName}} {{Auth::guard('charity')->user()->lastName}}
@endsection
@section('login-username',Auth::guard('charity')->user()->userName)
@section('body-content')

    @endsection
