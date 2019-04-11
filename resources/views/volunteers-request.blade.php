@extends('layouts.admin')
@section('dashboard-address',url('/charity-dashboard'))
@section('info-url',url('/edit-charity-info'))
@php
    $user=auth('charity')->user();
@endphp
{{--show profie image--}}
@if(file_exists(public_path('images/profile/'.$user->imagename)))
    {{--@if(file_exists(public_path('images/profile/tt.jpg')))--}}
@section('profile-image')
    <img src="{{asset('images/profile/'.$user->imagename)}}"
         {{--    <img src="{{asset('images/profile/tt.jpg')}}"--}}
         class="img-circle img-sm" alt="">
@endsection
@section('profile-image2')
    <img src="{{asset('images/profile/'.$user->imagename)}}"
         {{--    <img src="{{asset('images/profile/tt.jpg')}}"--}}
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
{{----}}
@section('requests-url')
    @if(Auth::guard('charity')->check())
        <li><a href="{{url('/volunteers-request')}}"><i class="icon-accessibility"></i>
                <span>درخواست ها</span></a></li>
    @endif
@endsection
@section('user-login')
    {{Auth::guard('charity')->user()->firstName}} {{Auth::guard('charity')->user()->lastName}}
@endsection
@section('login-username',Auth::guard('charity')->user()->userName)
@section('header-page','لیست درخواست ها')
@section('body-content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"> درخواست های داوطلبین<a class="heading-elements-toggle"><i
                        class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    {{--<li><a data-action="reload"></a></li>--}}
                    {{--<li><a data-action="close"></a></li>--}}
                </ul>
            </div>
        </div>

        <div class="panel-body">

            @foreach($allInfo as $info)
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-hover bg-info-700">
                        <thead>
                        {{--<tr>--}}

                        {{--<th>پروژه</th>--}}
                        {{--<th>position</th>--}}
                        {{--<th>متولی</th>--}}
                        {{--<th>زمان</th>--}}
                        {{--<th>نام کاربری</th>--}}
                        {{--<th>نام و نام خانوادگی</th>--}}
                        {{--<th>وضعیت فعلی</th>--}}
                        {{--<th>وضعیت</th>--}}

                        {{--</tr>--}}
                        </thead>
                        <tbody>

                        {{--@foreach($volunteersArray as $volunteer_subArray)--}}
                        {{--@foreach($volunteer_subArray as $volunteer)--}}
                        {{--<tr>--}}
                        {{--<td>{{$projects->find($volunteer->pivot->project_id)->title}}</td>--}}
                        {{--<td>{{$volunteer->pivot->skill}}</td>--}}
                        {{--<td>{{$projects->find($volunteer->pivot->project_id)->supporter}}</td>--}}
                        {{--<td>@php--}}
                        {{--$persianDate= Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($volunteer->pivot->date));--}}
                        {{--echo $persianDate;--}}
                        {{--@endphp--}}
                        {{--</td>--}}
                        {{--<td>{{$volunteer->userName}}</td>--}}
                        {{--<td>{{$volunteer->firstName}} {{$volunteer->lastName}}</td>--}}
                        {{--@if($volunteer->pivot->situation==1)--}}
                        {{--<td>تایید شده</td>--}}
                        {{--@elseif($volunteer->pivot->situation==0)--}}
                        {{--<td>رد شده</td>--}}
                        {{--@else--}}
                        {{--<td>در حال انتظار</td>--}}
                        {{--@endif--}}
                        {{--<td>--}}
                        {{--<div class="form-group">--}}
                        {{--<div class="col-lg-offset-1 col-lg-8">--}}
                        {{--<select name="situation{{$volunteer->id}}" class="form-control">--}}
                        {{--<option value="1">قبول</option>--}}
                        {{--<option value="0">رد</option>--}}
                        {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-3">--}}
                        {{--<button class="btn btn-default accept{{$volunteer->id}}"--}}
                        {{--name="accept{{$volunteer->id}}">تایید--}}
                        {{--</button>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</td>--}}
                        {{--</tr>--}}
                        {{--@endforeach--}}
                        {{--@endforeach--}}


                        {{--@foreach($volunteer_subArray as $volunteer)--}}
                        <tr>
                            <th colspan="5" align="center" style="font-size: 20px"> پروژه {{$info[0]->title}}</th>

                        </tr>
                        <tr>
                            <td colspan="5" style="text-align: center;background-color: #0C1021"> نیازمندی ها
                            </td>
                        </tr>
                        <tr>
                            <td> مهارت: {{$info[1]->skill}}</td>
                            @php
                                $persianDate= Morilog\Jalali\CalendarUtils::strftime('d-m-Y', strtotime($info[1]->date));
                            @endphp
                            <td>تاریخ:{{$persianDate}}</td>
                            <td>مکان:{{$info[1]->place}}</td>
                            @if($info[1]->bill_kind==0)
                                <td colspan="2">نوع هزینه :رایگان</td>
                            @elseif($info[1]->bill_kind==1)
                                <td colspan="2">نوع هزینه :پولی</td>
                            @endif

                        </tr>
                        @if($info[2]->first())
                            <tr style="background-color: green; ">
                                <th colspan="5" style="text-align: center">تمام داوطلبان درخواست داده برای نیازمندی</th>
                        @endif
                        @foreach($info[2] as $volunteer)
                            <tr>
                                <td>نام کاربری: {{$volunteer->userName}}</td>
                                <td>نام و نام خانوادگی:{{$volunteer->firstName}} {{$volunteer->lastName}}</td>
                                <td>شرکت:{{$volunteer->company}}</td>
                                @if($volunteer->pivot->situation==1)
                                    <td>وضعیت: تایید شده</td>
                                @elseif($volunteer->pivot->situation==0)
                                    <td>وضعیت: رد شده</td>
                                @else
                                    <td>وضعیت: در حال انتظار</td>
                                @endif
                                @if($volunteer->pivot->situation==0)
                                    <td>---</td>
                                    @else
                                <td>
                                    <div class="form-group">
                                        <div class="col-lg-offset-1 col-lg-8">
                                            <select name="situation{{$volunteer->id}}" class="form-control">
                                                <option value="1">قبول</option>
                                                <option value="0">رد</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-default accept{{$volunteer->id}}"
                                                    name="accept{{$volunteer->id}}">تایید
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                        {{--<tr>--}}
                        {{--<td>{{$projects->find($volunteer->pivot->project_id)->title}}</td>--}}
                        {{--<td>{{$volunteer->pivot->skill}}</td>--}}
                        {{--<td>{{$projects->find($volunteer->pivot->project_id)->supporter}}</td>--}}
                        {{--<td>@php--}}
                        {{--$persianDate= Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($volunteer->pivot->date));--}}
                        {{--echo $persianDate;--}}
                        {{--@endphp--}}
                        {{--</td>--}}
                        {{--<td>{{$volunteer->userName}}</td>--}}
                        {{--<td>{{$volunteer->firstName}} {{$volunteer->lastName}}</td>--}}
                        {{--@if($volunteer->pivot->situation==1)--}}
                        {{--<td>تایید شده</td>--}}
                        {{--@elseif($volunteer->pivot->situation==0)--}}
                        {{--<td>رد شده</td>--}}
                        {{--@else--}}
                        {{--<td>در حال انتظار</td>--}}
                        {{--@endif--}}
                        {{--<td>--}}
                        {{--<div class="form-group">--}}
                        {{--<div class="col-lg-offset-1 col-lg-8">--}}
                        {{--<select name="situation{{$volunteer->id}}" class="form-control">--}}
                        {{--<option value="1">قبول</option>--}}
                        {{--<option value="0">رد</option>--}}
                        {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="col-lg-3">--}}
                        {{--<button class="btn btn-default accept{{$volunteer->id}}"--}}
                        {{--name="accept{{$volunteer->id}}">تایید--}}
                        {{--</button>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</td>--}}
                        {{--</tr>--}}
                        {{--@endforeach--}}

                        </tbody>
                    </table>

                </div>
                <br>
            @endforeach
        </div>
    </div>
@endsection
@push('js-body')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            @foreach($allInfo as $info)
            @if($info[2]->first())
            @foreach($info[2] as $volunteer)

            $('.accept{{$volunteer->id}}').on('click', function () {
                console.log('accept{{$volunteer->id}}');
                var situation = $('[name="situation{{$volunteer->id}}"]').val();
                var oldSituation = '{{$volunteer->pivot->situation}}';
                var project_id = '{{$info[0]->id}}';
                var requirement_id ={{$info[1]->id}}
                console.log(situation);
                if (situation != oldSituation) {
                    $.ajax({
                        url: '{{Route('accept-volunteer',['id'=>$volunteer->id])}}',
                        method: 'POST',
                        data: {'situation': situation, 'project_id': project_id,'requirement_id':requirement_id},

                        success: function (data) {
                            console.log(data);
                            location.reload(true);
                        },
                    });
                } else {
                    console.log('nothing');
                    console.log(typeof oldSituation);
                    console.log(typeof situation);
                }


            });
            {{--@endforeach--}}
            @endforeach
            @endif
            @endforeach



        })
    </script>
@endpush
