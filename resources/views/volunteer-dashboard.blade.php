@extends('layouts.admin')
@section('dashboard-address',url('/volunteer-dashboard'))
@section('info-url',url('/edit-volunteer-info'))
@section('header-page','داشبورد داوطلب')
@section('user-login')
    {{Auth::guard('volunteer')->user()->firstName}} {{Auth::guard('volunteer')->user()->lastName}}
@endsection
@section('login-username',Auth::guard('volunteer')->user()->userName)
@section('body-content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Colored table options<a class="heading-elements-toggle"><i
                        class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            Table with custom background color supports all default table layouts and options. In this example our table
            displays all possible borders, striped rows and changes background color on row hover. All border, row and
            text colors are adjusted automatically.
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover bg-info-700">
                <thead>
                <tr>
                    <th>#</th>
                    <th>پروژه</th>
                    <th>position</th>
                    <th>متولی</th>
                    <th>زمان</th>
                    <th>وضعیت</th>
                    <th>اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($volunteerProjects as $project)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->pivot->skill}}</td>
                        <td>{{$project->supporter}}</td>
                        <td>{{$project->pivot->date}}</td>
                        @if($project->pivot->situation==-1)
                            <td>منتظر نظر خیریه</td>
                        @endif
                        @if($project->pivot->situation==1)
                            <td>تایید شده</td>
                        @endif
                        @if($project->pivot->situation== 0)
                            <td>رد شده</td>
                        @endif
                        <td>
                            <div class="form-group">
                                <label class="control-label col-lg-2">تغییروضعیت</label>
                                <div class="col-lg-offset-1 col-lg-4">
                                    <select name="select" class="form-control">
                                        <option value="opt1">فعال</option>
                                        <option value="opt2">انصراف</option>

                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <button class="btn btn-primary">تایید</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
