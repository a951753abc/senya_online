@extends('master')
@section('css')
    <link href="{{ URL::asset('/css/bootstrap-table.min.css') }}" rel="stylesheet">
    <style type="text/css">
        body {
            padding-top: 50px;
        }
        .admintable {
            padding: 40px 15px;
            text-align: center;
        }
    </style>
@endsection
@section('script')
    <script src="{{ URL::asset('/js/bootstrap-table.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bootstrap-table-zh-TW.min.js') }}"></script>
@endsection
@section('content')
    <div id="toolbar">
        <button class="btn btn-default" type="button" name="paginationSwitch" title="Hide/Show pagination"><i class="glyphicon glyphicon-collapse-down icon-chevron-down"></i></button><button class="btn btn-default" type="button" name="refresh" title="Refresh"><i class="glyphicon glyphicon-refresh icon-refresh"></i></button><button class="btn btn-default" type="button" name="toggle" title="Toggle"><i class="glyphicon glyphicon-list-alt icon-list-alt"></i></button><div class="keep-open btn-group" title="Columns"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th icon-th"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li><label><input type="checkbox" data-field="id" value="1" checked="checked"> Item ID</label></li><li><label><input type="checkbox" data-field="name" value="2" checked="checked"> Item Name</label></li><li><label><input type="checkbox" data-field="price" value="3" checked="checked"> Item Price</label></li><li><label><input type="checkbox" data-field="operate" value="4" checked="checked"> Item Operate</label></li></ul></div><div class="export btn-group"><button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button"><i class="glyphicon glyphicon-export icon-share"></i> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"><li data-type="json"><a href="javascript:void(0)">JSON</a></li><li data-type="xml"><a href="javascript:void(0)">XML</a></li><li data-type="csv"><a href="javascript:void(0)">CSV</a></li><li data-type="txt"><a href="javascript:void(0)">TXT</a></li><li data-type="sql"><a href="javascript:void(0)">SQL</a></li><li data-type="excel"><a href="javascript:void(0)">Ms-Excel</a></li></ul></div>
    </div>
    <div class=admintable>
        <table data-toggle="table" data-toolbar="#toolbar">
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Item 1</td>
                    <td>$1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Item 2</td>
                    <td>$2</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
