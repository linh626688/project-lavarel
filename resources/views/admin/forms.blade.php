
@extends('admin')
@section('content')


    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">

               Nhập điểm
            </div>
            <div class="panel-body">
                <form enctype = "multipart/form-data" action="{!!  route('postDangKy') !!}" method="POST" name="create"  role="form">
                    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
                    <div class="form-group has-success">
                        <label class="control-label" for="success" >Năm học</label>
                        <input type="text" class="form-control" id="success"  name = "inputNamhoc" placeholder="2015-2016"/>
                        {!!$errors->first('inputNamhoc')!!}
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="warning"> Học kỳ </label>
                        <input type="text" class="form-control" id="warning"  name = "inputHocki" placeholder="1"/>
                         {!!$errors->first('inputHocki')!!}

                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="error">  Mã môn học</label>
                        <input type="text" class="form-control" id="error" name = "inputMamonhoc" placeholder="INT12344"/>
                         {!!$errors->first('inputMamonhoc')!!}

                    </div>
                     <div class="form-group has-success">
                        <label class="control-label" for="error"> Lớp môn học </label>
                        <input type="text" class="form-control" id="error" name = "inputMonHoc" placeholder="Mạng máy tính"/>
                         {!!$errors->first('inputMonHoc')!!}

                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="error"> Địa chỉ truy cập bảng điểm </label>
                        <input type="file" class="form-control" id="error" name = "inputFile"
                        placeholder="http://www.coltech.vnu.edu.vn/Contents/attach/cacvandehdcntt-int3507_6.pdf"/>
                         {!!$errors->first('inputFile')!!}

                    </div>
                    <div>
                    <hr />
                        <input type="submit" name="submit_name" class="btn btn-default" value="OK"/>
                    <br><br>
                    </div>
                </form>
              <!--   @if (count($errors) > 0)
                <ul>
                 @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
                 @endforeach
                </ul>
                @endif -->

                Chú ý: Giáo viên cần nhập đầy đủ thông tin
            </div>
        </div>
    </div>

@endsection;
<!-- public function index()
    {
        $title = "Demo";
        return view('admin.forms', compact('title'));
    }
 -->
