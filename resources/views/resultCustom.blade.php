 @extends('layout')
 @section('content')

  <body>
    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Kết Quả Tìm Kiếm</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>

                <th>Năm Học</th>
                <th>Học Kì</th>
                <th>Mã Môn Học</th>
                <th>Tên Môn Học</th>
                <th>Xem</th>
              </tr>
            </thead>
            <tbody>
              @foreach($custom as $ds)
              <tr>

                <td>{{$ds->year}}</td>
                <td>{{$ds->season}}</td>
                <td>{{$ds->idclass}}</td>
                <td>{{$ds->subject}}</td>
                <td><a href="{{ asset("public/upload/diem/$ds->file") }}">{{$ds->subject}}</a></td>
                 </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>

@endsection;
