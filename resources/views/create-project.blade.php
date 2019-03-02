@extends('layouts.admin')
@push('js-header')
<script type="text/javascript" src="{{asset('js/validation/validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation/bootstrap_multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation/touchspin.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation/switch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation/switchery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation/additional_methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation/form_validation.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation/localization/messages_fa.min.js')}}"></script>
@endpush
@push('css-header')
<link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
@endpush
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
   ایجاد پروژه جدید
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


    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">اطلاعات پروژه<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">

            <form class="form-horizontal form-validate-jquery" action="{{route('add-project')}}"
                  method="post" novalidate="novalidate">
                @csrf
                <fieldset class="content-group">
                    {{--<legend class="text-bold">اطلاعات هویتی</legend>--}}

                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">عنوان پروژه<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="projectTitle" class="form-control" required="required"
                                   placeholder="لطفا عنوان پروژه را وارد کنید" aria-required="true"
                                   value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">بانی<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="supporter" class="form-control" required="required"
                                   placeholder="لطفا نام بانی   را وارد کنید" aria-required="true"
                                   value="">
                        </div>
                    </div>
                    <!-- /basic text input -->

                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">تاریخ اجرا<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="runDate" class="form-control" required="required"
                                   placeholder="لطفا نام شرکت یا خیریه خود را وارد کنید" aria-required="true"
                                   value="">
                        </div>
                    </div>
                    <!-- /basic text input -->


                    <!-- /repeat email -->
                    <!-- Basic textarea -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">خلاصه <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
    <textarea rows="5" cols="5" name="summery" class="form-control" required="required"
              placeholder="لطفا خلاصه پروژه را وارد کنید"
              aria-required="true"></textarea>
                        </div>
                    </div>
                    <!-- /basic textarea -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">آپلود عکس <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="file" name="profile_picture" class="form-control" required="required"
                                   aria-required="true" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">توضیحات <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
    <textarea rows="5" cols="5" name="توضیحات" class="form-control" required="required"
              placeholder="لطفا توضیحات را بنویسید"
              aria-required="true"></textarea>
                        </div>
                    </div>
                        <div class="form-group">
                        <label class="control-label col-lg-2">گزارش <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
    <textarea rows="5" cols="5" name="report" class="form-control" required="required"
              placeholder="گزارش را بنویسید"
              aria-required="true"></textarea>
                        </div>
                    </div>

                    <div class="form-group has-feedback">
                        <label class="control-label col-lg-2">بودجه</label>
                        <div class="col-lg-10">
                            <input type="number" class="form-control" placeholder=" میزان بودجه مورد نیاز برای پروژه را وارد کنید"
                                   value="" name="budget">
                            <div class="form-control-feedback">
                                <i class="">ریال</i>
                            </div>
                        </div>
                    </div>


                    <hr>


                </fieldset>


                <div class="text-right">
                    <button type="reset" class="btn btn-default" id="reset">Reset <i
                            class="icon-reload-alt position-right"></i></button>
                    <button type="submit" class="btn btn-primary">Submit <i
                            class="icon-arrow-left13 position-right"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /form validation -->


    <!-- Footer -->
    <div class="footer text-muted">
        © 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene
            Kopyov</a>
    </div>
    <!-- /footer -->

    </div>



@endsection
