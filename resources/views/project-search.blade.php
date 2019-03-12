@extends('layouts.skeleton')
@push('head-script')
    <script type="text/javascript" src="{{asset('js/blockui.min.js')}}"></script>
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('js/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/learning.js')}}"></script>
@endpush
@section('main-content')
    <div class="page-container">

        <div class="page-content">

            <div class="content-wrapper">
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">جستجو پروژه ها</span>
                            </h4>
                            <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

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
                    <div class="col-md-3">
                        <div class="sidebar-detached">
                            <div class="sidebar sidebar-default sidebar-separate">
                                <div class="sidebar-content">

                                    <!-- Sidebar search -->
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <div class="panel-title text-semibold">
                                                <i class="icon-search4 text-size-base position-left"></i>
                                                فیلتر
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <form action="{{route('project-search')}}" method="get">
                                                <div class="form-group">
                                                    <div class="has-feedback has-feedback-left">
                                                        <input type="search" class="form-control"
                                                               placeholder="کلمه جستجو" name="word_search">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-reading text-size-large text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="has-feedback has-feedback-left">
                                                        <input type="search" class="form-control"
                                                               placeholder="مکان" name="place_search">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-pin-alt text-size-large text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label class="display-block">
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"
                                                                                              name="free_checkbox"></span>
                                                            </div>
                                                            رایگان
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label class="display-block">
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"
                                                                                              name="earned_checkbox"></span>
                                                            </div>
                                                            پولی
                                                        </label>
                                                    </div>

                                                    {{--<div class="checkbox">--}}
                                                    {{--<label class="display-block">--}}
                                                    {{--<div class="checker"><span><input type="checkbox"--}}
                                                    {{--class="styled"></span>--}}
                                                    {{--</div>--}}
                                                    {{--Remote--}}
                                                    {{--</label>--}}
                                                    {{--</div>--}}
                                                </div>

                                                <button type="submit" class="btn bg-blue btn-block"
                                                        name="submit_search">
                                                    <i class="icon-search4 text-size-base position-left"></i>
                                                    جستجو
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /sidebar search -->


                                    <!-- Location selection -->
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <div class="panel-title text-semibold">
                                                <i class="icon-pin-alt position-left"></i>
                                                مکان
                                            </div>

                                            <div class="heading-elements not-collapsible">
                                                <a href="#" class="heading-text">+ Add</a>
                                            </div>
                                        </div>

                                        <form action="#">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <div class="checkbox no-margin-top">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Amsterdam, North Holland Province, Netherlands
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Koog aan de Zaan, North Holland Province, Netherlands
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Amsterdam Binnenstad en Oostelijk Havengebied, North Holland
                                                            Province, Netherlands
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Hoofddorp, North Holland Province, Netherlands
                                                        </label>
                                                    </div>

                                                    <div class="checkbox no-margin-bottom">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Alkmaar, North Holland Province, Netherlands
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-footer no-padding">
                                                <a href="#" class="btn btn-default btn-block no-border">All
                                                    locations</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /location selection -->


                                    <!-- Title selection -->
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <div class="panel-title text-semibold">
                                                <i class="icon-menu7 position-left"></i>
                                                نیازمندی ها
                                            </div>

                                            <div class="heading-elements not-collapsible">
                                                <a href="#" class="heading-text">+ Add</a>
                                            </div>
                                        </div>

                                        <form action="#">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <div class="checkbox no-margin-top">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Developer
                                                            <span class="text-muted text-size-small">&nbsp;(38)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Front end designer
                                                            <span class="text-muted text-size-small">&nbsp;(43)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            UX designer
                                                            <span class="text-muted text-size-small">&nbsp;(74)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Software engineer
                                                            <span class="text-muted text-size-small">&nbsp;(25)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Full stack designer
                                                            <span class="text-muted text-size-small">&nbsp;(12)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Motion designer
                                                            <span class="text-muted text-size-small">&nbsp;(53)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox no-margin-bottom">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            PHP developer
                                                            <span class="text-muted text-size-small">&nbsp;(19)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-footer no-padding">
                                                <a href="#" class="btn btn-default btn-block no-border">All job
                                                    titles</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /title selection -->


                                    <!-- Industry -->
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <div class="panel-title text-semibold">
                                                <i class="icon-collaboration position-left"></i>
                                                گروه هدف
                                            </div>

                                            <div class="heading-elements not-collapsible">
                                                <a href="#" class="heading-text">+ Add</a>
                                            </div>
                                        </div>

                                        <form action="#">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <div class="checkbox no-margin-top">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Arts and design
                                                            <span class="text-muted text-size-small">&nbsp;(32)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Engineering
                                                            <span class="text-muted text-size-small">&nbsp;(65)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Computer Software
                                                            <span class="text-muted text-size-small">&nbsp;(235)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Financial Services
                                                            <span class="text-muted text-size-small">&nbsp;(26)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Service Industry
                                                            <span class="text-muted text-size-small">&nbsp;(94)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Healthcare
                                                            <span class="text-muted text-size-small">&nbsp;(35)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox no-margin-bottom">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Law Enforcement
                                                            <span class="text-muted text-size-small">&nbsp;(40)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-footer no-padding">
                                                <a href="#" class="btn btn-default btn-block no-border">All
                                                    industries</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /industry -->


                                    <!-- Company selection -->
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <div class="panel-title text-semibold">
                                                <i class="icon-briefcase3 position-left"></i>
                                                خیریه ها
                                            </div>

                                            <div class="heading-elements not-collapsible">
                                                <a href="#" class="heading-text">+ Add</a>
                                            </div>
                                        </div>

                                        <form action="#">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <div class="checkbox no-margin-top">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Amazon
                                                            <span class="text-muted text-size-small">&nbsp;(43)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            The North Face
                                                            <span class="text-muted text-size-small">&nbsp;(124)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Transfer Wise
                                                            <span class="text-muted text-size-small">&nbsp;(67)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            ING Bank
                                                            <span class="text-muted text-size-small">&nbsp;(37)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Facebook
                                                            <span class="text-muted text-size-small">&nbsp;(28)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Dell
                                                            <span class="text-muted text-size-small">&nbsp;(67)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox no-margin-bottom">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Microsoft
                                                            <span class="text-muted text-size-small">&nbsp;(57)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-footer no-padding">
                                                <a href="#" class="btn btn-default btn-block no-border">All
                                                    companies</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /company selection -->


                                    <!-- Specific skills -->
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <div class="panel-title text-semibold">
                                                <i class="icon-stars position-left"></i>
                                                عنوان مهارت ها
                                            </div>

                                            <div class="heading-elements not-collapsible">
                                                <a href="#" class="heading-text">+ Add</a>
                                            </div>
                                        </div>

                                        <form action="#">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <div class="checkbox no-margin-top">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            JavaScript
                                                            <span class="text-muted text-size-small">&nbsp;(53)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            HTML5, SCSS/SASS
                                                            <span class="text-muted text-size-small">&nbsp;(36)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Wireframing
                                                            <span class="text-muted text-size-small">&nbsp;(21)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Scrum
                                                            <span class="text-muted text-size-small">&nbsp;(8)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Grunt/gulp/bower
                                                            <span class="text-muted text-size-small">&nbsp;(68)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Node.js
                                                            <span class="text-muted text-size-small">&nbsp;(32)</span>
                                                        </label>
                                                    </div>

                                                    <div class="checkbox no-margin-bottom">
                                                        <label>
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            AngularJS
                                                            <span class="text-muted text-size-small">&nbsp;(94)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-footer no-padding">
                                                <a href="#" class="btn btn-default btn-block no-border">همه مهارت ها</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /specific skills -->


                                    <!-- Date posted -->
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <div class="panel-title text-semibold">
                                                <i class="icon-calendar3 position-left"></i>
                                                زمان پست
                                            </div>
                                        </div>

                                        <form action="#">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <div class="radio no-margin-top">
                                                        <label>
                                                            <div class="choice"><span><input type="radio"
                                                                                             name="when_posted"
                                                                                             class="styled"></span>
                                                            </div>
                                                            Today
                                                            <span class="text-muted text-size-small">&nbsp;(632)</span>
                                                        </label>
                                                    </div>

                                                    <div class="radio">
                                                        <label>
                                                            <div class="choice"><span><input type="radio"
                                                                                             name="when_posted"
                                                                                             class="styled"></span>
                                                            </div>
                                                            Yesterday
                                                            <span class="text-muted text-size-small">&nbsp;(431)</span>
                                                        </label>
                                                    </div>

                                                    <div class="radio">
                                                        <label>
                                                            <div class="choice"><span><input type="radio"
                                                                                             name="when_posted"
                                                                                             class="styled"></span>
                                                            </div>
                                                            Last week
                                                            <span class="text-muted text-size-small">&nbsp;(31)</span>
                                                        </label>
                                                    </div>

                                                    <div class="radio">
                                                        <label>
                                                            <div class="choice"><span><input type="radio"
                                                                                             name="when_posted"
                                                                                             class="styled"></span>
                                                            </div>
                                                            Last month
                                                            <span class="text-muted text-size-small">&nbsp;(124)</span>
                                                        </label>
                                                    </div>

                                                    <div class="radio no-margin-bottom">
                                                        <label>
                                                            <div class="choice"><span><input type="radio"
                                                                                             name="when_posted"
                                                                                             class="styled"></span>
                                                            </div>
                                                            Any time
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /date posted -->


                                    <!-- Latest searches -->
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <div class="panel-title text-semibold">
                                                <i class="icon-history position-left"></i>
                                                Latest searches
                                            </div>
                                        </div>

                                        <div class="list-group no-border">
                                            <a href="#" class="list-group-item">
                                                Senior UX/UI designer
                                                <div class="text-muted text-size-small">Amsterdam</div>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                Full stack web developer
                                                <div class="text-muted text-size-small">Zurich</div>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                Business controller
                                                <div class="text-muted text-size-small">Budapest</div>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                Python/Django developer
                                                <div class="text-muted text-size-small">Hamburg</div>
                                            </a>
                                            <a href="#" class="list-group-item">
                                                Senior PHP software engineer
                                                <div class="text-muted text-size-small">London</div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- /latest searches -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        {{--@if(count($projects)<3)--}}
                            {{--<p>تعداد جستجوها از 3 تا کمتر است</p>--}}
                        {{--@else--}}
                            {{--@foreach($projects as $project)--}}
                                {{--<p>{{$project}}</p>--}}
                                {{--@endforeach--}}


                        @foreach($projects->chunk(3) as $project)
                            <div class="row">
                                @foreach($project as $sub_project)
                                    <div class="col-md-4">
                                        <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                            <div class="panel-body">
                                                <div class="thumb">
                                                    <a href="#course_preview{{$sub_project->id}}" data-toggle="modal">
                                                        <img src="{{asset('images/placeholder.jpg')}}"
                                                             class="img-responsive img-rounded" alt="">
                                                        <span class="zoom-image"><i class="icon-play3"></i></span>
                                                    </a>
                                                </div>

                                                <div class="blog-preview">
                                                    <div
                                                        class="content-group-sm media blog-title stack-media-on-mobile text-left">
                                                        <div class="media-body">
                                                            <h5 class="text-semibold no-margin"><a href="#"
                                                                                                   class="text-default">{{$sub_project->title}}</a>
                                                            </h5>

                                                            <ul class="list-inline list-inline-separate no-margin text-muted">
                                                                <li>توسط <a href="#">{{$sub_project->supporter}}</a>
                                                                </li>
                                                                <li>Nov 1st, 2016</li>
                                                            </ul>
                                                        </div>

                                                        <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                            {{$sub_project->money}}</h5>
                                                    </div>
                                                    <p>{{substr($sub_project->summery,0,40)}}<a
                                                            href="#description{{$sub_project->id}}"
                                                            data-toggle="collapse">[بیشتر]</a></p>
                                                    <div id="description{{$sub_project->id}}" class="collapse">
                                                        {{substr($sub_project->summery,40)}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-footer panel-footer-condensed"><a
                                                    class="heading-elements-toggle"><i
                                                        class="icon-more"></i></a>
                                                <div class="heading-elements">
                                                    <ul class="list-inline list-inline-separate heading-text">
                                                        @php
                                                            $persianDate= Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($sub_project->runDate));

                                                        @endphp
                                                        <li><i class="icon-alarm position-left"></i>تاریخ
                                                            شروع:{{$persianDate}} </li>
                                                        <li>
                                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                            <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                            <span class="text-muted position-right">(49)</span>
                                                        </li>
                                                    </ul>

                                                    <a href="{{route('all-project-more-info',['id'=>$sub_project->id])}}"
                                                       class="heading-text pull-right">جزئیات بیشتر <i
                                                            class="icon-arrow-left13 position-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                            {{--@endif--}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{--@foreach($projects as $project)--}}
        {{--<div class="modal fade" id="course_preview{{$project->id}}" tabindex="-1">--}}
            {{--<div class="modal-dialog modal-lg">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header">--}}
                        {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                        {{--<h6 class="modal-title">Course preview</h6>--}}
                    {{--</div>--}}

                    {{--<div class="modal-body">--}}
                        {{--<div class="embed-responsive embed-responsive-16by9">--}}
                            {{--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"--}}
                                    {{--frameborder="0" allowfullscreen></iframe>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                        {{--<button type="button" class="btn btn-primary">Take this course</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}
@endsection

