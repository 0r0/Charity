@extends('layouts.admin')
@section('header-page','ویرایش اطلاعات داوطلبین')
@section('info-url',url('/edit-volunteer-info'))
@section('dashboard-address',url('/volunteer-dashboard'));
@section('user-login')
    {{Auth::guard('volunteer')->user()->firstName}} {{Auth::guard('volunteer')->user()->lastName}}
@endsection
@section('login-username',Auth::guard('volunteer')->user()->userName)
{{--show profie image--}}
@if(file_exists(public_path('images/profile/'.$volunteer->imagename)))
@section('profile-image')
    <img src="{{asset('images/profile/'.$volunteer->imagename)}}"
         class="img-circle img-sm" alt="">
@endsection
@section('profile-image2')
    <img src="{{asset('images/profile/'.$volunteer->imagename)}}"
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

@push('css-header')
    <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
@endpush
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
@section('body-content')
    {{--<div class="content">--}}

    <!-- Form validation -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">اطلاعات کاربری<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">

            <form class="form-horizontal form-validate-jquery" method="post"
                  action="{{route('volunteer-update',['id'=>$volunteer->id])}}" novalidate="novalidate" enctype="multipart/form-data">
                @csrf
                <fieldset class="content-group">
                    <legend class="text-bold">اطلاعات هویتی</legend>

                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">نام کاربری<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="userName" class="form-control" required="required"
                                   placeholder="لطفا نام کاربری خود را وارد کنید" aria-required="true"
                                   value="{{$volunteer->userName}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">نام<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="FirstName" class="form-control" required="required"
                                   placeholder="لطفا نام خود را وارد کنید" aria-required="true"
                                   value="{{$volunteer->firstName}}">
                        </div>
                    </div>
                    <!-- /basic text input -->
                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">نام خانوادگی<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="LastName" class="form-control" required="required"
                                   placeholder="لطفا نام خانوادگی خود را وارد کنید" aria-required="true"
                                   value="{{$volunteer->lastName}}">
                        </div>
                    </div>
                    <!-- /basic text input -->
                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">شرکت یا خیریه<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="company" class="form-control" required="required"
                                   placeholder="لطفا نام شرکت یا خیریه خود را وارد کنید" aria-required="true"
                                   value="{{$volunteer->company}}">
                        </div>
                    </div>
                    <!-- /basic text input -->

                    <!-- Password field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">رمز عبور</label>
                        <div class="col-lg-10">
                            <input type="password" name="password" id="password"
                                   class="form-control validate-equalTo-blur"
                                   placeholder="لطفا رمز عبور را وارد کنید حداقل 5 کاراکتر">
                        </div>
                    </div>
                    <!-- /password field -->

                    <!-- Repeat password -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">تکرار رمز عبور</label>
                        <div class="col-lg-10">
                            <input type="password" name="repeat_password" class="form-control"
                                   placeholder="لطفا رمز عبور خود را دوباره وارد کنید">
                        </div>
                    </div>
                    <!-- /repeat password -->
                    <!-- Email field -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">ایمیل <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="email" name="email" class="form-control" id="email" required="required"
                                   placeholder="ایمیل خود را وارد کنید" value="{{$volunteer->email}}">
                        </div>
                    </div>
                    <!-- /email field -->
                    <!-- Repeat email -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">تکرار ایمیل <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="email" name="repeat_email" class="form-control" required="required"
                                   placeholder="ایمیل خود را دوباره وارد کنید" aria-required="true"
                                   value="{{$volunteer->email}}">
                        </div>
                    </div>
                    <!-- /repeat email -->
                    <!-- Basic textarea -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">آدرس <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <textarea rows="5" cols="5" name="address" class="form-control" required="required"
                                      placeholder="لطفا آدرس خود را وارد کنید"
                                      aria-required="true">{{$volunteer->address}}</textarea>
                        </div>
                    </div>
                    <!-- /basic textarea -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">آپلود عکس <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="file" name="profile_picture" class="form-control" required="required"
                                   aria-required="true" value="{{$volunteer->imagename}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">بیوگرافی <span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <textarea rows="5" cols="5" name="biography" class="form-control" required="required"
                                      placeholder="لطفا بیوگرافی خود را بنویسید"
                                      aria-required="true">{{$volunteer->bio}}</textarea>
                        </div>
                    </div>
                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">تخصص<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="profession" class="form-control" required="required"
                                   placeholder="لطفا تخصص  خود را وارد کنید" aria-required="true"
                                   value="{{$volunteer->skill}}">
                        </div>
                    </div>
                    <!-- /basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">علاقه مندی ها </label>
                        <div class="col-lg-10">
                            <div class="multi-select-full">
                                <select class="multiselect" multiple="multiple" style="display: none;" name="interst">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                </select>
                                <div class="btn-group">
                                    <button type="button" class="multiselect dropdown-toggle btn btn-default"
                                            data-toggle="dropdown" title="None selected"><span
                                            class="multiselect-selected-text">None selected</span> <b class="caret"></b>
                                    </button>
                                    <ul class="multiselect-container dropdown-menu">
                                        <li><a tabindex="0"><label class="checkbox">
                                                    <div class="checker"><span><input type="checkbox"
                                                                                      value="cheese"></span></div>
                                                    Cheese</label></a></li>
                                        <li><a tabindex="0"><label class="checkbox">
                                                    <div class="checker"><span><input type="checkbox" value="tomatoes"></span>
                                                    </div>
                                                    Tomatoes</label></a></li>
                                        <li><a tabindex="0"><label class="checkbox">
                                                    <div class="checker"><span><input type="checkbox" value="mozarella"></span>
                                                    </div>
                                                    Mozzarella</label></a></li>
                                        <li><a tabindex="0"><label class="checkbox">
                                                    <div class="checker"><span><input type="checkbox" value="mushrooms"></span>
                                                    </div>
                                                    Mushrooms</label></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Input with icons -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">آپلود فایل رزومه <span
                                class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="file" name="resume_file" class="form-control" required="required"
                                   aria-required="true">
                        </div>
                    </div>
                    <hr>
                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">شماره موبایل همراه<span
                                class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="number" name="mobile" class="form-control phone-group"
                                   placeholder="لطفا موبایل خود را وارد کنید" aria-required="true"
                                   value="{{$volunteer->mobileNumber}}">
                        </div>
                    </div>
                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-2">شماره ثابت<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="number" name="phone_number" class="form-control phone-group"
                                   placeholder="لطفا شماره ثابت خود را وارد کنید" value="{{$volunteer->phoneNumber}}">
                        </div>
                    </div>

                    <hr>

                    <div class="form-group has-feedback">
                        <label class="control-label col-lg-2">ادرس سایت یا شبکه اجتماعی</label>
                        <div class="col-lg-10">
                            <input type="text" name="site" class="form-control"
                                   placeholder="ادرس سایت یا شبکه اجتماعی را وارد کنید" value="{{$volunteer->site}}">
                            <div class="form-control-feedback">
                                <i class="icon-sphere"></i>
                            </div>
                        </div>
                    </div>


                    <hr>


                </fieldset>

                <div class="text-right">
                    <button type="reset" class="btn btn-default" id="reset">Reset <i
                            class="icon-reload-alt position-right"></i></button>
                    <button type="submit" class="btn btn-primary" name="edit-volunteer-submit">Submit <i
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

    {{--</div>--}}
@endsection
