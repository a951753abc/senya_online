@extends('master')
@section('css')
    <link href="{{ URL::asset('/css/bootstrap-table.min.css') }}" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 50px;
        }
    </style>
@endsection
@section('script')
    <script src="{{ URL::asset('/js/bootstrap-table.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap-table-zh-TW.min.js') }}"></script>
@endsection
@section('content')
    <div id="toolbar">
        <button class="btn btn-default" type="button" name="add" title="新建帳號">
        	<i class="glyphicon glyphicon-plus"></i>
        </button>
    </div>
    <div class="bootstrap-table">
        <table data-toggle="table" data-toolbar="#toolbar" data-pagination="{true}" data-height="460">
            <thead>
                <tr>
                	<th class="col-xs-1"></th>
                    <th data-sortable="true" class="col-xs-2">流水號</th>
                    <th data-sortable="true" class="col-xs-3">ID</th>
                    <th data-sortable="true" class="col-xs-4">Mail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                	<td class="text-center">
                        <a href="#">
                            <i class="glyphicon glyphicon-pencil"></i>
                            <i class="glyphicon glyphicon-remove"></i>
                        </a>
                    </td>
                    <td>1</td>
                    <td>YCCU</td>
                    <td>YCCU@gmail.com</td>
                </tr>
                <tr>
                	<td class="text-center">
                        <a href="#">
                            <i class="glyphicon glyphicon-pencil"></i>
                            <i class="glyphicon glyphicon-remove"></i>
                        </a>    
                    </td>
                    <td>2</td>
                    <td>JP6</td>
                    <td>jp6@gmail.com</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
