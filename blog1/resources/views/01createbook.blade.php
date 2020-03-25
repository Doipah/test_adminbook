@if (Route::has('login'))

@if (Auth::check())
@extends('layouts.app')

@section('content')





<style type="text/css">
    .mt-50 {
        margin-top: 50px;
    }

    body {
        font-family: sans-serif;
        background-color: #eeeeee;
    }

    .file-upload {
        background-color: #ffffff;
        width: 100%;
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload1 {
        background-color: #ffffff;
        width: 100%;
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #d1d3e2;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #d1d3e2;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn1 {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #d1d3e2;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #d1d3e2;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #d1d3e2;
        color: #858796;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn1:hover {
        background: #d1d3e2;
        color: #858796;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-btn1:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-content1 {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .file-upload-input1 {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #d1d3e2;
        position: relative;
    }

    .image-upload-wrap1 {
        margin-top: 20px;
        border: 4px dashed #d1d3e2;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #858796;
        border: 4px dashed #ffffff;
    }

    .image-dropping,
    .image-upload-wrap1:hover {
        background-color: #858796;
        border: 4px dashed #ffffff;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .image-title-wrap1 {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text1 {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #d1d3e2;
        padding: 60px 0;
    }

    .drag-text1 h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #d1d3e2;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .file-upload-image1 {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #cd4535;
        transition: all .2s ease;
        outline: none;
        text-transform: inherit;
        font-weight: 700;
    }

    .remove-image1 {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #cd4535;
        transition: all .2s ease;
        outline: none;
        text-transform: inherit;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image1:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }

    .remove-image1:active {
        border: 0;
        transition: all .2s ease;
    }
</style>
{{-- @if (Route::has('login')) --}}
<div class="container-fluid">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    {{-- <img src="uploads/{{ Session::get('file') }}"> --}}
    @endif

    <!-- odl from -->


    <!-- /.container-fluid -->

    <div class="row" style="font-family: 'Kanit', sans-serif; ">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">เพิ่มข้อมูลสินค้า</h5>

                </div>



                <!-- Card Body -->
                <div class="card-body">
                    {{-- <div class="chart-area"> --}}
                    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                        {{-- {!! Form::open(array('url'=>'insertfile','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)) !!} --}}
                        @csrf

                        <div class="row">
                            <div class="col">

                                <label for=" " style="font-family: 'Kanit', sans-serif; ">ชื่อหนังสือ </label>
                                <input require type="text" class="form-control" id="book_name " name="book_name"
                                    style="font-family: 'Kanit', sans-serif; " aria-describedby="emailHelp"
                                    placeholder=" ">
                            </div>
                            <div class="col">
                                <label for=" " style="font-family: 'Kanit', sans-serif; ">ราคาหนังสือ</label>
                                <input require type="number" class="form-control" id="price_book" name="price_book"
                                    aria-describedby="emailHelp" placeholder=" ">
                            </div>

                        </div>
                        <div class="form-group form-check"></div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1 "
                                    style="font-family: 'Kanit', sans-serif; ">หมวดหมู่หนังสือ</label>

                                <select class="form-control" name="category_book" id="id_category"
                                    style="font-family: 'Kanit', sans-serif;">
                                    @foreach($data as $table)
                                    <option style="font-family: 'Kanit', sans-serif;"
                                        value="{{ $table->code_book}}">{{ $table->name_catebook}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">

                                <label for="exampleInputEmail1 "
                                    style="font-family: 'Kanit', sans-serif; ">ปีตีพิมพ์</label>
                                <input require type="text" class="form-control" id="year_print" name="year_print"
                                    aria-describedby="emailHelp" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group form-check"></div>
                        <div class="row">
                            <div class="col">

                                <label for="exampleInputEmail1 "
                                    style="font-family: 'Kanit', sans-serif; ">ผู้แต่งหนังสือ</label>
                                <input require type="text" class="form-control" id="user_write" name="user_write"
                                    aria-describedby="emailHelp" placeholder=" ">

                            </div>

                        </div>
                        {{-- <div class="form-group form-check"></div>
              <div class="row">
                <div class="col">
                    <label for="exampleInputEmail1 " style="font-family: 'Kanit', sans-serif; ">ประเภทไฟล์</label>
                    <input require type="text" class="form-control" id="category_file" name="category_file" aria-describedby="emailHelp" placeholder=" ">
                  </div>
                  </div> --}}

                        <div class="form-group form-check"></div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlTextarea1"
                                    style="font-family: 'Kanit', sans-serif; ">รูปภาพปกหนังสือ</label>
                                {{-- <div class="form-group">
                      <label for="exampleFormControlTextarea1" style="font-family: 'Kanit', sans-serif; ">รูปภาพ</label>
                      <input require type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp" placeholder=" ">

                    </div> --}}
                                <script class="jsbin"
                                    src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                <div class="file-upload">
                                    <button class="file-upload-btn" type="button"
                                        onclick="$('.file-upload-input').trigger( 'click' )">เพิ่มรูปภาพ</button>

                                    <div class="image-upload-wrap">
                                        <input class="file-upload-input" type='file' id="image" name="image"
                                            onchange="readURL(this);" accept="image/*" />
                                        <div class="drag-text">
                                            <h3>ลากและวางไฟล์หรือเลือก</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content">
                                        <img class="file-upload-image" src="#" alt="your image" />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ
                                                <span class="image-title">Uploaded Image</span></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1"
                                    style="font-family: 'Kanit', sans-serif; ">เลือกประเภทไฟล์</label>
                                {{-- <div class="form-group">
                      <label for="exampleFormControlTextarea1" style="font-family: 'Kanit', sans-serif; ">รูปภาพ</label>
                      <input require type="file" class="form-control" id="image" name="image" aria-describedby="emailHelp" placeholder=" ">

                    </div> --}}
                                <script class="jsbin"
                                    src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                <div class="file-upload1">
                                    <button class="file-upload-btn" type="button"
                                        onclick="$('.file-upload-input1').trigger( 'click' )">เพิ่มไฟล์</button>

                                    <div class="image-upload-wrap1">
                                        <input class="file-upload-input1" type='file' id="category_file"
                                            name="category_file" onchange="readURLfile(this);" accept="files/*" />
                                        <div class="drag-text">
                                            <h3>ลากและวางไฟล์หรือเลือกไฟล์เท่านั้น</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content1">
                                        <img style="  max-height: 200px;
                                        max-width: 200px;
                                        margin: auto;
                                        padding: 20px;"
                                            src="{{ url('https://pngimage.net/wp-content/uploads/2018/06/icona-file-png.png')}} "
                                            alt="your image" />
                                        <div class="image-title-wrap1">
                                            <button type="button" onclick="removeUpload1()"
                                                class="remove-image1">ลบรูปภาพ <span class="image-title1">Uploaded
                                                    Image</span></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group form-check"></div>
                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"
                                        style="font-family: 'Kanit', sans-serif; ">รายละเอียดหนังสือ</label>

                                    <textarea placeholder="เขียนรายละเอียด...." class="form-control" name="description"
                                        id="description" rows="6"></textarea>
                                </div>

                            </div>

                        </div>
                        <div class="form-group form-check"></div>
                        <div class="row">
                            <div class="col">
                                <!-- <button style="font-family: 'Kanit', sans-serif; " name id="sub" type="submit" class="btn btn-primary">บันทึก</button> -->
                                <button style="font-family: 'Kanit', sans-serif; " name="sub" id="sub" type="submit"
                                    class="btn btn-primary">บันทึก</button>
                                <button style="font-family: 'Kanit', sans-serif; " type="reset"
                                    class="btn btn-danger ">ยกเลิก</button>
                            </div>
                        </div>

                    </form>
                    {{--
    </div> --}}
                </div>
            </div>
        </div>


        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">

                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">เพิ่มหมวดหมู่หนังสือ</h5>


                </div>



                <!-- Card Body -->
                <div class="card-body">

                    <form action="{{ route('catebook.store') }}" method="POST" enctype="multipart/form-data">
                        {{-- {!! Form::open(array('url'=>'insertfile','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)) !!} --}}
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1 "
                                    style="font-family: 'Kanit', sans-serif; ">รหัสหมวดหมู่หนังสือ</label>
                                <input  type="number" class="form-control" id="code_book" name="code_book"
                                    aria-describedby="emailHelp" placeholder=" ">
                            </div>
                        </div>
                        <div class="form-group form-check"></div>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1 "
                                    style="font-family: 'Kanit', sans-serif; ">หมวดหมู่หนังสือ</label>
                                <input require type="text" class="form-control" id="name_catebook" name="name_catebook"
                                    aria-describedby="emailHelp" placeholder=" ">
                            </div>
                        </div>

                        <div class="form-group form-check"></div>
                        <div class="row">
                            <div class="col">
                                <!-- <button style="font-family: 'Kanit', sans-serif; " name id="sub" type="submit" class="btn btn-primary">บันทึก</button> -->
                                <button style="font-family: 'Kanit', sans-serif; "  type="submit"
                                    class="btn btn-primary">บันทึก</button>
                                <button style="font-family: 'Kanit', sans-serif; " type="reset"
                                    class="btn btn-danger ">ยกเลิก</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <script>
        function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      console.log('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});
function readURLfile(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap1').hide();

      $('.file-upload-image1').attr('src', e.target.result);
      console.log('src', e.target.result);
      $('.file-upload-content1').show();

      $('.image-title1').html(input.files[0].name);
      console.log(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload1();
  }
}

function removeUpload1() {
  $('.file-upload-input1').replaceWith($('.file-upload-input1').clone());
  $('.file-upload-content1').hide();
  $('.image-upload-wrap1').show();
}
$('.image-upload-wrap1').bind('dragover', function () {
		$('.image-upload-wrap1').addClass('image-dropping1');
	});
	$('.image-upload-wrap1').bind('dragleave', function () {
		$('.image-upload-wrap1').removeClass('image-dropping1');
});


    </script>


    @endsection
    @else
    @endif

    @endif
