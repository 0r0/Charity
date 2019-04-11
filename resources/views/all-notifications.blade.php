@extends('layouts.admin')
@php
if(auth('volunteer')->check()){
    $user=Auth::guard('volunteer')->user();
}
elseif(auth('charity')->check())
{
$user=auth('charity')->user();
}
@endphp
@if(file_exists(public_path('images/profile/'.$user->imagename)))
@section('profile-image')
    <img src="{{asset('images/profile/'.$user->imagename)}}"
         class="img-circle img-sm" alt="">
@endsection
@section('profile-image2')
    <img src="{{asset('images/profile/'.$user->imagename)}}"
         class="img-circle img-sm" alt="">
@endsection
@else
@section('profile-image')
    <img src="{{asset('images/image.png')}}"
         class="img-circle img-sm" alt="">
@endsection
@section('profile-image2')
    <img src="{{asset('images/image.png')}}"
         class="img-circle img-sm" alt="">
@endsection
@endif
@section('header-page','همه نوتیفیکیشن ها')
@section('user-login')
    {{$user->firstName}} {{$user->lastName}}
@endsection
@section('login-username',$user->userName)
@section('body-content')
@foreach($user->notifications as $notification)
    {{$notification}}
    <br>
    @endforeach
@endsection

