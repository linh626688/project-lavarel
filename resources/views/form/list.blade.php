@extends('admin')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Quản Lý Điểm</title>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      .btn {padding:0px;font-weight:bold}
    </style>
    <script type="text/javascript">
        function xacnhanxoa(msg) {
            if (window.confirm(msg)) {
                return true;
            }
            return false;
        }
    </script>
  </head>
  <body>
    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Danh Sách Nam Hoc</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Năm Học</th>
                <th>Học Kì</th>
                <th>Mã Môn Học</th>
                <th>Tên Môn Học</th>
                <th>File</th>
                <th>Xóa</th>
                <th>Sửa</th>
              </tr>
            </thead>
           <tbody>
              @foreach($add as $ds)
              <tr>
                <td>{{$ds->year}}</td>
                <td>{{$ds->season}}</td>
                <td>{{$ds->idclass}}</td>
                <td>{{$ds->subject}}</td>
                <td><a href="{{ asset("public/upload/diem/$ds->file") }}">{{$ds->subject}}</a></td>
                <th>
                  {!! Form::open(array('route'=>array('add.destroy',$ds -> id),'method'=>'DELETE')) !!}
                   <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit" id="delete" class="btn btn-link">Xóa</button>

                  {!! Form::close() !!}
                </th>
                <th><a href="{!! route('add.edit',$ds->id)!!}">Sửa</a></th>
              </tr>
              @endforeach
          </table>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
@endsection;
