@extends('layouts.admin')

@section('dashboard-address')
    @if(Auth::guard('charity')->check())
        {{url('/charity-dashboard')}}
    @elseif(Auth::guard('volunteer')->check())
        {{url('/volunteer-dashboard')}}
    @endif
@endsection
@section('info-url')
    @if(Auth::guard('charity')->check())
        {{url('/edit-charity-info')}}
    @elseif(Auth::guard('volunteer')->check())
        {{url('/edit-volunteer-info')}}
    @endif
@endsection
@section('requests-url')
    @if(Auth::guard('charity')->check())
        {{--{{url('/edit-charity-info')}}--}}
        <li><a href="{{url('/volunteers-request')}}"><i class="icon-accessibility"></i>
                <span>درخواست ها</span></a></li>
    @endif
@endsection
{{--show profie image--}}
{{--@if(file_exists(public_path('images/profile/tt.jpg'.$volunteer->imagename)))--}}
@if(file_exists(public_path('images/profile/tt.jpg')))
@section('profile-image')
    {{--    <img src="{{asset('images/profile/tt.jpg'.$volunteer->imagename)}}"--}}
    <img src="{{asset('images/profile/tt.jpg')}}"
         class="img-circle img-sm" alt="">
@endsection
@section('profile-image2')
    {{--    <img src="{{asset('images/profile/'.$volunteer->imagename)}}"--}}
    <img src="{{asset('images/profile/tt.jpg')}}"
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
{{----}}
@section('header-page')
    جزئیات بیشتر پروژه {{$project->title}}
@endsection
@section('user-login')
    @if(Auth::guard('charity')->check())

        {{Auth::guard('charity')->user()->firstName}} {{Auth::guard('charity')->user()->lastName}}
    @elseif(Auth::guard('volunteer')->check())
        {{Auth::guard('volunteer')->user()->firstName}} {{Auth::guard('volunteer')->user()->lastName}}
    @endif
@endsection
@section('login-username')
    @if(Auth::guard('charity')->check())
        {{Auth::guard('charity')->user()->userName}}
    @elseif(Auth::guard('volunteer')->check())
        {{Auth::guard('volunteer')->user()->userName}}
    @endif
@endsection
@section('body-content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Table header styling<a class="heading-elements-toggle"><i class="icon-more"></i></a>
            </h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">



        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr class="bg-blue">
                    <th>#</th>
                    <th>مهارت</th>
                    <th>زمان</th>
                    <th>مکان</th>
                    <th>نوع هزینه</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($project_requirement as $requirement)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$requirement->skill}}</td>
                        <td>{{$requirement->date}}</td>
                        <td>{{$requirement->place}}</td>
                        @if($requirement->bill_kind)
                            <td>پولی</td>
                        @else
                            <td>مجانی</td>
                        @endif
                        <td><a href="#" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">ویرایش <b><i class="icon-menu7"></i></b></a></td>
                    </tr>
                    <tr>
                        <td>توضیحات</td>
                    <td colspan="5">
                        {{$requirement->description}}
                    </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>

        </div>

    </div>
@endsection
