@extends('layouts.admin')
@section('dashboard-address',url('/charity-dashboard'))
@section('info-url',url('/edit-charity-info'))
@section('requests-url',url('/volunteers-request'))
@section('header-page','داشبورد خیریه')
@section('user-login')
    {{Auth::guard('charity')->user()->firstName}} {{Auth::guard('charity')->user()->lastName}}
@endsection
@section('login-username',Auth::guard('charity')->user()->userName)
@section('body-content')
    @if(count($projects)>=3)
        @foreach($projects->chunk(3) as $project)
            <div class="row">
                @foreach($project as $sub_project)
                    <div class="col-md-4">
                        <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                            <div class="panel-body">
                                <div class="thumb">
                                    <a href="#course_preview{{$sub_project->id}}" data-toggle="modal">
                                        <img src="http://127.0.0.1:8000/images/placeholder.jpg"
                                             class="img-responsive img-rounded" alt="">
                                        <span class="zoom-image"><i class="icon-play3"></i></span>
                                    </a>
                                </div>

                                <div class="blog-preview">
                                    <div class="content-group-sm media blog-title stack-media-on-mobile text-left">
                                        <div class="media-body">
                                            <h5 class="text-semibold no-margin"><a href="#" class="text-default">{{$sub_project->title}} {{$sub_project->lastName}}</a></h5>

                                            <ul class="list-inline list-inline-separate no-margin text-muted">
                                                {{--<li>توسط <a href="#">کاریابی صمد</a></li>--}}
                                                <li>Nov 1st, 2016</li>
                                            </ul>
                                        </div>

                                        <h5 class="text-success media-right no-margin-bottom text-semibold">
                                            1553195تومان </h5>
                                    </div>
                                    <p>Fuga distinctio impedit at. Aut debitis <a href="#description3"
                                                                                  data-toggle="collapse">[بیشتر]</a></p>
                                    <div id="description3" class="collapse">
                                        ut aliquam quia. Assumenda recusandae sed harum rerum ut nulla debitis mollitia.
                                        Unde dignissimos odio sunt facilis ipsum et.
                                    </div>
                                </div>
                            </div>

                            <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a><a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline list-inline-separate heading-text">
                                        <li><i class="icon-alarm position-left"></i>تاریخ شروع:13/12/1397</li>
                                        <li>
                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                            <span class="text-muted position-right">(49)</span>
                                        </li>
                                    </ul>
                                    <a href="#" class="heading-text pull-right" data-toggle="modal">جزئیات بیشتر <i
                                            class="icon-arrow-left13 position-right"></i></a>
                                    <a href="#" class="heading-text pull-right" data-toggle="modal">ویرایش اطلاعات <i
                                            class=" icon-pencil7 position-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    @else
        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-4">
                    <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                        <div class="panel-body">
                            <div class="thumb">
                                <a href="#course_preview{{$project->id}}" data-toggle="modal">
                                    <img src="http://127.0.0.1:8000/images/placeholder.jpg"
                                         class="img-responsive img-rounded" alt="">
                                    <span class="zoom-image"><i class="icon-play3"></i></span>
                                </a>
                            </div>

                            <div class="blog-preview">
                                <div class="content-group-sm media blog-title stack-media-on-mobile text-left">
                                    <div class="media-body">
                                        <h5 class="text-semibold no-margin"><a href="#" class="text-default">{{$project->firstName}} {{$project->lastName}}</a></h5>

                                        <ul class="list-inline list-inline-separate no-margin text-muted">
                                            <li>توسط <a href="#">کاریابی صمد</a></li>
                                            <li>Nov 1st, 2016</li>
                                        </ul>
                                    </div>

                                    <h5 class="text-success media-right no-margin-bottom text-semibold">
                                        1553195تومان </h5>
                                </div>
                                <p>Fuga distinctio impedit at. Aut debitis <a href="#description3"
                                                                              data-toggle="collapse">[بیشتر]</a></p>
                                <div id="description3" class="collapse">
                                    ut aliquam quia. Assumenda recusandae sed harum rerum ut nulla debitis mollitia.
                                    Unde dignissimos odio sunt facilis ipsum et.
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                    class="icon-more"></i></a><a class="heading-elements-toggle"><i
                                    class="icon-more"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline list-inline-separate heading-text">
                                    <li><i class="icon-alarm position-left"></i>تاریخ شروع:13/12/1397</li>
                                    <li>
                                        <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                        <span class="text-muted position-right">(49)</span>
                                    </li>
                                </ul>
                                <a href="#" class="heading-text pull-right" data-toggle="modal">جزئیات بیشتر <i
                                        class="icon-arrow-left13 position-right"></i></a>
                                <a href="#" class="heading-text pull-right" data-toggle="modal">ویرایش اطلاعات <i
                                        class=" icon-pencil7 position-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif



    <!-- video model -->
    @foreach($projects as $project)
        <div class="modal fade" id="course_preview{{$project->id}}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title">Course preview</h6>
                    </div>

                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Take this course</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!--/video model -->
@endsection
