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
@section('add-button-requirement')
    <a href="#create-requirement"
       class="btn btn-labeled btn-labeled-right bg-blue heading-btn add-requirement" data-toggle="modal">اضاقه کردن نیازمندی <b><i
                class="icon-menu7"></i></b></a>
    @endsection
@section('body-content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">لیست نیازمندی ها<a class="heading-elements-toggle"><i class="icon-more"></i></a>
            </h5>
            <div class="heading-elements">

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
                            @php
                                $persianDate= Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($requirement->date));

                            @endphp
                            <td>{{$persianDate}}</td>
                            <td>{{$requirement->place}}</td>
                            @if($requirement->bill_kind)
                                <td>پولی</td>
                            @else
                                <td>رایگان</td>
                            @endif
                            <td><a href="#edit{{$requirement->id}}"
                                   class="btn btn-labeled btn-labeled-right bg-blue heading-btn" data-toggle="modal">ویرایش
                                    <b><i class="icon-menu7"></i></b></a></td>
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

    <!--create requirement project model -->
    <div id="create-requirement" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h5 class="modal-title"> ویرایش اطلاعات نیازمندی پروژه</h5>
                    <div style="display: none" class="date-alert"><label class="alert-danger"> لطفا تاریخ را درفرمت درست وارد کنید(تاریخ هجری شمسی و با خط فاصله) مثال:13-12-96</label></div>
                    <div style="display: none" class="budget-alert"><label class="alert-danger"> لطفا بودجه  را درفرمت درست وارد کنید(نوع عدد و ) مثال:800000ریال</label></div>
                </div>


                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>مهارت</label>
                                <input type="text" placeholder=" نوع مهارت را وارد کنید" class="form-control"
                                       value="" name="skill">

                            </div>

                            <div class="col-sm-6">
                                <label>زمان نیازمندی </label>

                                <input type="text" placeholder="زمان " class="form-control"
                                       value="" name="date">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <label>توضیحات</label>
                                <textarea id="description" placeholder="توضیحات را وارد کنید"
                                          rows="2" cols="80" class="alpaca-control form-control"
                                          name="description"
                                          autocomplete="off"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label>مکان </label>
                                <input type="text" placeholder="لطفا مکان را وارد کنید " class="form-control"
                                       value="" name="place">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>نوع</label>
                                <select name="kind" class="form-control">
                                        <option value="0" selected="selected">مجانی</option>
                                        <option value="1">پولی</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label>بودجه</label>
                                <div class="input-group">
                                    <input type="number" placeholder=" بودجه پروژه " class="form-control"
                                           value="" name="money">
                                    <span class="input-group-addon">ریال</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">بستن</button>
                    <button type="submit" class="btn btn-primary requirement-submit"
                            name="requirement-submit">تایید
                    </button>
                </div>

            </div>
        </div>
    </div>
    <!--/create requirement  project model -->

    @foreach($project_requirement as $requirement)

        <!--edit requirement project model -->
        <div id="edit{{$requirement->id}}" class="modal fade" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h5 class="modal-title"> ویرایش اطلاعات نیازمندی پروژه</h5>
                    </div>


                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>مهارت</label>
                                    <input type="text" placeholder=" نوع مهارت را وارد کنید" class="form-control"
                                           value="{{$requirement->skill}}" name="skill{{$requirement->id}}">

                                </div>

                                <div class="col-sm-6">
                                    <label>زمان نیازمندی </label>
                                    @php
                                        $persianDate= Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($requirement->date));

                                    @endphp
                                    <input type="text" placeholder="زمان " class="form-control"
                                           value="{{$persianDate}}" name="date{{$requirement->id}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>توضیحات</label>
                                    <textarea id="description{{$requirement->id}}" placeholder="توضیحات را وارد کنید"
                                              rows="2" cols="80" class="alpaca-control form-control"
                                              name="description{{$requirement->id}}"
                                              autocomplete="off">{{$requirement->description}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>مکان </label>
                                    <input type="text" placeholder="لطفا مکان را وارد کنید " class="form-control"
                                           value="{{$requirement->place}}" name="place{{$requirement->id}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>نوع</label>
                                    <select name="kind{{$requirement->id}}" class="form-control">
                                        @if($requirement->bill_kind)
                                            <option value="0" >مجانی</option>
                                            <option value="1" selected="selected">پولی</option>
                                            @else
                                            <option value="0" selected="selected">مجانی</option>
                                            <option value="1">پولی</option>
                                            @endif

                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label>بودجه</label>
                                    <div class="input-group">
                                        <input type="text" placeholder=" بودجه پروژه " class="form-control"
                                               value="" name="money{{$requirement->id}}">
                                        <span class="input-group-addon">ریال</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">بستن</button>
                        <button type="submit" class="btn btn-primary edit-submit{{$requirement->id}}"
                                name="edit-submit{{$requirement->id}}">تایید
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!--/edit requirement  project model -->

    @endforeach
    @push('js-body')
        <script>
            $(document).ready(function () {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                @foreach($project_requirement as $requirement)
                $('.edit-submit{{$requirement->id}}').on('click', function () {

                    var urlPath = '{{route('edit-requirement',['id'=>$requirement->id])}}';
                    var skill = $('[name="skill{{$requirement->id}}"]').val();
                    var description = $('[name="description{{$requirement->id}}"]').val();
                    var money = $('[name="money{{$requirement->id}}"]').val();
                    // var s=1;
                    // if(typeof money!="number"){
                    //     $('.budget-alert').show();
                    //     s=0;
                    //
                    // }
                    var runDate = $('[name="date{{$requirement->id}}"]').val();
                    var place = $('[name="place{{$requirement->id}}"]').val();
                    var kind = $('[name="kind{{$requirement->id}}"]').val();
                    // if(s==1){
                    $.ajax({
                            url: urlPath,
                            method: 'POST',
                            data: {
                                'skill': skill,
                                'description': description,
                                'money': money,
                                'place': place,
                                'runDate': runDate,
                                'kind': kind
                            },
                            success: function (data) {
                                location.reload(true);

                            },
                            error: function (xhr, ajaxOptions, thrownError) { //remove in production mode
                                console.log('error');
                                console.log(thrownError);
                            },
                        }
                    );
                        $('#edit{{$requirement->id}}').modal('hide');// close model after click on submit button
                    // }
                    // else{
                    //     $('.budget-alert').show();
                    // }


                });
                @endforeach


                    //send ajax request when user click on add requirement submit button
                $('.requirement-submit').on('click',function(){
                    var date=$('[name="date"]').val();
                    var skill = $('[name="skill"]').val();
                    var description = $('[name="description"]').val();
                    var money = $('[name="money"]').val();
                    var place = $('[name="place"]').val();
                    var kind = $('[name="kind"]').val();
                    $.ajax(
                        {
                            url:"{{route('create-requirement',['id'=>$project->id])}}",
                            method:'POST',
                            data:{
                                date:date,
                                skill:skill,
                                description:description,
                                money:money,
                                place:place,
                                kind:kind
                            },
                            success:function (data) {
                                if(data=='0'){
                                    $('.date-alert').show();
                                }
                                location.reload(true);
                                $('#create-requirement').modal('hide');
                                // console.log(data);
                            },
                            error:function (err) {
                                $('.date-alert').show();
                                console.log(err);

                            }
                        }
                    );
                    // $('#create-requirement').modal('hide');
                });

            })
        </script>
    @endpush

@endsection
