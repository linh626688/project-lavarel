 @extends('layout')
 @section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
	            <div class="col-lg-6">
	                <h1>Website môn học</h1>
	                <p> TRƯỜNG ĐẠI HỌC CÔNG NGHỆ - ĐẠI HỌC QUỐC GIA HÀ NỘI </p>
                    <br>
	            </div>
            </div>
            <!-- TÌM KIẾM NÂNG CAO -->
            <form class="form-inline" action="/search-custom" method="POST">
                <div class="form-group">
                    <label for="exampleInputName2">Năm Học </label>
                    <input type="text" class="form-control" name="namhoc" placeholder="2009-2010">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Học Kì</label>
                    <input type="text" class="form-control" name="hocki" placeholder="1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Mã Môn Học</label>
                    <input type="text" class="form-control" name="mamonhoc" placeholder="INT1234">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Tên Môn Học</label>
                    <input type="text" class="form-control" name="tenmonhoc" placeholder="Mạng Máy Tính">
                </div>

                <br><br>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary">Tìm Kiếm Nâng Cao</button>
            </form>
            <!-- END TÌM KIẾM NÂNG CAO -->

            <!-- KẾT QUẢ TÌM KIẾM -->
           <!--  <div class="col-lg-12">
            <br><br>
            <p>Kết quả tìm kiếm nâng cao</p>
            <ul class="list-group">
            	<li class="list-group-item"> Mạng máy tính INT2013 3 - Học kỳ 2 - Năm 2013-2014</li>
            	<li class="list-group-item"> Mạng máy tính INT2013 3 - Học kỳ 1 - Năm 2014-2014</li>
            	<li class="list-group-item"> Mạng máy tính INT2013 3 - Học kỳ 2 - Năm 2012-2013</li>
            </ul>
            </div> -->
            <!-- END KẾT QUẢ TÌM KIẾM -->
        </div>
    </div>

@endsection;
