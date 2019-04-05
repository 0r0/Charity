@extends('layouts.admin')
@section('dashboard-address',url('/charity-dashboard'))
@section('info-url',url('/edit-charity-info'))
@section('requests-url')
    <li><a href="{{url('/volunteers-request')}}"><i class="icon-accessibility"></i>
            <span>درخواست ها</span></a></li>
@endsection
@section('header-page','داشبورد خیریه')
@section('user-login')
    {{Auth::guard('charity')->user()->firstName}} {{Auth::guard('charity')->user()->lastName}}
@endsection
@section('login-username',Auth::guard('charity')->user()->userName)
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
{{--@section('notification-count',Auth::guard('charity')->user()->notifications()->count())--}}
{{--@section('notifications-content')--}}
    {{--@foreach--}}

    {{--@endsection--}}
@push('js-header')
    <script type="text/javascript" src="{{asset('js/validation/validate.min.js')}}"></script>
@endpush
@section('body-content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"> لیست پروژه های فعال<a class="heading-elements-toggle"><i
                        class="icon-more"></i></a></h5>
            <div class="heading-elements">
            </div>
        </div>


        <div class="panel-body">
            @if(count($projects)>=3)
                @foreach($projects->chunk(3) as $project)
                    <div class="row">
                        @foreach($project as $sub_project)
                            @if($sub_project->is_archive==0)
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
                                                        {{--<li>توسط <a href="#">کاریابی صمد</a></li>--}}
                                                        <li>Nov 1st, 2016</li>
                                                    </ul>
                                                </div>

                                                <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                    {{$sub_project->money}} </h5>
                                            </div>
                                            <p>{{substr($sub_project->summery,0,40)}}<a
                                                    href="#description{{$sub_project->id}}"
                                                    data-toggle="collapse">[بیشتر]</a></p>
                                            <div id="description{{$sub_project->id}}" class="collapse">
                                                {{substr($sub_project->summery,40)}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-alarm position-left"></i>{{$sub_project->runDate}}
                                                </li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <span class="text-muted position-right">(49)</span>
                                                </li>
                                            </ul>
                                            <a href="{{route('project-more-info',['id'=>$sub_project->id])}}"
                                               class="heading-text pull-right" data-toggle="modal">جزئیات بیشتر
                                                <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                            <a href="#edit-project{{$sub_project->id}}" class="heading-text pull-right"
                                               data-toggle="modal">ویرایش اطلاعات <i
                                                    class=" icon-pencil7 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            @else
                <div class="row">
                    @foreach($projects as $project)
                        @if($project->is_archive==0)
                        <div class="col-md-4">
                            <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                <div class="panel-body">
                                    <div class="thumb">
                                        <a href="#course_preview{{$project->id}}" data-toggle="modal">
                                            <img src="{{asset('images/placeholder.jpg')}}"
                                                 class="img-responsive img-rounded" alt="">
                                            <span class="zoom-image"><i class="icon-play3"></i></span>
                                        </a>
                                    </div>

                                    <div class="blog-preview">
                                        <div class="content-group-sm media blog-title stack-media-on-mobile text-left">
                                            <div class="media-body">
                                                <h5 class="text-semibold no-margin"><a href="#"
                                                                                       class="text-default">{{$project->title}}</a>
                                                </h5>

                                                <ul class="list-inline list-inline-separate no-margin text-muted">
                                                    {{--@if($project->is_archive)--}}
                                                        {{--<li>وضعیت:آرشیو</li>--}}
                                                    {{--@else--}}
                                                        {{--<li>وضعیت: فعال </li>--}}
                                                    {{--@endif--}}

                                                    @php
                                                        $create = Morilog\Jalali\CalendarUtils::strftime('d-m-Y', strtotime($project->created_at));
                                                        $runDate=Morilog\Jalali\CalendarUtils::strftime('d-m-Y', strtotime($project->runDate));
                                                    @endphp
                                                        <br>
                                                    <li> تاریخ ایجاد:{{$create}}</li>
                                                </ul>
                                            </div>

                                            <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                {{$project->money}}</h5>
                                        </div>
                                        <p>{{substr($project->summery,0,40)}} <a href="#description{{$project->id}}"
                                                                                 data-toggle="collapse">[بیشتر]</a></p>
                                        <div id="description{{$project->id}}" class="collapse">
                                            {{substr($project->summery,40)}}
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                            class="icon-more"></i></a><a class="heading-elements-toggle"><i
                                            class="icon-more"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline list-inline-separate heading-text">
                                            <li><i class="icon-alarm position-left"></i>تاریخ شروع:{{$runDate}}
                                            </li>
                                            <li>
                                                <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                {{--<span class="text-muted position-right">(49)</span>--}}
                                            </li>
                                        </ul>
                                        <a href="{{route('project-more-info',['id'=>$project->id])}}"
                                           class="heading-text pull-right" data-toggle="modal">جزئیات بیشتر <i
                                                class="icon-arrow-left13 position-right"></i></a>
                                        <a href="#edit-project{{$project->id}}" class="heading-text pull-right"
                                           data-toggle="modal">ویرایش اطلاعات <i
                                                class=" icon-pencil7 position-right"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>

    </div>
    <br>
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"> لیست پروژه های آرشیو<a class="heading-elements-toggle"><i
                        class="icon-more"></i></a></h5>
            <div class="heading-elements">
            </div>
        </div>
        <div class="panel-body">
            @if(count($projects)>=3)
                @foreach($projects->chunk(3) as $project)
                    <div class="row">
                        @foreach($project as $sub_project)
                            @if($sub_project->is_archive==1)
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
                                                            {{--<li>توسط <a href="#">کاریابی صمد</a></li>--}}
                                                            <li>Nov 1st, 2016</li>
                                                        </ul>
                                                    </div>

                                                    <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                        {{$sub_project->money}} </h5>
                                                </div>
                                                <p>{{substr($sub_project->summery,0,40)}}<a
                                                        href="#description{{$sub_project->id}}"
                                                        data-toggle="collapse">[بیشتر]</a></p>
                                                <div id="description{{$sub_project->id}}" class="collapse">
                                                    {{substr($sub_project->summery,40)}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                    class="icon-more"></i></a><a class="heading-elements-toggle"><i
                                                    class="icon-more"></i></a>
                                            <div class="heading-elements">
                                                <ul class="list-inline list-inline-separate heading-text">
                                                    <li><i class="icon-alarm position-left"></i>{{$sub_project->runDate}}
                                                    </li>
                                                    <li>
                                                        <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                        <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                        <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                        <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                        <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                        <span class="text-muted position-right">(49)</span>
                                                    </li>
                                                </ul>
                                                <a href="{{route('project-more-info',['id'=>$sub_project->id])}}"
                                                   class="heading-text pull-right" data-toggle="modal">جزئیات بیشتر
                                                    <i
                                                        class="icon-arrow-left13 position-right"></i></a>
                                                <a href="#edit-project{{$sub_project->id}}" class="heading-text pull-right"
                                                   data-toggle="modal">ویرایش اطلاعات <i
                                                        class=" icon-pencil7 position-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            @else
                <div class="row">
                    @foreach($projects as $project)
                        @if($project->is_archive==1)
                            <div class="col-md-4">
                                <div class="panel panel-flat blog-horizontal blog-horizontal-2">
                                    <div class="panel-body">
                                        <div class="thumb">
                                            <a href="#course_preview{{$project->id}}" data-toggle="modal">
                                                <img src="{{asset('images/placeholder.jpg')}}"
                                                     class="img-responsive img-rounded" alt="">
                                                <span class="zoom-image"><i class="icon-play3"></i></span>
                                            </a>
                                        </div>

                                        <div class="blog-preview">
                                            <div class="content-group-sm media blog-title stack-media-on-mobile text-left">
                                                <div class="media-body">
                                                    <h5 class="text-semibold no-margin"><a href="#"
                                                                                           class="text-default">{{$project->title}}</a>
                                                    </h5>

                                                    <ul class="list-inline list-inline-separate no-margin text-muted">
                                                        {{--@if($project->is_archive)--}}
                                                        {{--<li>وضعیت:آرشیو</li>--}}
                                                        {{--@else--}}
                                                        {{--<li>وضعیت: فعال </li>--}}
                                                        {{--@endif--}}
                                                        @php
                                                            $create = Morilog\Jalali\CalendarUtils::strftime('d-m-Y', strtotime($project->created_at));
                                                            $runDate=Morilog\Jalali\CalendarUtils::strftime('d-m-Y', strtotime($project->runDate));
                                                        @endphp
                                                        <br>
                                                        <li> تاریخ ایجاد:{{$create}}</li>
                                                    </ul>
                                                </div>

                                                <h5 class="text-success media-right no-margin-bottom text-semibold">
                                                    {{$project->money}}</h5>
                                            </div>
                                            <p>{{substr($project->summery,0,40)}} <a href="#description{{$project->id}}"
                                                                                     data-toggle="collapse">[بیشتر]</a></p>
                                            <div id="description{{$project->id}}" class="collapse">
                                                {{substr($project->summery,40)}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a><a class="heading-elements-toggle"><i
                                                class="icon-more"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text">
                                                <li><i class="icon-alarm position-left"></i>تاریخ شروع:{{$runDate}}
                                                </li>
                                                <li>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 text-size-base text-warning-300"></i>
                                                    {{--<span class="text-muted position-right">(49)</span>--}}
                                                </li>
                                            </ul>
                                            <a href="{{route('project-more-info',['id'=>$project->id])}}"
                                               class="heading-text pull-right" data-toggle="modal">جزئیات بیشتر <i
                                                    class="icon-arrow-left13 position-right"></i></a>
                                            <a href="#edit-project{{$project->id}}" class="heading-text pull-right"
                                               data-toggle="modal">ویرایش اطلاعات <i
                                                    class=" icon-pencil7 position-right"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>
    </div>



    @foreach($projects as $project)
        <!-- video model -->
        <div class="modal fade" id="course_preview{{$project->id}}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h6 class="modal-title">ویدیو پروژه</h6>
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
        <!--/video model -->
        <!--edit project model -->
        <div id="edit-project{{$project->id}}" class="modal fade" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h5 class="modal-title">ویرایش اطلاعات</h5>
                    </div>

                    {{--<form action="#">--}}
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>عنوان پروژه</label>
                                    <input type="text" placeholder="عنوان پروژه" class="form-control"
                                           value="{{$project->title}}" name="title{{$project->id}}">
                                    <input type="hidden" id="custId" name="custId" value="3487">
                                </div>

                                <div class="col-sm-6">
                                    <label>بانی </label>
                                    <input type="text" placeholder="بانی" class="form-control"
                                           value="{{$project->supporter}}" name="supporter{{$project->id}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>خلاصه</label>
                                    <textarea id="summery{{$project->id}}" placeholder="خلاصه را وارد کنید"
                                              rows="1" cols="80" class="alpaca-control form-control"
                                              name="summery{{$project->id}}"
                                              autocomplete="off">{{$project->summery}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>توضیحات</label>
                                    <textarea id="description{{$project->id}}" placeholder="توضیحات را وارد کنید"
                                              rows="1" cols="80" class="alpaca-control form-control"
                                              name="description{{$project->id}}"
                                              autocomplete="off">{{$project->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>گزارش کلی</label>
                                    <textarea id="report{{$project->id}}" placeholder="گزارش کلی را وارد کنید"
                                              rows="1" cols="80" class="alpaca-control form-control"
                                              name="report{{$project->id}}"
                                              autocomplete="off">{{$project->report}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>زمان شروع</label>
                                    <input type="text" name="runDate{{$project->id}}" placeholder="زمان شروع"
                                           class="form-control" value="{{$project->runDate}}">
                                </div>
                                <div class="col-sm-6">
                                    <label>بودجه</label>
                                    <div class="input-group">
                                        <input type="text" placeholder=" بودجه پروژه " class="form-control"
                                               value="{{$project->money}}" name="money{{$project->id}}">
                                        <span class="input-group-addon">ریال</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <label>آپلود عکس</label>
                                    <input type="file" class="form-control" accept="image/*"
                                           name="picture{{$project->id}}">
                                </div>
                                <div class="col-sm-4">
                                    <div class="checkbox">
                                        <label>آرشیو</label>
                                        @if($project->is_archive==1)
                                            <input type=checkbox disabled checked>
                                        @else
                                            <input type=checkbox name="archive" class='archive' value="1">
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <br>

                            {{--<div class="row">--}}
                                {{--<div class="col-lg-12">--}}
                                    {{--<div class="checkbox">--}}
                                    {{--<label>آرشیو</label>--}}
                                        {{--@if($project->is_archive==1)--}}
                                    {{--<input type=checkbox disabled checked>--}}
                                            {{--@else--}}
                                            {{--<input type=checkbox name="archive" class='archive' value="1">--}}
                                        {{--@endif--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">بستن</button>
                        <button type="submit" class="btn btn-primary edit-submit{{$project->id}}"
                                name="edit-submit{{$project->id}}">تایید
                        </button>
                    </div>
                    {{--</form>--}}
                </div>
            </div>
        </div>
        <!--/edit project model -->

    @endforeach



@endsection
@push('js-body')
    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            @foreach($projects as $project)
            $('.edit-submit{{$project->id}}').on('click', function () {

                var urlPath = '{{route('project-update',['id'=>$project->id])}}';
                var title = $('[name="title{{$project->id}}"]').val();
                var summery = $('[name="summery{{$project->id}}"]').val();
                var description = $('[name="description{{$project->id}}"]').val();
                var money = $('[name="money{{$project->id}}"]').val();
                var runDate = $('[name="runDate{{$project->id}}"]').val();
                var picture = $('[name="picture{{$project->id}}"]').val();
                var supporter = $('[name="supporter{{$project->id}}"]').val();
                var report = $('[name="report{{$project->id}}"]').val();
                if($('.archive').is(':checked'))
                {
                    var archive=$('.archive').val();
                }
                else{
                    var archive=null;
                }
                // var archive=$('.archive'
                console.log('supporter{{$project->id}}', supporter);
                $.ajax({
                        url: urlPath,
                        method: 'POST',
                        data: {
                            'title': title,
                            'summery': summery,
                            'description': description,
                            'money': money,
                            'supporter': supporter,
                            'runDate': runDate,
                            'picture': picture,
                            'report': report,
                            'archive':archive,
                        },
                        // success: function (data) {
                        //     console.log('successful ' + data);
                        //
                        // },
                        // error: function (xhr, ajaxOptions, thrownError) {
                        //     // console.log('error');
                        //
                        //     // console.log(thrownError);
                        // },
                    }
                );
                $('#edit-project{{$project->id}}').modal('hide');// close model after click on submit button
                location.reload(true);
            });
            @endforeach

        })
    </script>
@endpush
