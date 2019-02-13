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
                                - Cards List</h4>
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
                                                Filter
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <form action="#">
                                                <div class="form-group">
                                                    <div class="has-feedback has-feedback-left">
                                                        <input type="search" class="form-control"
                                                               placeholder="Job title or keywords">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-reading text-size-large text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="has-feedback has-feedback-left">
                                                        <input type="search" class="form-control"
                                                               placeholder="Location">
                                                        <div class="form-control-feedback">
                                                            <i class="icon-pin-alt text-size-large text-muted"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label class="display-block">
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Full time
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label class="display-block">
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Part time
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label class="display-block">
                                                            <div class="checker"><span><input type="checkbox"
                                                                                              class="styled"></span>
                                                            </div>
                                                            Remote
                                                        </label>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn bg-blue btn-block">
                                                    <i class="icon-search4 text-size-base position-left"></i>
                                                    Find jobs
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
                                                Location
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
                                                Job title
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
                                                Industry
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
                                                Company
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
                                                Specific skills
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
                                                <a href="#" class="btn btn-default btn-block no-border">All skills</a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /specific skills -->


                                    <!-- Date posted -->
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <div class="panel-title text-semibold">
                                                <i class="icon-calendar3 position-left"></i>
                                                Date posted
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                    <div class="panel-body">
                                        <div class="thumb">
                                            <a href="#course_preview" data-toggle="modal">
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
                                                                                           class="text-default">Data
                                                            Governance</a></h5>

                                                    <ul class="list-inline list-inline-separate no-margin text-muted">
                                                        <li>by <a href="#">Eugene Kopyov</a></li>
                                                        <li>Nov 1st, 2016</li>
                                                    </ul>
                                                </div>

                                                <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                    $49.99</h5>
                                            </div>

                                            <p>When suspiciously goodness labrador understood rethought yawned grew
                                                piously endearingly inarticulate.</p>
                                            Oh goodness jeez trout distinct hence cobra despite taped laughed. One
                                            morning, when Gregor <a href="#">[...]</a>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-users position-left"></i> 382</li>
                                                <li><i class="icon-alarm position-left"></i> 60 hours</li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <span class="text-muted position-right">(49)</span>
                                                </li>
                                            </ul>

                                            <a href="#" class="heading-text pull-right">Subscribe <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                    <div class="panel-body">
                                        <div class="thumb">
                                            <a href="#course_preview" data-toggle="modal">
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
                                                                                           class="text-default">Java
                                                            language</a></h5>

                                                    <ul class="list-inline list-inline-separate no-margin text-muted">
                                                        <li>by <a href="#">Malcolm Davis</a></li>
                                                        <li>Oct 25th, 2016</li>
                                                    </ul>
                                                </div>

                                                <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                    $54.90</h5>
                                            </div>

                                            <p>"How about if I sleep a little bit longer and forget all this nonsense",
                                                he thought, but that was something.</p>
                                            However hard he threw himself onto his right, he always rolled back to where
                                            he was. He must <a href="#">[...]</a>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-users position-left"></i> 544</li>
                                                <li><i class="icon-alarm position-left"></i> 90 hours</li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-half text-size-base text-warning-300"></i>
                                                    <span class="text-muted position-right">(53)</span>
                                                </li>
                                            </ul>

                                            <a href="#" class="heading-text pull-right">Subscribe <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                    <div class="panel-body">
                                        <div class="thumb">
                                            <a href="#course_preview" data-toggle="modal">
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
                                                                                           class="text-default">Java
                                                            language</a></h5>

                                                    <ul class="list-inline list-inline-separate no-margin text-muted">
                                                        <li>by <a href="#">Malcolm Davis</a></li>
                                                        <li>Oct 25th, 2016</li>
                                                    </ul>
                                                </div>

                                                <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                    $54.90</h5>
                                            </div>

                                            <p>"How about if I sleep a little bit longer and forget all this nonsense",
                                                he thought, but that was something.</p>
                                            However hard he threw himself onto his right, he always rolled back to where
                                            he was. He must <a href="#">[...]</a>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-users position-left"></i> 544</li>
                                                <li><i class="icon-alarm position-left"></i> 90 hours</li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-half text-size-base text-warning-300"></i>
                                                    <span class="text-muted position-right">(53)</span>
                                                </li>
                                            </ul>

                                            <a href="#" class="heading-text pull-right">Subscribe <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                    <div class="panel-body">
                                        <div class="thumb">
                                            <a href="#course_preview" data-toggle="modal">
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
                                                                                           class="text-default">Data
                                                            Governance</a></h5>

                                                    <ul class="list-inline list-inline-separate no-margin text-muted">
                                                        <li>by <a href="#">Eugene Kopyov</a></li>
                                                        <li>Nov 1st, 2016</li>
                                                    </ul>
                                                </div>

                                                <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                    $49.99</h5>
                                            </div>

                                            <p>When suspiciously goodness labrador understood rethought yawned grew
                                                piously endearingly inarticulate.</p>
                                            Oh goodness jeez trout distinct hence cobra despite taped laughed. One
                                            morning, when Gregor <a href="#">[...]</a>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-users position-left"></i> 382</li>
                                                <li><i class="icon-alarm position-left"></i> 60 hours</li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <span class="text-muted position-right">(49)</span>
                                                </li>
                                            </ul>

                                            <a href="#" class="heading-text pull-right">Subscribe <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                    <div class="panel-body">
                                        <div class="thumb">
                                            <a href="#course_preview" data-toggle="modal">
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
                                                                                           class="text-default">Java
                                                            language</a></h5>

                                                    <ul class="list-inline list-inline-separate no-margin text-muted">
                                                        <li>by <a href="#">Malcolm Davis</a></li>
                                                        <li>Oct 25th, 2016</li>
                                                    </ul>
                                                </div>

                                                <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                    $54.90</h5>
                                            </div>

                                            <p>"How about if I sleep a little bit longer and forget all this nonsense",
                                                he thought, but that was something.</p>
                                            However hard he threw himself onto his right, he always rolled back to where
                                            he was. He must <a href="#">[...]</a>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-users position-left"></i> 544</li>
                                                <li><i class="icon-alarm position-left"></i> 90 hours</li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-half text-size-base text-warning-300"></i>
                                                    <span class="text-muted position-right">(53)</span>
                                                </li>
                                            </ul>

                                            <a href="#" class="heading-text pull-right">Subscribe <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                    <div class="panel-body">
                                        <div class="thumb">
                                            <a href="#course_preview" data-toggle="modal">
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
                                                                                           class="text-default">Java
                                                            language</a></h5>

                                                    <ul class="list-inline list-inline-separate no-margin text-muted">
                                                        <li>by <a href="#">Malcolm Davis</a></li>
                                                        <li>Oct 25th, 2016</li>
                                                    </ul>
                                                </div>

                                                <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                    $54.90</h5>
                                            </div>

                                            <p>"How about if I sleep a little bit longer and forget all this nonsense",
                                                he thought, but that was something.</p>
                                            However hard he threw himself onto his right, he always rolled back to where
                                            he was. He must <a href="#">[...]</a>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-users position-left"></i> 544</li>
                                                <li><i class="icon-alarm position-left"></i> 90 hours</li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-half text-size-base text-warning-300"></i>
                                                    <span class="text-muted position-right">(53)</span>
                                                </li>
                                            </ul>

                                            <a href="#" class="heading-text pull-right">Subscribe <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                    <div class="panel-body">
                                        <div class="thumb">
                                            <a href="#course_preview" data-toggle="modal">
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
                                                                                           class="text-default">Python
                                                            language</a></h5>

                                                    <ul class="list-inline list-inline-separate no-margin text-muted">
                                                        <li>by <a href="#">Mark Staters</a></li>
                                                        <li>Oct 26th, 2016</li>
                                                    </ul>
                                                </div>

                                                <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                    $89.90</h5>
                                            </div>

                                            <p>Anyone or become friendly with them. It can all go to Hell!" He felt a
                                                slight itch up on his belly.</p>
                                            Headboard so that he could lift his head better; found where the itch was,
                                            and saw that it <a href="#">[...]</a>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-users position-left"></i> 64</li>
                                                <li><i class="icon-alarm position-left"></i> 60 hours</li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <span class="text-muted position-right">(654)</span>
                                                </li>
                                            </ul>

                                            <a href="#" class="heading-text pull-right">Subscribe <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                    <div class="panel-body">
                                        <div class="thumb">
                                            <a href="#course_preview" data-toggle="modal">
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
                                                                                           class="text-default">LESS
                                                            language</a></h5>
                                                    <ul class="list-inline list-inline-separate no-margin text-muted">
                                                        <li>by <a href="#">James Alexander</a></li>
                                                        <li>Nov 3rd, 2016</li>
                                                    </ul>
                                                </div>
                                                <h5 class="text-danger-300 text-semibold media-right no-margin-bottom">
                                                    Free</h5>
                                            </div>

                                            <p>A wonderful serenity has taken possession of my entire soul, like these
                                                sweet mornings of spring.</p>
                                            I am alone, and feel the charm of existence in this spot, which was created
                                            for the bliss <a href="#">[...]</a>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-users position-left"></i> 272</li>
                                                <li><i class="icon-alarm position-left"></i> 15 hours</li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-half text-size-base text-warning-300"></i>
                                                    <span class="text-muted position-right">(12)</span>
                                                </li>
                                            </ul>

                                            <a href="#" class="heading-text pull-right">Subscribe <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                    <div class="panel-body">
                                        <div class="thumb">
                                            <a href="#course_preview" data-toggle="modal">
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
                                                                                           class="text-default">Data
                                                            Management</a></h5>

                                                    <ul class="list-inline list-inline-separate no-margin text-muted">
                                                        <li>by <a href="#">Jeremy Victorino</a></li>
                                                        <li>Nov 4th, 2016</li>
                                                    </ul>
                                                </div>

                                                <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                    $79.99</h5>
                                            </div>

                                            <p>I should be incapable of drawing a single stroke at the present moment;
                                                and yet I feel that I never was.</p>
                                            When, while the lovely valley teems with vapour around me, and the meridian
                                            sun strikes upper <a href="#">[...]</a>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-users position-left"></i> 34</li>
                                                <li><i class="icon-alarm position-left"></i> 80 hours</li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-empty3 text-size-base text-warning-300"></i>
                                                    <span class="text-muted position-right">(8)</span>
                                                </li>
                                            </ul>

                                            <a href="#" class="heading-text pull-right">Subscribe <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Course preview modal -->
    <div class="modal fade" id="course_preview" tabindex="-1">
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
    <!-- /course preview modal -->
@endsection

