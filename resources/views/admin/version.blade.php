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
    <script type="text/javascript">
        $(function() {
            
            // $("button[name='add']").click(function(){
            //     $( "#dialog" ).dialog( "open" );
            // });
        });
    </script>
@endsection
@section('content')
    <div id="toolbar">
        <button class="btn btn-default" type="button" name="add" title="新增版本" data-toggle="modal" data-target="#myModal">
        	<i class="glyphicon glyphicon-plus"></i>
        </button>
    </div>
    <div class="bootstrap-table">
        <table data-toggle="table" data-toolbar="#toolbar" data-pagination="{true}" data-height="460">
            <thead>
                <tr>
                	<th class="col-xs-1"></th>
                    <th data-sortable="true" class="col-xs-2">流水號</th>
                    <th data-sortable="true" class="col-xs-3">版本</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $key => $value)
                    <tr>
                    	<td class="text-center">
                            <a href="#">
                                <i class="glyphicon glyphicon-pencil"></i>
                                <i class="glyphicon glyphicon-remove"></i>
                            </a>
                        </td>
                        <td>{{ $value['id'] }}</td>
                        <td>{{ $value['version'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">新增級別</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                    <button type="button" class="btn btn-primary">儲存</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
