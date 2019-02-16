@extends('layouts.admin')
@section('dashboard-address',url('/volunteer-dashboard'))
@section('info-url',url('/edit-volunteer-info'))
@section('header-page','داشبورد داوطلب')
@push('js-header')
    <script type="text/javascript" src="{{asset('js/editable.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/form_editable.js')}}"></script>
    @endpush
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
                <tr>
                    <td>1</td>
                    <td>Eugene</td>
                    <td>Eugene</td>
                    <td>Eugene</td>
                    <td>Kopyov</td>
                    <td>@Kopyov</td>
                    <td><a href="#" id="switchery-checkbox" data-type="checklist" data-pk="1" data-title="Select fruits" class="editable editable-click editable-empty" data-original-title="" title="">Disabled</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Victoria</td>
                    <td>Victoria</td>
                    <td>Baker</td>
                    <td>Baker</td>
                    <td>@Vicky</td>
                    <td>@Vicky</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>James</td>
                    <td>James</td>
                    <td>James</td>
                    <td>Alexander</td>
                    <td>Alexander</td>
                    <td>@Alex</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Franklin</td>
                    <td>Franklin</td>
                    <td>Morrison</td>
                    <td>Morrison</td>
                    <td>@Frank</td>
                    <td>@Frank</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
