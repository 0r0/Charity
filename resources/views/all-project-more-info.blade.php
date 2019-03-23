@extends('layouts.skeleton')
@section('main-content')

    <div class="page-container">

        <div class="page-content">
            <div class="content-wrapper">
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">اطلاعات کامل پروژه</span>
                            </h4>
                            <a class="heading-elements-toggle"><i class="icon-more"></i></a><a
                                class="heading-elements-toggle"><i class="icon-more"></i></a></div>

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
                                class="icon-menu-open"></i></a><a class="breadcrumb-elements-toggle"><i
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
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">اطلاعات پروژه<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a>
                            </h5>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr class="bg-blue">
                                        <th>#</th>
                                        <th>عنوان</th>
                                        <th>بانی</th>
                                        <th width="200px">خلاصه</th>
                                        <th width="250px">توضیحات</th>
                                        <th>بودجه</th>
                                        <th>زمان اجرا</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>{{$project->title}}</td>
                                        <td>{{$project->supporter}}</td>
                                        <td>{{$project->summery}}</td>
                                        <td>{{$project->description}}</td>
                                        <td>{{$project->money}}</td>
                                        @php
                                            $persianDate= Morilog\Jalali\CalendarUtils::strftime('Y-m-d', strtotime($project->runDate));

                                        @endphp
                                        <td>{{$persianDate}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">لیست نیازمندی های پروژه<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a>
                            </h5>

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
                                        <th>وضعیت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($requirements as $requirement)
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
                                            @auth('volunteer')
                                                @if($situation==-1 && ($reservedRequirementId==$requirement->id))
                                                    <td>منتظر تایید</td>
                                                @elseif($situation==0 && ($reservedRequirementId==$requirement->id))
                                                    <td>رد شده</td>
                                                @elseif($situation==1 && ($reservedRequirementId==$requirement->id))
                                                    <td>تایید شده</td>

                                                @elseif($situation==2 && ($reservedRequirementId==$requirement->id))
                                                    <td>انصراف داده شده</td>
                                                @else
                                                    <td>
                                                        <button class="btn  bg-blue annunciation{{$requirement->id}}"
                                                                type="submit">اعلام
                                                            آمادگی
                                                        </button>
                                                    </td>
                                                @endif
                                            @endauth

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


                    {{--comment section--}}
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">نظرات<a class="heading-elements-toggle"><i
                                        class="icon-more"></i></a>
                            </h5>

                        </div>

                        <div class="panel-body">
                            <div class="content-group">


                                {{--add comments--}}
                                @include('partials.comment_replies', ['comments' => $project->comments, 'project_id' => $project->id])
                                @if(session()->has('error'))
                                    <span id="dangerMessage" class="label label-danger"
                                          style="font-size: 15px">{{ session()->get('error') }}</span>
                                    <script>
                                        setTimeout(function () {
                                            $('#dangerMessage').fadeOut('fast');
                                        }, 20000);
                                    </script>
                                @elseif(session()->has('message'))
                                    <span id="successMessage" class="label label-success"
                                          style="font-size: 15px">{{ session()->get('message') }}</span>
                                    <script>
                                        setTimeout(function () {
                                            $('#successMessage').fadeOut('fast');
                                        }, 20000);
                                    </script>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>لطفا فیلد دیدگاه را پر کنید</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                <form method="post" action="{{ route('comment.add') }}">
                                    @csrf
                                    <h6 class="text-semibold">دیدگاه</h6>
                                    {{--<p class="content-group-sm">Drop Autosize into any existing website and it should--}}
                                        {{--Just Work™. The source is short and well commented if you are curious to how it--}}
                                        {{--works.</p>--}}

                                    <div class="form-group">
                                        <textarea rows="4" cols="4" class="form-control elastic" placeholder="محل دیدگاه"
                                                  style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 96px;"
                                                  name="comment_body"></textarea>
                                        <input type="hidden" name="project_id" value="{{$project->id}}"/>
                                    </div>

                                    <button type="submit" class="btn btn-primary">ارسال دیدگاه</button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
@push('body-script')

    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            @foreach($requirements as $requirement)
            $('.annunciation{{$requirement->id}}').on('click', function () {

                var urlPath = '{{route('ready-announcement',['id'=>$requirement->id])}}';

                $.ajax({
                        url: urlPath,
                        method: 'POST',
                        data: {},
                        success: function (data) {
                            console.log('successful ' + data);

                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            console.log('error');

                            console.log(thrownError);
                        },
                    }
                );
                {{--$('#edit-project{{$project->id}}').modal('hide');// close model after click on submit button--}}
                // location.reload(true);
            });
            @endforeach

        })
    </script>

@endpush
@push('head-script')
    <style>
        .display-comment .display-comment {
            margin-left: 40px
        }
    </style>
@endpush
