@extends('layouts.admin')
@section('dashboard-address',url('/charity-dashboard'))
@section('info-url',url('/edit-charity-info'))
@section('requests-url')
    @if(Auth::guard('charity')->check())
        <li><a href="{{url('/volunteers-request')}}"><i class="icon-accessibility"></i>
                <span>درخواست ها</span></a></li>
    @endif
@endsection
@section('header-page','لیست درخواست ها')
@section('body-content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"> درخواست های داوطلبین<a class="heading-elements-toggle"><i
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


            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover bg-info-700">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>پروژه</th>
                        <th>position</th>
                        <th>متولی</th>
                        <th>زمان</th>
                        <th>نام کاربری</th>
                        <th>نام و نام خانوادگی</th>
                        <th>وضعیت</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach($volunteersArray as $volunteer_subArray)
                        @foreach($volunteer_subArray as $volunteer)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$projects->find($volunteer->pivot->project_id)->title}}</td>
                                <td>{{$volunteer->pivot->skill}}</td>
                                <td>{{$projects->find($volunteer->pivot->project_id)->supporter}}</td>
                                <td>@php
                                        $persianDate= Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($volunteer->pivot->date));
                                        echo $persianDate;
                                    @endphp
                                </td>
                                <td>{{$volunteer->userName}}</td>
                                <td>{{$volunteer->firstName}} {{$volunteer->lastName}}</td>
                                <td>
                                    <div class="form-group">
                                        <div class="col-lg-offset-1 col-lg-8">
                                            <select name="select" class="form-control">
                                                <option value="1">قبول</option>
                                                <option value="0">رد</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button class="btn btn-default" name="accept{{$volunteer->id}}">تایید
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('js-body')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                header: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            });
            @foreach($volunteersArray as $volunteer_subArray)
            @foreach($volunteer_subArray as $volunteer)

            $('.accept{{$volunteer->id}}').on('click', function () {
                var situation = $('[name="accept{{$volunteer->id}}"]').val();
                $.ajax({
                    url: '{{Route("accept-volunteer",['id'=>$volunteer->id])}}',
                    data: {'situation': situation},
                    method: 'POST',
                    success: function (data) {
                        console.log(data);
                    },
                    error: function (thrownError) {
                        console.log(thrownError);
                    }
                });
            });
            @endforeach
            @endforeach



        })
    </script>
@endpush
