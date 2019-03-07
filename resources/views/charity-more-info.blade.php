@extends('layouts.skeleton')
@section('main-content')
    <div class="page-container">

        <div class="page-content">
            <div class="content-wrapper">
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">اطلاعات کامل خیریه</span>
                            </h4>
                            <a class="heading-elements-toggle"><i class="icon-more"></i></a><a
                                class="heading-elements-toggle"><i class="icon-more"></i></a></div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="breadcrumb-line"><a class="breadcrumb-elements-toggle"><i
                                class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i
                                class="icon-menu-open"></i></a>
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li><a href="job_list_cards.html">Job search</a></li>
                            <li class="active">Cards list</li>
                        </ul>

                        <ul class="breadcrumb-elements">
                            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear position-left"></i>
                                    Settings
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">اطلاعات خیریه<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a>
                            </h5>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="bg-blue">
                                        <th>#</th>
                                        <th>نام</th>
                                        {{--<th>بانی</th>--}}
                                        <th>ایمیل</th>
                                        <th width="200px">آدرس</th>
                                        <th width="250px">توضیحات</th>
                                        <th>شماره تماس همراه</th>
                                        <th>شماره تماس ثابت</th>
                                        <th>سایت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>{{$charity->company}}</td>
                                        {{--<td>{{$charity->supporter}}</td>--}}
                                        <td>{{$charity->email}}</td>
                                        <td>{{$charity->address}}</td>
                                        <td>{{$charity->bio}}</td>
                                        <td>{{$charity->mobileNumber}}</td>
                                        <td>{{$charity->phoneNumber}}</td>
                                        <td><a href="http://{{$charity->site}}">{{$charity->site}}</a></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">اطلاعات پروژه<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a>
                            </h5>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="bg-blue">
                                        <th>#</th>
                                        <th>عنوان</th>
                                        <th>بانی</th>
                                        <th width="200px">خلاصه</th>
                                        <th width="250px">توضیحات</th>
                                        <th>بودجه</th>
                                        <th>زمان اجرا</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($projects as $project)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$project->title}}</td>
                                            <td>{{$project->supporter}}</td>
                                            <td>{{$project->summery}}</td>
                                            <td>{{$project->description}}</td>
                                            <td>{{$project->money}}</td>
                                            @php
                                                $persianDate= Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($project->runDate));

                                            @endphp
                                            <td>{{$persianDate}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
