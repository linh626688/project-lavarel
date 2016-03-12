
@extends('admin')
@section('content')


    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">

               Nhập điểm
            </div>
            <div  class="panel-body">
                {!! Form::open(array('route'=>array('add.update',$data['id']),'files' => true,'method'=>'PUT')) !!}
                    <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
                    <div class="form-group has-success">
                        <label class="control-label" for="success" >Năm học</label>
                        <input type="text" class="form-control" id="success"  name = "inputNamhoc" value="{!! old('inputNamhoc',isset($data) ? $data['year']:null)!!} "/>

                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="warning"> Học kỳ </label>
                        <input type="text" class="form-control" id="warning"  name = "inputHocki" value="{!! old('inputHocki',isset($data) ? $data['season']:null)!!} "/>


                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="error">  Mã môn học</label>
                        <input type="text" class="form-control" id="error" name = "inputMamonhoc" value="{!! old('inputMamonhoc',isset($data) ? $data['idclass']:null)!!} "/>


                    </div>
                     <div class="form-group has-success">
                        <label class="control-label" for="error"> Lớp môn học </label>
                        <input type="text" class="form-control" id="error" name = "inputMonHoc" value="{!! old('inputMonHoc',isset($data) ? $data['subject']:null)!!} "/>


                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="error"> Địa chỉ truy cập bảng điểm </label>
                        <input type="file" class="form-control" id="error" name = "inputFile" value="{!! old('inputFile',isset($data) ? $data['file']:null)!!} "
                 />


                    </div>
                    <div>
                    <hr />
                        <input type="submit" name="submit_name" class="btn btn-default" value="Sửa"/>
                    <br><br>
                    </div>
                {!! Form::close() !!}

                Chú ý: Giáo viên cần nhập đầy đủ thông tin
            </div>
        </div>
    </div>

@endsection;
