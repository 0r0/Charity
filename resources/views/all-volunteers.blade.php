@extends('layouts.skeleton')
@section('main-content')
    <div class="page-container">

        <div class="page-content">
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-search4 position-left"></i>جستجو داوطلبین</h4>

                            {{--<ul class="breadcrumb position-right">--}}
                            {{--<li><a href="index.html">Home</a></li>--}}
                            {{--<li><a href="search_users.html">Search</a></li>--}}
                            {{--<li class="active">User results</li>--}}
                            {{--</ul>--}}
                            <a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

                        <div class="heading-elements">
                            {{--<div class="heading-btn-group">--}}
                            {{--<a href="#" class="btn btn-link btn-float has-text"><i--}}
                            {{--class="icon-bars-alt text-primary"></i><span>Statistics</span></a>--}}
                            {{--<a href="#" class="btn btn-link btn-float has-text"><i--}}
                            {{--class="icon-calculator text-primary"></i> <span>Invoices</span></a>--}}
                            {{--<a href="#" class="btn btn-link btn-float has-text"><i--}}
                            {{--class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Search field -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">نتایج جستجو داوطلبین<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a></h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    {{--<li><a data-action="close"></a></li>--}}
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">
                            <form action="{{route('volunteer-search')}}" class="main-search">
                                <div class="input-group content-group">
                                    <div class="has-feedback has-feedback-left">
                                        <input type="text" class="form-control input-xlg"
                                               placeholder="نام داوطلب را وارد کنید" name="volunteer_name">
                                        <div class="form-control-feedback">
                                            <i class="icon-search4 text-muted text-size-base"></i>
                                        </div>
                                    </div>

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary btn-xlg">جستجو
                                        </button>
                                    </div>
                                </div>

                                <div class="row search-option-buttons">
                                    <div class="col-sm-6">
                                        <ul class="list-inline list-inline-condensed no-margin-bottom">
                                            {{--<li class="dropdown">--}}
                                            {{--<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">--}}
                                            {{--<i class="icon-stack2 position-left"></i> All categories <span--}}
                                            {{--class="caret"></span>--}}
                                            {{--</a>--}}

                                            {{--<ul class="dropdown-menu">--}}
                                            {{--<li><a href="#"><i class="icon-question7"></i> Getting started</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#"><i class="icon-accessibility"></i> Registration</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#"><i class="icon-reading"></i> General info</a></li>--}}
                                            {{--<li><a href="#"><i class="icon-gear"></i> Your settings</a></li>--}}
                                            {{--<li><a href="#"><i class="icon-graduation"></i> Copyrights</a></li>--}}
                                            {{--<li class="divider"></li>--}}
                                            {{--<li><a href="#"><i class="icon-mail-read"></i> Contacting--}}
                                            {{--authors</a></li>--}}
                                            {{--</ul>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#" class="btn btn-link"><i--}}
                                            {{--class="icon-reload-alt position-left"></i> Refine your--}}
                                            {{--search</a></li>--}}
                                        </ul>
                                    </div>

                                    <div class="col-sm-6 text-right">
                                        <ul class="list-inline no-margin-bottom">
                                            {{--<li><a href="#" class="btn btn-link"><i--}}
                                            {{--class="icon-make-group position-left"></i> Browse website</a>--}}
                                            {{--</li>--}}
                                            {{--<li><a href="#" class="btn btn-link"><i--}}
                                            {{--class="icon-menu7 position-left"></i> Advanced search</a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /search field -->


                    <!-- Tabs -->
                    <ul class="nav nav-lg nav-tabs nav-tabs-bottom search-results-tabs">
                        {{--<li><a href="search_basic.html"><i class="icon-display4 position-left"></i> Website</a></li>--}}
                        <li class="active"><a href="search_users.html"><i class="icon-people position-left"></i>
                                کاربرها</a></li>

                        <li class="dropdown pull-right">
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span--}}
                            {{--class="visible-xs-inline-block position-right">Options</span> <span--}}
                            {{--class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu dropdown-menu-right">--}}
                            {{--<li><a href="#">Action</a></li>--}}
                            {{--<li><a href="#">Another action</a></li>--}}
                            {{--<li><a href="#">Something else</a></li>--}}
                            {{--<li class="divider"></li>--}}
                            {{--<li><a href="#">One more line</a></li>--}}
                            {{--</ul>--}}
                        </li>
                    </ul>
                    <!-- /tabs -->


                    <!-- Search results -->
                    <div class="content-group">
                        <p class="text-muted text-size-small content-group"> لیست نتایج</p>

                        <div class="search-results-list">
                            @foreach($allVolunteers->chunk(4) as $volunteers)
                                <div class="row">
                                    @foreach($volunteers as $volunteer)
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="thumbnail">
                                                <div class="thumb thumb-rounded">
                                                    <img src="{{asset('images/placeholder.jpg')}}" alt="">
                                                    <div class="caption-overflow">
												<span>
													<a href="#"
                                                       class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                                                            class="icon-plus2"></i></a>
													<a href="#"
                                                       class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5"><i
                                                            class="icon-link2"></i></a>
												</span>
                                                    </div>
                                                </div>

                                                <div class="caption text-center">
                                                    <h6 class="text-semibold no-margin">{{$volunteer->firstName}} {{$volunteer->lastName}}
                                                        <small class="display-block">{{$volunteer->skill}}</small>
                                                    </h6>
                                                    <ul class="icons-list mt-15">
                                                        <li><a href="#volunteer_info{{$volunteer->id}}"
                                                               data-popup="tooltip" data-toggle="modal" title=""
                                                               data-original-title="جزئیات"><i
                                                                    class="icon-info3"></i></a></li>
                                                        <li><a href="#" data-popup="tooltip" title=""
                                                               data-original-title="ایمیل"><i
                                                                    class="icon-mail-read"></i></a></li>
                                                        <li><a href="http://{{$volunteer->site}}" data-popup="tooltip"
                                                               title="" data-original-title="آدرس"><i
                                                                    class="icon-home2"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                        @endforeach


                        <!-- Pagination -->
                        {{--<div class="text-center content-group pt-20">--}}
                        {{--<ul class="pagination">--}}
                        {{--<li class="disabled"><a href="#">→</a></li>--}}
                        {{--<li class="active"><a href="#">1</a></li>--}}
                        {{--<li><a href="#">2</a></li>--}}
                        {{--<li><a href="#">3</a></li>--}}
                        {{--<li><a href="#">4</a></li>--}}
                        {{--<li><span>...</span></li>--}}
                        {{--<li><a href="#">58</a></li>--}}
                        {{--<li><a href="#">59</a></li>--}}
                        {{--<li><a href="#">←</a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        <!-- /pagination -->


                            <!-- Footer -->
                            <div class="footer text-muted">
                                © 2015.<a href="#">Limitless Web
                                    App Kit</a> by <a
                                    href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                            </div>
                            <!-- /footer -->

                        </div>
                        <!-- /content area -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($allVolunteers as $volunteer)
        <!--volunteer info  model -->
        <div id="volunteer_info{{$volunteer->id}}" class="modal fade" style="display: none;">
            <div class="modal-dialog modal-full">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h5 class="modal-title"> اطلاعات
                            کاربر {{$volunteer->firstName}} {{$volunteer->lastName}}</h5>
                    </div>


                    <div class="modal-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 100px;">نام</th>
                                    <th>نام خانوادگی</th>
                                    <th style="width: 150px;">مهارت ها</th>
                                    <th>علاقه مندی ها</th>
                                    <th style="width: 250px;">اطلاعات تماس</th>
                                    <th>موبایل</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$volunteer->firstName}}</td>
                                    <td>{{$volunteer->lastName}}t</td>
                                    <td>{{$volunteer->skill}}</td>
                                    <td>{{$volunteer->intrest}}</td>

                                    @if(Auth::guard('volunteer')->check() || auth('charity')->check())
                                        <td>{{$volunteer->phoneNumber}} </td>
                                        <td>{{$volunteer->mobileNumber}}</td>
                                    @else
                                        <td>برای دیدن اطلاعات تماس باید حتما لاگین کنید</td>
                                        <td>برای دیدن شماره موبایل باید حتما لاگین کنید</td>
                                    @endif

                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">بستن</button>
                        <button type="submit" class="btn btn-primary"
                                name="">تایید
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!--/volunteer info  model model -->
    @endforeach
@endsection
{{--@push('body-script')--}}
    {{--<script>--}}
        {{--$(document).ready(function () {--}}
            {{--$.ajaxSetup({--}}
                {{--headers: {--}}
                    {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
                {{--}--}}
            {{--});--}}
            {{--$('.searchVolunteer').on('click', function () {--}}
                {{--var volunteerName = $('.volunteer-search').val();--}}
                {{--$.ajax({--}}
                    {{--url:"{{route('volunteer-search')}}",--}}
                    {{--method:'GET',--}}
                    {{--data:{'volunteerName':volunteerName},--}}
                    {{--success:function(data){--}}
                        {{--console.log(data);--}}

                    {{--},--}}
                    {{--error:function (error) {--}}
                        {{--console.log(error);--}}
                    {{--}--}}

                {{--})--}}

            {{--})--}}

        {{--})--}}
    {{--</script>--}}
{{--@endpush--}}
