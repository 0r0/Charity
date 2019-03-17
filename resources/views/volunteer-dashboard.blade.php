@extends('layouts.admin')
@section('dashboard-address',url('/volunteer-dashboard'))
@section('info-url',url('/edit-volunteer-info'))
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
@section('header-page','داشبورد داوطلب')
@section('user-login')
    {{Auth::guard('volunteer')->user()->firstName}} {{Auth::guard('volunteer')->user()->lastName}}
@endsection
@section('login-username',Auth::guard('volunteer')->user()->userName)
@section('body-content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Colored table options<a class="heading-elements-toggle"><i
                        class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            Table with custom background color supports all default table layouts and options. In this example our table
            displays all possible borders, striped rows and changes background color on row hover. All border, row and
            text colors are adjusted automatically.
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover bg-info-700">
                <thead>
                <tr>
                    <th>#</th>
                    <th>پروژه</th>
                    <th>position</th>
                    <th>متولی</th>
                    <th>زمان</th>
                    <th>وضعیت</th>
                    <th>اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($volunteerProjects as $project)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->pivot->skill}}</td>
                        <td>{{$project->supporter}}</td>
                        @php
                            $persianDate= Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($project->pivot->date));

                        @endphp
                        <td>{{$persianDate}}</td>
                        @if($project->pivot->situation==-1)
                            <td>منتظر نظر خیریه</td>
                        @endif
                        @if($project->pivot->situation==1)
                            <td>تایید شده</td>
                        @endif
                        @if($project->pivot->situation== 0)
                            <td>رد شده</td>
                        @elseif($project->pivot->situation==2)
                            <td>انصراف توسط داوطلب</td>
                        @endif
                        <td>
                            <div class="form-group">

                                @if($project->pivot->situation==2)
                                    <label class="control-label col-lg-12">----</label>
                                 @elseif($project->pivot->situation==0)
                                    <label class="control-label col-lg-12">----</label>

                                @else
                                    <label class="control-label col-lg-2">تغییروضعیت</label>
                                    <div class="col-lg-offset-1 col-lg-4">
                                        <select name="select{{$project->id}}" class="form-control">
                                            <option value="1">فعال</option>
                                            <option value="2">انصراف</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn btn-primary submit-situation{{$project->id}}">تایید</button>
                                    </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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

            @foreach($volunteerProjects as $project)
            $('.submit-situation{{$project->id}}').on('click', function () {
                var volunteer_id = '{{$project->pivot->volunteer_id}}';
                var situation = $("[name='select{{$project->id}}']").val();
                $.ajax(
                    {
                        url: "{{route('volunteer-situation',['id'=>$project->id])}}",
                        method: 'POST',
                        data: {'volunteer_id': volunteer_id, 'situation': situation},
                        success: function (data) {
                            console.log(data)

                        },
                        error: function (error) {
                            console.log(error);
                        }

                    }
                )
            });

            @endforeach
        });

    </script>
@endpush
